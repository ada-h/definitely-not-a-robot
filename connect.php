    <?php 
        //learning how to connect to a database
       $username = filter_input(INPUT_POST,'username');
       $password = filter_input(INPUT_POST,'password');
       $password_hash = md5($password);
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
        else{
            $sql = "INSERT INTO dashboard (Username, Password)
            values ('$username','$password_hash')";
            if ($conn->query($sql)){
                echo "New record is inserted successfully";
            }
            else{
                echo "Error".$sql."<br/>". $conn->error;
            }
            $conn->close();
        }
        }
        else {
            echo "Password should not be empty";
            die();
       }
    ?>