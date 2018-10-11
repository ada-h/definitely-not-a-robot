<?php
    //Preventing hackers from being able to log in with any password
        $name= $_POST['name'];
        $email= $_POST['email'];
        $comments= $_POST['comments'];
        $website = $_POST['website'];
        $articled = $_GET['id'];

        $users_name = mysql_real_escape_string($name);
        $users_email = mysql_real_escape_string($email);
        $users_website = mysql_real_escape_string($website);
        $users_comment = mysql_real_escape_string($comments);
        if( ! is_numeric($articled) )
        die('invalid article id');

        $query= "INSERT INTO `comments` (`id`, `Name`, `e-mal`, `website`, `comment`, `timestamp`, `articled`) 
            VALUES (NULL, $users_name, '$users_email', '$users_website', '$users_comment', CURRENT_TIMESTAMP, '$articled');"
        
        mysql_query ($query);
        echo "Thank you for your comment";

        mysql_close($con);
        }   
        
?>