<?php
    //trying to retrieve data from database!... Works!!! .. Yayy!!!
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
  $query = "SELECT Username, Password FROM dashboard WHERE Username =  '$username' AND Password = '$password' ";

  $result= mysqli_query($conn, $query);

    if (mysqli_num_rows($result)== 0){
                   
        echo 'Invalid Username or Password';
  } else if(mysqli_num_rows($result)== 1) {
     echo "Welcome!"; 
     //i used this to make sure i had the right query- die("Database query failed. " .mysqli_error($conn));
  }
  $conn->close();
?>
