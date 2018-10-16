<?php
include("../includes/layout/header.php");
require_once("../includes/functions.php")
?>
<body>
    <div id="header">
        <h1> Dummy Blog </h1>
    </div>
    <div id="main">  
            <div id="page">
            <h2>Admin Menu</h2>
            <p> Welcome to the Admin Area</p>
            <ul>
                <li> <a href="managecontent.php"> Manage Website Content</a></li>
                <li> <a href="manageadmins.php"> Manage Admin Users</a></li>
                <li> <a href="logout.php"></a> Logout </li>
            </ul>
            </div>
    </div>
</body>
</html>
