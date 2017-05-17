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
            <h1>Carriers</h1>

            <div class="row">


                <div class="col-md-offset-2 col-md-4 panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"> Content so far</div>
                    <div class="panel-body">
                        DSTORM Consulting is a carrier agnostic company.


                        As a result of being a true partner DSTORM will look at all possibilities including but not limited to AT&T for our Partners.

                    </div>
                </div>


            </div>

            <div style="width: 80%">
                <img src="images/att_solution_provider.jpg" class="img-responsive">
            </div>
        <!-- Content Ends Here -->
    </div>
</div> <!-- /.wrapper -->


<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->
<?php require_once 'includes/postit_romp.php'; // postit code linking ?>
<script>

</script>


<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
