<?php

#returns jobs based on what filters are set in the get statement, this is a protected page that all roles can use
require_once '../users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/header_json.php';
require_once $abs_us_root.$us_url_root.'pages/helpers/pages_helper.php';

if (!securePage($_SERVER['PHP_SELF'])){die();}
if ($settings->site_offline==1){die("The site is currently offline.");}




if (isset($_POST['bb_notes']) && sizeof($_POST['bb_notes'])) {

    //make sure the page names are the same
    $notes = $_POST['bb_notes'];
    $last_page_name = null;
    $page_name = null;
    foreach ($notes as $key => $value) {
        $page_name = $value['page_name'];
        if (strlen($page_name) > 1) {
            if ($last_page_name) {
                if (strcmp($page_name,$last_page_name) != 0 ) {
                    printErrorJSONAndDie('page names are not the same ' . $page_name . ' ' . $last_page_name);
                }
            } else {
                $last_page_name = $page_name;
            }
        }

    }

    if (!$page_name) {
        printErrorJSONAndDie('could not get page name ');
    }

    $userid = $user->data()->id;
    $notes = $_POST['bb_notes'];
    $batch_id = create_note_batch($userid,$page_name);
    foreach ($notes as $key => $value) {
        $id = $key;
        $data = $value;
        $full_note_id = $data['full_id'];
        insert_note($batch_id,$full_note_id,$data);

    }

    printOkJSONAndDie('notes are saved ');
} else {
    $userid = $user->data()->id;
    $page_name =  $_POST['page_name'];
    $batch_id = create_note_batch($userid,$page_name);
    //insert_note($batch_id,'none',null);
    printOkJSONAndDie('No notes recieved');
}





