<?php
//will upload all unless is set
$real =   realpath( dirname( __FILE__ ) );
require_once $real.'/../../lib/ForceUTF8/Encoding.php';
require_once $real.'/../../lib/aws/aws-autoloader.php';
require_once $real.'/../../pages/helpers/mime_type.php';
require_once $real.'/../../lib/SimpleImage/src/abeautifulsite/SimpleImage.php';


function publish_to_sns($title,$message) {
    global  $settings;

    # get settings if not set already
    if (! isset($settings)) {
        $db = DB::getInstance();
        $settingsQ = $db->query("Select * FROM settings");
        $settings = $settingsQ->first();
    }

    if (!$settings->sns_arn || empty($settings->sns_arn) ) {
        return;
    }


    $sharedConfig = [
        'region'  => getenv('AWS_REGION'),
        'version' => 'latest'
    ];

    // Create an SDK class used to share configuration across clients.
    $sdk = new Aws\Sdk($sharedConfig);

    $client = $sdk->createSns();

    $message_to_send =  to_utf8($message);
    if (is_array($message)) {
        $message_to_send = json_encode($message_to_send);
    }

    $payload = array(
        'TopicArn' => $settings->sns_arn,
        'Message' => $message_to_send,
        'Subject' => to_utf8($title),
        'MessageStructure' => 'string',
    );

    try {
        $client->publish( $payload );
    } catch ( Exception $e ) {
        #print $e->getMessage();
        #print $e->getTraceAsString();
        $email = Config::get('contact/email');
        email($email,"could not publish: $title" ,$message);
    }

}

function to_utf8($what) {
    return ForceUTF8\Encoding::toUTF8($what);
}



#takes the string value, pads it to the left with 0 and makes 3 wide sections
function get_string_filepath_from_id($i) {
    $number_folders = 4;
    $t = str_pad($i,$number_folders * 3,'0',STR_PAD_LEFT);
    $ret = '';
    for($p = 0; $p < $number_folders ; $p++) {
        $ret =  $ret.'/'.substr($t,$p * 3,3);
    }
    return $ret;

}


#returns true or false depending on if it can connect to url
function is_connected($url_to_check)
{
    //http://stackoverflow.com/questions/4860365/determine-in-php-script-if-connected-to-internet
    $connected = fsockopen($url_to_check, 80);
    $y = var_dump($connected);

    //website, port  (try 80 or 443)
    if ($connected){
        $is_conn = true; //action when connected
        fclose($connected);
    }else{
        $is_conn = false; //action in connection failure
    }
    return $is_conn;

}



function base64_to_image($base64_string, $output_file) {
    //http://stackoverflow.com/questions/15153776/convert-base64-string-to-an-image-file
    $ifp = fopen($output_file, "wb");

    $data = explode(',', $base64_string);

    fwrite($ifp, base64_decode($data[1]));
    fclose($ifp);

    return $output_file;
}


function getGUID(){
    if (function_exists('com_create_guid')){
        return trim(com_create_guid(),'{}');
    }else{
        $charid = strtoupper(md5(uniqid( mt_rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = ''
            .substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12);

        return $uuid;
    }
}

function get_json_last_err_string() {
    switch (json_last_error()) {
        case JSON_ERROR_NONE:
            return ' - No errors';
            break;
        case JSON_ERROR_DEPTH:
            return ' - Maximum stack depth exceeded';
            break;
        case JSON_ERROR_STATE_MISMATCH:
            return ' - Underflow or the modes mismatch';
            break;
        case JSON_ERROR_CTRL_CHAR:
            return ' - Unexpected control character found';
            break;
        case JSON_ERROR_SYNTAX:
            return ' - Syntax error, malformed JSON';
            break;
        case JSON_ERROR_UTF8:
            return ' - Malformed UTF-8 characters, possibly incorrectly encoded';
            break;
        default:
            return ' - Unknown error';
            break;
    }
}

//usual curl wrapper, returns the http code, if the system does not have curl set up to work use the rest helper below
function get_curl_resp_code($url) {

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, true);    // we want headers
    curl_setopt($ch, CURLOPT_NOBODY, true);    // we don't need body
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_TIMEOUT,10);
    curl_setopt($ch, CURLOPT_VERBOSE, true);

    $verbose = fopen('php://temp', 'w+');
    curl_setopt($ch, CURLOPT_STDERR, $verbose);

    if (_pages_isLocalHost()) {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    }
    curl_exec($ch);
   // $verboseLog = stream_get_contents($verbose);

   // echo "Verbose information:\n<pre>", htmlspecialchars($verboseLog), "</pre>\n";
  //  exit;
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $httpcode;
}

//this allows us to post stuff without relying on curl, which some php environments do not have configured
function rest_helper($url, $params = null, $verb = 'GET', $format = 'json',$build_query = true,$gdebug=false)
{
    $ch = curl_init();
    $verbose = null;
    if ($gdebug) {
        $verbose = fopen('php://temp', 'w+');
        curl_setopt($ch, CURLOPT_STDERR, $verbose);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
    }

    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);
    if ($build_query) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    } else {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    }


    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    if (_pages_isLocalHost()) {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    }
    // receive server response ...
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec ($ch);

    $httpcode = intval(curl_getinfo($ch, CURLINFO_HTTP_CODE));
    if ($httpcode == 0 || $httpcode >= 400) {
        throw new Exception("Could not send data, response was ".$httpcode);
    }

    if ($gdebug) {
        rewind($verbose);
        $verboseLog = stream_get_contents($verbose);
        echo "Verbose information:\n<pre>", htmlspecialchars($verboseLog), "</pre>\n";
    }
    curl_close ($ch);

    switch ($format) {
        case 'json':
            $r = json_decode($server_output);
            if ($r === null) {
                throw new Exception("failed to decode $server_output as json");
            }
            return $r;

        case 'xml':
            $r = simplexml_load_string($server_output);
            if ($r === null) {
                throw new Exception("failed to decode $server_output as xml");
            }
            return $r;
        default: {
            $r = $server_output;
        }
    }
    return $r;


}


function printOkJSONAndDie($phpArray=[]) {
    if (!is_array($phpArray)) {
        $r=[];
        $r['message'] = $phpArray;
        $phpArray = $r;
    }
    header('Content-Type: application/json');
    $phpArray['status'] = 'ok';
    $phpArray['valid'] = true;
    $out = json_encode($phpArray);
    if ($out) {
        print $out;
    } else {
        printErrorJSONAndDie( json_last_error_msg());
    }
    exit;
}

function printErrorJSONAndDie($message,$phpArray=[]) {
    header('Content-Type: application/json');
    $phpArray['status'] = 'error';
    $phpArray['valid'] = false;
    $phpArray['message'] = $message;
    $out = json_encode($phpArray);
    if ($out) {
        print $out;
    } else {
        print json_last_error_msg();
    }

    exit;
}



//for debugging
//for debugging
function print_nice($elem,$max_level=15,$print_nice_stack=array()){
    //if (is_object($elem)) {$elem = object_to_array($elem);}
    if(is_array($elem) || is_object($elem)){
        if(in_array($elem,$print_nice_stack,true)){
            echo "<span style='color:red'>RECURSION</span>";
            return;
        }
        $print_nice_stack[]=&$elem;
        if($max_level<1){
            echo "<span style='color:red'>reached maximum level</span>";
            return;
        }
        $max_level--;
        echo "<table border=1 cellspacing=0 cellpadding=3 width=100%>";
        if(is_array($elem)){
            echo '<tr><td colspan=2 style="background-color:#333333;"><strong><span style="color:white">ARRAY</span></strong></td></tr>';
        }else{
            echo '<tr><td colspan=2 style="background-color:#333333;"><strong>';
            echo '<span style="color:white">OBJECT Type: '.get_class($elem).'</span></strong></td></tr>';
        }
        $color=0;
        foreach($elem as $k => $v){
            if($max_level%2){
                $rgb=($color++%2)?"#888888":"#44BBBB";
            }else{
                $rgb=($color++%2)?"#777777":"#22BBFF";
            }
            echo '<tr><td valign="top" style="width:40px;background-color:'.$rgb.';">';
            echo '<strong style="color:black">'.$k."</strong></td><td style='background-color:white;color:black'>";
            print_nice($v,$max_level,$print_nice_stack);
            echo "</td></tr>";
        }
        echo "</table>";
        return;
    }
    if($elem === null){
        echo "<span style='color:green'>NULL</span>";
    }elseif($elem === 0){
        echo "0";
    }elseif($elem === true){
        echo "<span style='color:green'>TRUE</span>";
    }elseif($elem === false){
        echo "<span style='color:green'>FALSE</span>";
    }elseif($elem === ""){
        echo "<span style='color:green'>EMPTY STRING</span>";
    }else{
        echo str_replace("\n","<strong><span style='color:green'>*</span></strong><br>\n",$elem);
    }
}

function TO($object){ //Test Object
    if(!is_object($object)){
        throw new Exception("This is not a Object");
    }
    if(class_exists(get_class($object), true)) echo "<pre>CLASS NAME = ".get_class($object);
    $reflection = new ReflectionClass(get_class($object));
    echo "<br />";
    echo $reflection->getDocComment();

    echo "<br />";

    $metody = $reflection->getMethods();
    foreach($metody as $key => $value){
        echo "<br />". $value;
    }

    echo "<br />";

    $vars = $reflection->getProperties();
    foreach($vars as $key => $value){
        echo "<br />". $value;
    }
    echo "</pre>";
}


# this protects from having a umask set in a shared environment
function mkdir_r($dirName, $rights=0777){
    $dirs = explode('/', $dirName);
    $dir='';
    foreach ($dirs as $part) {
        $dir.=$part.'/';
        if (!is_dir($dir) && strlen($dir)>0) {
            mkdir($dir);
            chmod($dir, $rights);
        }

    }
}

function test_site_connection($theURL) {
    $resp = intval(get_curl_resp_code($theURL));
    if($resp >=200 && $resp < 400){
        return true;
    }

    return false;
}

function get_http_response_code($theURL) {
    $headers = get_headers($theURL);
    return substr($headers[0], 9, 3);
}




function call_api($job) {
   $base_url = Config::get('api/on_check');
    $query = [];
   if (!empty($job->transcribe->email) )  {
       array_push($query , 'email='. urlencode($job->transcribe->email));
   }

    if (!empty(trim($job->transcribe->website)) )  {
        array_push($query , 'url='. urlencode($job->transcribe->website));
    }
    $q = implode('&',$query);

    if (!empty($q)) {
        $full_url = $base_url . '&' . $q;
        $resp = get_curl_resp_code($full_url);
        if ($resp != 200 && $resp != 404) {
            publish_to_sns("Could not send api information", "While sending, got the response code of : $resp . The url was $full_url");
        }
    }
}

function get_file_from_url($url) {
    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    if (_pages_isLocalHost()) {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    }
    $contents = curl_exec($ch);
    if (curl_errno($ch)) {
        throw new Exception("could not open url: $url because of curl error: ".curl_error($ch) );
    } else {
        curl_close($ch);
    }

    if (!is_string($contents) || !strlen($contents)) {
        throw new Exception("could not get contents from : $url  " );

    }

    return $contents;
}

function _pages_isLocalHost() {
    if (isset($_SERVER['REMOTE_ADDR'])) {
        if( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {
            return true;
        }
    }


    return false;

}

function execInBackground($cmd) {
    if (substr(php_uname(), 0, 7) == "Windows"){
        pclose(popen("start /B ". $cmd, "r"));
    }
    else {
        exec($cmd . " &> /dev/null");
    }
}

function runAfterHook($root_path_of_app,$jobid) {
    $command = "php $root_path_of_app/tasks/after_hook.php $jobid";
    execInBackground($command);
}

