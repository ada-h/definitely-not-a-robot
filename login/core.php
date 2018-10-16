<?php 
    ob_start();
    session_start();
?>
<?php 
$current_file= $_SERVER['SCRIPT_NAME'];
$http_referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
?>
<?php
function loggedIn(){
    if(isset($_SESSION['userId']) && !empty($_SESSION['userId'])){
        return true;
    }else{
        return false;
    }
}
?>