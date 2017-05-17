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


            <div class="row">
                <!-- Dont need to have to use bootstrap classes either
                just put everything in the container fluid div
                 you can delete the row class if you want
                 -->

                <div class="col-md-offset-2 col-md-4 p">
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">Our Services</div>
                        <div class="panel-body">

                            <div class="list-group">

                                <a href="#" class="list-group-item">Internet Services</a>
                                <a href="#" class="list-group-item">Network Services </a>
                                <a href="#" class="list-group-item">Voice Services </a>
                                <a href="#" class="list-group-item">Unified Communications </a>
                                <a href="#" class="list-group-item">Security </a>
                                <a href="#" class="list-group-item">Mobility Services </a>
                                <a href="#" class="list-group-item">Mobile Plans and Devices </a>


                            </div>
                        </div>
                    </div>

                    <img alt="Customized Solutions" class="img-rounded img-responsive" src="http://www.olympusattelecom.com/wp-content/uploads/2013/08/OT_EndToEndSolutions_Banner.jpg">
                </div>

                <div class="col-md-offset-1 col-md4">
                    <h1>End to End Solutions</h1>
                </div>
            </div>



        <!-- Content Ends Here -->
    </div>


</div> <!-- /.wrapper -->


<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>
<?php require_once 'includes/postit_romp.php'; // postit code linking ?>
<!-- Place any per-page javascript here -->
<script>

</script>


<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
