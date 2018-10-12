<?php
    //trying to retrieve data from database!... syntax error(--)
        $host ="localhost";
        $dbusername ="root";
        $dbpassword = "";
        $dbname="forever";
    //Create connection
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_errno()){
        die(" Failed to connect to Database: ". mysqli_connect_error() ." (" .mysqli_connect_errno() . ")"
        );
    }
  //Perform Database Query
  $username =$_POST['inputUsername'];
  $password =$_POST['inputPassword'];
  $query = "SELECT * FROM dashboard WHERE Username = '". $username . "'" AND Password = '" . $password . "'";

  $result= mysqli_query($conn, $query);

  if ($result) {
      echo "Query Owk";
  } else{
     // echo "Something went wrong";
    die("Database query failed. " .mysqli_error($conn));
  }
?>