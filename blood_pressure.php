<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> learning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1> What does your blood Pressure Mean? </h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Diastolic: <input type="number" name="diastolic">
        Systolic: <input type="number" name="systolic">
                  <input type="submit">
    </form>

    <?php
    //Disclaimer: This is just for fun as it it is missing some parameters
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name1 =$_REQUEST['diastolic'];
        $name2 =$_REQUEST['systolic'];
        if(($name1 < 90) && ($name2 < 60)){
        echo "Warning: Your blood pressure is too low";
        } else if(($name1 == 90) && ($name2 == 60)){
        echo "Way to go! Keep making great lifestyle choices";
        } else if(($name1 >= 140) && ($name2 > 90)){
        echo "Your blood pressure is too high. Village People on overtime!";
        } else echo " Check your blood pressure again!";
    }
    ?>
    <h1> Plagarism Test!</h1>
    <form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="file" name= "your_text">
    <input type="file" name= "their_text">
    <input type="submit">
    </form>
    
    <?php
    // I do realize we already have something like this, just trying to understand how it works.
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text1 =$_REQUEST['your_text'];
        $text2 =$_REQUEST['their_text'];
        similar_text($text1, $text2, $result);
        $round = round($result);
        echo "These two are similar by " . $round ."%";
    }
    ?>   
    <br/>
    <?php 
        if (isset($_POST['username']))
        $username = $_POST['username'];
        if (!empty($username)) {

            $handle = fopen("names.txt", "a");
            fwrite ($handle, $username . "\n");
            fclose ($handle);
        } else {echo "Please enter a name";
        }
    ?>
   <form action="blood_pressure.php" method="POST">
    Username: <input type="text" name="username">
    <input type="submit" value= "submit">
   </form>
        
   <?php 
        $image = $_FILES ['image']['name'];
        // Restricting the type of file that is uploaded by a user
        $extension = strtolower(substr($image, strpos($image, ".") +1));
       // $size =$_FILES ['image']['size'];
       $type = $_FILES ['image']['type'];
        $tmp_name = $_FILES ['image']['tmp_name'];

        if (isset($image)){
            if (!empty ($image) && ($extension=='jpg' || $extension== 'jpeg') && $type=='image/jpeg'){
                $location = 'uploads/';
                move_uploaded_file($tmp_name, $location.$image);
                echo "Uploaded!";
            }else {
                echo "Please Choose a file and make sure it is a jpg or jpeg";
            }
        }
    ?>
    <h1> File Uploads</h1>
    <form method = "POST" action="blood_pressure.php" enctype="multipart/form-data">
    <input type="file" name= "image">
    <input type="submit">
    </form>

    <?php

        $directory = 'uploads';
        if ($handle = opendir($directory.'/')){
            while ($files = readdir($handle)){
                echo $files;
            }
        }
    ?>
  
</body>
</html>