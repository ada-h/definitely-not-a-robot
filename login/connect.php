
<?php
    // Using the include fuction for the connect.php
        $host ="localhost";
        $dbusername ="root";
        $dbpassword = "";
        $dbname="forever";
    //Create connection
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_errno()){
        die(" Failed to connect to Database: ". mysqli_connect_error() ." (" .mysqli_connect_errno() . ")"
        );
    }else {
        
    }
    
?>