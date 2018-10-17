
<?php 
        // connect to a database
       $username = filter_input(INPUT_POST,'username');
       $password = filter_input(INPUT_POST,'password');
       if(!empty($username)){
        if (!empty($password)){
            $host ="localhost";
            $dbusername ="root";
            $dbpassword = "";
            $dbname="forever";
        }
        //Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error ('.mysqli_connect_errno() . ')'
            .mysqli_connect_error());
        }
?>

<?php
include("../includes/layout/header.php");
    //Database Query 
  $query = "SELECT Username, Password FROM dashboard WHERE Username =  '$username' AND Password = '$password' ";
  $result= mysqli_query($conn, $query);
    if (!result){
        die("Database Query Failed.");

    }
require_once("../includes/functions.php")
?>
<body>
    <div id="header">
        <h1> Dummy Blog </h1>
    </div>
    <div id="main">  
            <div id="page">
                <h2>Manage Content</h2> 
            </div>
    </div>
</body>
</html>