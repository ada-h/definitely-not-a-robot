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
};
//Remembering a User
function getAuthenticatedUser(){
    global $conn;
    $query = "SELECT username FROM dashboard WHERE `id` =  ".$_SESSION['userId'] ;
    //    die($query);
       $result = mysqli_query($conn, $query);
      
       if ($result){
           $query_num_rows = mysqli_num_rows($result);
           
             while($user = mysqli_fetch_array($result)){
                return $user['username'];
             }
           }
        }

?>