
<?php 
//Log in and Log out a user. Cookies, Sessions and generally keep the work area nice and.. y'know
    require_once('core.php');
    require_once('connect.php');
?>
<?php 
    if (loggedIn()){
        echo "You are logged in". "<a href=logout.php> Log Out </a>";
    } else include('loginform.php');
?>