<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/starter-template.css" rel="stylesheet">
<link href="css/mediaqueries.css" rel="stylesheet">
<link href="css/menu.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/flaunt.js"></script>
</head>

<body>
<div class="topbg">
<div class="top-leftpanel">
  <ul class="topsocialicons">
    <li><a href="#"><img src="images/fbs.png" alt="" border="0" /></a></li>
     <li><a href="#"><img src="images/twiter.png" alt="" /></a></li>
     <li><a href="#"><img src="images/thoughtbubbles.png" alt="" /></a></li>
      <li><a href="#"><img src="images/instagram.png" alt="" /></a></li>
      <li><a href="#"><img src="images/dlink.png" alt="" /></a></li>
  </ul>
  </div>
<div class="top-leftpanel" align="center"><a href="#"><img src="images/Logo.png" alt="" border="0" /></a></div>
<div class="top-leftpanel">
  <ul class="toplinks">
<?php

session_start();
	if(isset($_SESSION['id'])){
	?>
	<li><a href="#"><?php echo $_SESSION['email']; ?></a></li>
	<li><a href="logout.php">Logout</a></li>
   
    <?php }else{ ?>
	<li><a href="Register.php">Register</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="logout.php">Logout</a></li>
  	
	
	
	<?php } ?>
	
</ul>
  </div>
<div class="clearfix"></div>
</div>
<div class="menubg">
<div class="menuwarp">
<div class="menuleft"><a href="#"><img src="images/search_all.png" alt="" border="0" /></a></div>
<div >
      <nav class="nav">
        <ul class="nav-list">
        <li class="nav-item"> <a href="#">Dots</a>
            <ul class="nav-submenu">
              <li class="nav-submenu-item"> <a href="?=submenu-1">Submenu item 1</a> </li>
              <li class="nav-submenu-item"> <a href="?=submenu-2">Submenu item 2</a> </li>
              <li class="nav-submenu-item"> <a href="?=submenu-3">Submenu item 3</a> </li>
              <li class="nav-submenu-item"> <a href="?=submenu-4">Submenu item 4</a> </li>
            </ul>
          </li>
          <li class="nav-item"> <a href="?=home">Retailers</a> </li>
          
          <li class="nav-item"> <a href="#">Shop</a> </li>
          <li class="nav-item"> <a href="#">Deals</a> </li>
        </ul>
      </nav>
    </div>
    <div class="clearfix"></div>
<!--  <ul class="topicons">
    <li><a href="#"><img src="images/search_all.png" alt="" border="0" /></a></li>
    <li><a href="#"><img src="images/dots.png" alt="" border="0" /></a></li>
    <li><a href="#"><img src="images/retailers.png" alt="" border="0" /></a></li>
    <li><a href="#"><img src="images/shop.png" alt="" border="0" /></a></li>
    <li><a href="#"><img src="images/deals.png" alt="" /></a></li>
  </ul>
<div class="clearfix"></div>-->
  </div>
</div>