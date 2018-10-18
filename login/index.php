
<?php 
//Log in and Log out a user. Cookies, Sessions and generally keep the work area nice and.. y'know
require_once('connect.php');
    require_once('core.php');
    
?>
<?php 
    if (loggedIn()){
        echo getAuthenticatedUser(). " is logged in ". "<a href=logout.php> Log Out </a><br>";
    } else include('loginform.php');

?>