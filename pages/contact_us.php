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

    input[type="text"]:not(:focus), textarea:not(:focus) {
        border: 2px #4d4d4d solid !important;
    }
</style>

</head>

<body>
<?php
require_once $abs_us_root.$us_url_root.'users/includes/navigation.php';




if (!securePage($_SERVER['PHP_SELF'])){die('Need to be logged in and have a User role to see this page');}
if ($settings->site_offline==1){die("The site is currently offline.");}

?>





<div id="page-wrapper" style="">
    <div class="container-fluid">
        <!-- Content Starts Here -->
        <!-- For css classes add above around line 9 -->
        <!-- For javascript add stuff below where it says per-page-javascript -->
        <!-- Jquery is already loaded into this page, if you need it -->

            <!-- Page Heading -->
            <h1 style="text-align: center">GIVE US A SHOUT</h1>

        <h3 style="text-align: center">Use the form below to drop us an e-mail. Old-fashioned phone calls work too ~ 555.555.5555.</h3>
        <br>
        <br>
        <form>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" id="first_name" placeholder="First Name">
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" id="last_name" placeholder="Last Name">
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="form-group">

                        <input type="text" class="form-control input-lg" id="email" placeholder="Email">
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" id="phone" placeholder="Phone">
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" id="website" placeholder="Website">
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" id="company" placeholder="Company">
                    </div>
                </div>

                <div class="col-md-12 ">
                    <div class="form-group">
                        <textarea  class="form-control" id="talk input-lg" placeholder="Tell Us Whats on Your Mind" rows="8"></textarea>
                    </div>
                </div>

                <div class="col-md-12 ">
                    Add captcha to here
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">Press Me</button>
                    </div>
                </div>

            </div>
        </form>


        <!-- Content Ends Here -->
    </div>


</div> <!-- /.wrapper -->


<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->
<?php require_once 'includes/postit_romp.php'; // postit code linking ?>
<script>

</script>


<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
