<?php

//get page name
function get_page_name($uri = null){
    //Separate document name from uri
    //$tokens = explode('/', $uri);
    //$page = end($tokens);
    if (!$uri) {
        $uri = $_SERVER['PHP_SELF'];
    }

    $abs_us_root=$_SERVER['DOCUMENT_ROOT'];

    $self_path=explode("/", $_SERVER['PHP_SELF']);
    $self_path_length=count($self_path);
    $us_url_root = '';

    for($i = 1; $i < $self_path_length; $i++){
        array_splice($self_path, $self_path_length-$i, $i);
        $us_url_root=implode("/",$self_path)."/";
        if (file_exists($abs_us_root.$us_url_root.'z_us_root.php')){
            break;
        }else{
        }
    }

    $urlRootLength=strlen($us_url_root);
    $page=substr($uri,$urlRootLength,strlen($uri)-$urlRootLength);
    return $page;

}

function is_postit_page(){
    $page = get_page_name();
//    $pages = ['pages/postit.php','pages/home.php','pages/about_us.php','pages/partner_program.php','pages/home.php','pages/carriers.php',
//        'pages/contact_us.php','pages/postit.php','pages/postit.php','pages/veterans.php'];

    $pages = [];
    if (in_array($page, $pages)) {
        return true;
    } else {
        return false;
    }
}


function create_note_batch($user_id,$page_name) {
    $db = DB::getInstance();
    $atime = date("Y-m-d H:i:s");
    $db->insert("note_batches",['user_id'=>$user_id,'page_name'=>$page_name,'when_uploaded'=>$atime]);
    return $db->lastId();
}

function insert_note($note_batch_id,$full_note_id,$note) {
    $db = DB::getInstance();
    $data_json = json_encode($note,JSON_NUMERIC_CHECK |  JSON_HEX_APOS );
    $db->insert("notes",['note_batch_id'=>$note_batch_id,'full_note_id'=>$full_note_id,'note'=>$data_json]);
    return $db->lastId();
}

function get_notes_for_this_page() {
    if (is_postit_page()) {
        $name =  get_page_name();
        return get_notes_for_page($name);
    } else {
        return false;
    }
}

function get_notes_for_page($page_name) {
    //first get the most recent set of notes for this page
    $db = DB::getInstance();
    $page_mr = $db->query("SELECT id FROM note_batches WHERE page_name = ? ORDER BY id DESC limit 1",
        [$page_name]);

    if ($db->count() > 0) {
        //replace it
        $id = $page_mr->first()->id;

    } else {
        return false;
    }

    $query = $db->query("SELECT * FROM notes WHERE note_batch_id = ? ORDER BY full_note_id ASC ",
        [$id]);

    $results = $query->results();
    $ret = [];
    foreach ($results as $rec) {
        $jdata = $rec->note;
        $name = $rec->full_note_id;
        $ret[$name] = $jdata;
    }

    return $ret;
}
