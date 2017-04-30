<?php
/*
UserSpice 4
An Open Source PHP User Management System
by the UserSpice Team at http://UserSpice.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<?php require_once 'init.php'; ?>
<?php require_once $abs_us_root.$us_url_root.'users/includes/header.php'; ?>
<?php require_once $abs_us_root.$us_url_root.'users/includes/navigation.php'; ?>

<?php if (!securePage($_SERVER['PHP_SELF'])){die();} ?>
<?php if($user->data()->id != 1){
  Redirect::to('account.php');
}
  ?>
<?php
//PHP Goes Here!

$query = $db->query("SELECT * FROM email");
$results = $query->first();

if(!empty($_POST)){
	$to = $_POST['test_acct'];
	$subject = 'Testing Your Email Settings!';
	$body = 'This is the body of your test email';
	$mail_result=email($to,$subject,$body);
}

?>
<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
      <div class="col-sm-12">

        <!-- Left Column -->
        <div class="class col-sm-4"></div>

        <!-- Main Center Column -->
        <div class="class col-sm-3">
          <!-- Content Goes Here. Class width can be adjusted -->
          <h1>
            Test your email settings.
          </h1><br>
          It's a good idea to test to make sure you can actually receive system emails before forcing your users to verify theirs. <br><br>
          <?php
			if (!empty($_POST)){
				if($mail_result){
					echo 'Mail sent successfully<br/>';
				}else{
					echo 'Mail ERROR<br/>';
				}

			}
		  
		  ?>
		  
		  <form class="" name="test_email" action="email_test.php" method="post">
            <label>Send test to (Ideally different than your from address):
              <input required size='50' class='form-control' type='text' name='test_acct' value='' /></label>

              <label>&nbsp;</label>
              <input class='btn btn-primary' type='submit' value='Send A Test Email' class='submit' />
          </form>

          <!-- End of main content section
        </div>


        <div class="class col-sm-1"></div>
      </div>
    </div>

    <!-- /.row -->

    <!-- footers -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

    <!-- Place any per-page javascript here -->

<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
