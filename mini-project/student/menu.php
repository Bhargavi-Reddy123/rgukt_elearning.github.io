<link rel="stylesheet" type="text/css" href="css/home.css?v=<?php echo time();?>">
<?php include('mysqlconnection.php');?>
<?php include('logoutcheck.php');?>

<div class="menu-bar">
	<ul>
		<!--<li class="active"><a href="#"><i class="fas fa-home"></i>Home</a></li>-->
		<li><a href="#">Home</a></li>
		<li><a href="<?PHP echo SITEURL;?>student/about.php">About us</a><i class="fa fa-user"></i>
		<li><a href="<?PHP echo SITEURL;?>student/about.php">Departments</a><i class="fa fa-user"></i>
			<!--<div class="sub-menu1">
				<ul>
					<li><a href="#">Mission</a></li>
					<li><a href="#">Vision</a></li>
					<li><a href="#">Team</a></li>
				</ul>
			</div>-->
		</li>
		<!--<li><a href="login.html" target="_blank">Login/Register</a></li>-->
		<li><a href="<?PHP echo SITEURL;?>student/login.php">Login</a>
	
		<li><a href="<?PHP echo SITEURL;?>student/g1.php">Gallery</a></li>
		<li><a href="<?PHP echo SITEURL;?>student/contact.php" >Contact</a></li>
		<li><a href="<?PHP echo SITEURL;?>student/logout.php" >Logout</a></li>
	</ul>
	</div>