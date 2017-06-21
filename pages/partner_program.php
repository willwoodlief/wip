<?php
//die(var_dump($_REQUEST));
require_once '../users/init.php';

require_once $abs_us_root.$us_url_root.'users/includes/header_not_closed.php';
?>

<?php require_once 'includes/postit_pre.php'; // postit css linking ?>
<style>
    .put-page-only-styles-here {
        /* for styles for the entire site put in users/css/custom.css */
    }
</style>

</head>

<body>
<div id="page-wrapper" style="">
    <div class="container-fluid">
        <!-- Content Starts Here -->
        <!-- For css classes add above around line 9 -->
        <!-- For javascript add stuff below where it says per-page-javascript -->
        <!-- Jquery is already loaded into this page, if you need it -->

        <!-- Page Heading -->
        <h1>DStorm Partnership Program</h1>
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

    $name = Input::get('name');
    $email = Input::get('email');
    $phone = Input::get('phone');
    $talk = Input::get('subject');

    $subject = "DSTORM Partner Program Form";
    $body = "Name:\t\t$name \nEmail:\t\t$email \nPhone:\t\t$phone \nMessage:\t\t$talk ";

    email($settings->email_alert_to,$subject,$body,false,false,$settings->email_cc_alert_to);


    if($reCaptchaValid || $settings->recaptcha == 0){ //if recaptcha valid or recaptcha disabled

        if ($error_message) {
            $b_do_form = true;
        } else {
            if ( !($email || $phone )) {
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



            <div class="row" style="margin-left: 1em">


                <div class=" col-md-8 panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">DStorm Partnership Program</div>
                    <div class="panel-body">
                        <?php if ($b_do_form) { ?>

                        <p>Join the DSTORM Consulting Partnership Family! Our Partnership Referral Program is second to none.
                        We have an Operations Manager on staff to manage the contracting, installation and billing
                        needs regardless of how large or small the network.</p>

                        <p>Your customers will be VERY SATISFIED working with DSTORM. We can dedicate someone to work in your office
                        once a week or more if need be. We have been creating Custom Telecommunications Solutions
                        for over 20-years. We are an authorized solution provider  for AT&T.</p>

                        <p>We will do whatever it takes to earn your business and ensure you and your customer are extremely
                        satisfied before, during, and after the installation.</p>

                        <p>To request more information please call at 281-407-6407</p>

                        <p>or complete the information listed below and someone will contact you.</p>


                        <form action="partner_program.php" method="post">
                            <input type="hidden" name="csrf" value="<?=Token::generate(); ?>">

                            <div class="form-group">
                                <label for="inputEmail">First and Last Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email Address</label>
                                <input type="text" class="form-control" id="email"  name="email" placeholder="Email Address">
                            </div>

                            <div class="form-group">
                                <label for="phoneNumber">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                            </div>

                            <div class="form-group">
                                <label for="message">Subject</label>
                                <textarea class="form-control custom-control" id="subject" name="subject" rows="3" style=""></textarea>
                            </div>

                            <div class="col-md-12 ">
                                <div class=" col-md-6 form-group" style="">
                                    <?php if($settings->recaptcha == 1){ ?>
                                        <div class="g-recaptcha" data-sitekey="<?=$publickey; ?>" data-theme="dark" style="margin-left: auto; margin-right: auto;"></div>
                                    <?php } ?>
                                </div>
                                <div class=" col-md-6 form-group">
                                    <div class="form-group" style="text-align: center;width: 100%">
                                        <button type="submit" class="btn btn-primary btn-lg" style="width:304px;height: 78px;font-weight: bold;font-size: 18px ;">Send Message</button>
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


                    </div>
                </div>



            </div>

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

<?php require_once 'includes/postit_romp.php'; // postit code linking ?>
<!-- Place any per-page javascript here -->
<script>

</script>

<?php 	if($settings->recaptcha == 1){ ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php } ?>


<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
