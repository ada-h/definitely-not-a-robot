    <?php 
        //learning how to connect to a database
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
            //checking to see if username already exists on the database 
        }if(!empty($username)){
            $check_existing_usernames = "SELECT * FROM dashboard where Username='$username'";
            $result = mysqli_query($conn, $check_existing_usernames);
            $query_num_rows = mysqli_num_rows($result);
                if($query_num_rows >= 1){
                    echo "Username already exists!";
                }
        }
        //Insering a username if it's not there yet
        else if ($query_num_rows < 1){
            $sql = "INSERT INTO dashboard (Username, Password)
            values ('$username','$password')";
            $result = mysqli_query($conn, $sql);
            if($result){
            echo "New record is inserted successfully";
            }else{
                echo "Something went wrong";
            }

        }else{
                echo "Error".$sql."<br/>". $conn->error;
            }
            $conn->close();
       // }
        }
        else {
            echo "Password should not be empty";
            die();
       }
    ?>