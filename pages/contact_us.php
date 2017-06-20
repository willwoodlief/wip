<?php
//die(var_dump($_REQUEST));
require_once '../users/init.php';

require_once $abs_us_root.$us_url_root.'users/includes/header_not_closed.php';
?>

<?php require_once 'includes/postit_pre.php'; // postit css linking ?>
<style>

    div.method {
        padding: 2em;
    }

    input[type="text"]:not(.has-feedback):not(:focus), textarea:not(.has-feedback):not(:focus) {
        border: 2px #4d4d4d solid !important;
    }

    .g-recaptcha >div { margin: auto}
</style>

</head>

<body>
<div id="page-wrapper" style="">
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 style="text-align: center">Contact US</h1>

        <h3 style="text-align: center">
            For information about the services listed please include your information below or give us a call at 281-407-6407
        </h3>
        <br>
        <br>
<?php
require_once $abs_us_root.$us_url_root.'users/includes/navigation.php';




if (!securePage($_SERVER['PHP_SELF'])){die('Need to be logged in and have a User role to see this page');}
if ($settings->site_offline==1){die("The site is currently offline.");}
$error_message = [];
$reCaptchaValid=FALSE;
$first_name = $last_name = $email = $phone = $website = $company = $talk = '';
$b_do_form = true;
$b_only_first_error_shown = false;
$b_error_contact = false;
$b_error_talk = false;
if (Input::exists()) {
    $token = Input::get('csrf');
    if(!Token::check($token)){
        array_push($error_message, 'Page has expired, please refresh it completely');
        $b_only_first_error_shown = true;
    }

    //Check to see if recaptcha is enabled
    if($settings->recaptcha == 1){
        require_once '../users/includes/recaptcha.config.php';

        //reCAPTCHA 2.0 check
        $response = null;

        // check secret key
        $reCaptcha = new ReCaptcha($privatekey);

        // if submitted check response
        if ($_POST["g-recaptcha-response"]) {
            $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"],$_POST["g-recaptcha-response"]);
        }
        if ($response != null && $response->success) {
            $reCaptchaValid=TRUE;

        }else{
            $reCaptchaValid=FALSE;
            array_push($error_message, 'Please check the reCaptcha.');
        }
    }else{
        $reCaptchaValid=TRUE;
    }

    $first_name = Input::get('first_name');
    $last_name = Input::get('last_name');
    $email = Input::get('email');
    $phone = Input::get('phone');
    $website = Input::get('website');
    $company = Input::get('company');
    $talk = Input::get('talk');



    if($reCaptchaValid || $settings->recaptcha == 0){ //if recaptcha valid or recaptcha disabled

        if ($error_message) {
            $b_do_form = true;
        } else {
            if ( !($email || $phone || $website)) {
                $b_do_form = true;
                $b_error_contact = true;
                array_push($error_message, 'Please add a way to contact us');
            } elseif (!$talk) {
                $b_do_form = true;
                $b_error_talk = true;
                array_push($error_message, 'Please add a few comments');
            } else {
                $b_do_form = false;
                // send info to email here

                // end send info to email
            }
        }


    }
}

if ($b_do_form) {
?>

    <?php if ($error_message) { ?>
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <div class="bs-component">
                    <div class="alert alert-dismissible alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php foreach ($error_message as $error) { ?>
                            <strong><?= $error ?></strong> <br>
                            <?php if ($b_only_first_error_shown) {break;} ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <form action="contact_us.php" method="post">
    <input type="hidden" name="csrf" value="<?=Token::generate(); ?>">
    <div class="row">
        <div class="col-md-6 ">
            <div class="form-group">
                <input type="text" class="form-control input-lg" id="first_name" name="first_name" placeholder="First Name" value="<?= $first_name ?>">
            </div>
        </div>

        <div class="col-md-6 ">
            <div class="form-group " >
                <input type="text" class="form-control input-lg" id="last_name"  name="last_name" placeholder="Last Name" value="<?= $last_name ?>">
            </div>
        </div>

        <div class="col-md-6 ">
            <div class="form-group <?= $b_error_contact ? ' has-error has-feedback' : '' ?>">
                <input type="text" class="form-control input-lg <?= $b_error_contact ? ' has-error has-feedback' : '' ?>" id="email"  name="email" placeholder="Email" value="<?= $email ?>">
                <?php if ($b_error_contact) { ?><span class="glyphicon glyphicon-remove form-control-feedback"></span> <?php } ?>
            </div>
        </div>

        <div class="col-md-6 ">
            <div class="form-group <?= $b_error_contact ? ' has-error has-feedback' : '' ?>">
                <input type="text" class="form-control input-lg <?= $b_error_contact ? ' has-error has-feedback' : '' ?>" id="phone"  name="phone" placeholder="Phone" value="<?= $phone ?>">
                <?php if ($b_error_contact) { ?><span class="glyphicon glyphicon-remove form-control-feedback"></span> <?php } ?>
            </div>
        </div>

        <div class="col-md-6 ">
            <div class="form-group ">
                <input type="text" class="form-control input-lg" id="website"  name="website" placeholder="Website" value="<?= $website ?>">
            </div>
        </div>

        <div class="col-md-6 ">
            <div class="form-group">
                <input type="text" class="form-control input-lg" id="company" name="company" placeholder="Company" value="<?= $company ?>">
            </div>
        </div>

        <div class="col-md-12 ">
            <div class="form-group  <?= $b_error_talk ? ' has-error has-feedback' : '' ?>">
                <textarea  class="form-control input-lg   <?= $b_error_talk ? ' has-error has-feedback' : '' ?>" id="talk" name="talk" placeholder="Tell Us Whats on Your Mind" rows="8">
                    <?= $talk ?>
                </textarea>
                <?php if ($b_error_talk) { ?><span class="glyphicon glyphicon-remove form-control-feedback"></span> <?php } ?>
            </div>
        </div>

        <div class="col-md-12 ">
            <div class=" col-md-6 form-group" style="">
                <?php if($settings->recaptcha == 1){ ?>
                    <div class="g-recaptcha" data-sitekey="<?=$publickey; ?>" data-theme="dark" style="margin-left: auto; margin-right: auto;"></div>
                <?php } ?>
            </div>
            <div class=" col-md-6 form-group">
                <div class="form-group" style="text-align: center;width: 100%">
                    <button type="submit" class="btn btn-primary btn-lg" style="width:304px;height: 78px;font-weight: bold;font-size: 18px ;">Press Me</button>
                </div>

            </div>
        </div>

    </div>
</form>

<?php } else { ?>

    <div class="col-md-offset-2 col-md-5">
        <div class="bs-component">
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Thanks for reaching out to us !</strong> <span style="margin-left: 2em">We will contact you as soon as we can</span>
            </div>
        </div>
    </div>

<?php } ?>
        <!-- Content Ends Here -->
    </div>

</div> <!-- /.wrapper -->








<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->
<?php require_once 'includes/postit_romp.php'; // postit code linking ?>
<script>

</script>

<?php 	if($settings->recaptcha == 1){ ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php } ?>


<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
