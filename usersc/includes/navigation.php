<?php
?>

<div class="collapse navbar-collapse navbar-top-menu-collapse navbar-left"> <!-- Left navigation items -->
	<ul class="nav navbar-nav ">

        <?php if ($user->roles() && in_array("User", $user->roles())) { ?>
            <li><a href="<?=$us_url_root?>pages/home.php"><i class="fa fa-fw fa-home"></i> Home </a></li> <!-- Common for Hamburger and Regular menus link -->
        <?php } ?>

        <?php if ($user->roles() && in_array("User", $user->roles())) { ?>
            <li><a href="<?=$us_url_root?>pages/about_us.php"><i class="fa fa-fw fa-info-circle"></i> About Us </a></li> <!-- Common for Hamburger and Regular menus link -->
        <?php } ?>

        <?php if ($user->roles() && in_array("User", $user->roles())) { ?>
            <li><a href="<?=$us_url_root?>pages/partner_program.php"><i class="fa fa-fw fa-users"></i> Partner Program </a></li> <!-- Common for Hamburger and Regular menus link -->
        <?php } ?>

        <?php if ($user->roles() && in_array("User", $user->roles())) { ?>
            <li><a href="<?=$us_url_root?>pages/solutions.php"><i class="fa fa-fw fa-phone"></i> Solutions </a></li> <!-- Common for Hamburger and Regular menus link -->
        <?php } ?>


        <?php if ($user->roles() && in_array("User", $user->roles())) { ?>
            <li><a href="<?=$us_url_root?>pages/carriers.php"><i class="fa fa-fw fa-bell"></i> Carriers </a></li> <!-- Common for Hamburger and Regular menus link -->
        <?php } ?>




        <?php if ($user->roles() && in_array("User", $user->roles())) { ?>
            <li><a href="<?=$us_url_root?>pages/contact_us.php"><i class="fa fa-fw fa-envelope"></i> Contact Us </a></li> <!-- Common for Hamburger and Regular menus link -->
        <?php } ?>



        <?php if ($user->roles() && in_array("User", $user->roles())) { ?>
            <li><a href="<?=$us_url_root?>pages/help.php"><i class="fa fa-fw fa-question-circle"></i> Help </a></li> <!-- Common for Hamburger and Regular menus link -->
        <?php } ?>

<!-- Custom menus. Uncomment or copy/paste to use
		<li class="dropdown"><a class="dropdown-toggle" href="" data-toggle="dropdown"><i class="fa fa-wrench"></i> Custom 1 <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="<?=$us_url_root?>"><i class="fa fa-wrench"></i> Item 1</a></li>
				<li><a href="<?=$us_url_root?>"><i class="fa fa-wrench"></i> Item 2</a></li>
				<li><a href="<?=$us_url_root?>"><i class="fa fa-wrench"></i> Item 3</a></li>
			</ul>
		</li>
		
		<li class="dropdown"><a class="dropdown-toggle" href="" data-toggle="dropdown"><i class="fa fa-wrench"></i> Custom 2 <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="<?=$us_url_root?>"><i class="fa fa-wrench"></i> Item 1</a></li>
				<li><a href="<?=$us_url_root?>"><i class="fa fa-wrench"></i> Item 2</a></li>
				<li><a href="<?=$us_url_root?>"><i class="fa fa-wrench"></i> Item 3</a></li>
			</ul>
		</li>
		
		<li><a href="/"><i class="fa fa-home"></i> Other</a></li>
                              -->
	</ul>
</div>	 <!-- End left navigation items -->	

<?php
?>