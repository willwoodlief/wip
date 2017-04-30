<?php

// this is where all the work gets done in the afterhook
// when this function all the libraries are loaded, and the job is in two formats, a hash and an object
// both have the same information just added both for convenience
// settings is the stdobj that has all the site settings --minus env variables
// notice here how we have to have the POST_AFTER_JOBS set in users/private_init.php for us to post stuff
// this allows the after hook to run in development machines without adding test data

function do_main_work($settings) {
        if (getenv('POST_AFTER_JOBS')) {

            publish_to_sns('afterhook does nothing right now', 'add content');
        }
}


$isRunningFromBrowser = !isset($GLOBALS['argv']);
if ($isRunningFromBrowser) {
    die('Cannot run this particular script from the web');
}

$localroot =   realpath( dirname( __FILE__ ) );

require_once $localroot.'/../users/private_init.php';
global $abs_us_root;
$abs_us_root = $localroot;

// Set config
$GLOBALS['config'] = array(
    'mysql'      => array(
        'host'         => getenv('DB_HOST'),
        'username'     => getenv('DB_USERNAME'),
        'password'     => getenv('DB_PASSWORD'),
        'db'           =>  getenv('DB_NAME'),
        'charset'       => getenv('DB_CHARSET'),
    ),
    'remember'        => array(
        'cookie_name'   => 'pmqesoxiw318374csb',
        'cookie_expiry' => 604800  //One week, feel free to make it longer
    ),
    'session' => array(
        'session_name' => 'user',
        'token_name' => 'token',
    )
);


require_once $localroot.'/../users/classes/Config.php';
require_once $localroot.'/../users/classes/DB.php';
require_once $localroot.'/../lib/aws/aws-autoloader.php';
require_once $localroot.'/../pages/helpers/pages_helper.php';
require_once $localroot.'/../pages/helpers/mime_type.php';
require_once $localroot.'/../users/helpers/helpers.php';
require_once $localroot.'/../users/classes/phpmailer/PHPMailerAutoload.php';

try {

    $_SERVER['REMOTE_ADDR'] = '127.0.0.1'; #to prevent notices from aws library
    if ($argc != 2) {
        die("Usage is after_hook.php <job id integer>");
    }

    $db = DB::getInstance();
    $settingsQ = $db->query("SELECT * FROM settings");
    $settings = $settingsQ->first();


    do_main_work($settings);

    publish_to_sns('afterhook found job!', 'something');
    sleep(60);

    printOkJSONAndDie('blank function');

} catch(Exception $e) {
    $debug = array('message'=> $e->getMessage(), 'trace' => $e->getTrace());
    publish_to_sns("Error in after hook", $debug);
        printErrorJSONAndDie('could not insert job: '. $e->getMessage() . "\n" . $e->getTraceAsString());
    }

