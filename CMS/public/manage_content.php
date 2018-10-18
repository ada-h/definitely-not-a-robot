<?php 
$dbhost="localhost";
$dbpassword = "";
$dbname="cms";
$dbuser="root"
$connection = mysqli_connect($dbhost,$dbpassword,$dbname,$dbuser);
if (mysqli_connect_errno()){
    die(" Failed to connect to Database: ". mysqli_connect_error() ." (" .mysqli_connect_errno() . ")"
    );
}else {
    
}
?>
<?php
require_once("../includes/functions.php"); 
include("../includes/layout/header.php");
?>
<body>
    <div id="header">
        <h1> Dummy Blog </h1>
    </div>
    <div id="main">
        <div id="navigation">
            &nbsp;
        </div>  
            <div id="page">
            <h2>Manage Content</h2>
            </div>
        </div>
<?php
include("../includes/layout/footer.php");
?>