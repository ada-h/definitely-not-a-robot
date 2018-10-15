
<h1> Sign-in Form </h1>
<form method="post" action="<?php $current_file ?>">
    Username: <input type="text" name="inputUsername"><br/><br/>
    Password: <input type="password"name="inputPassword"><br/><br/>
    <input type="submit" value="Submit">
</form>
<?php 
if (isset($_POST['inputUsername']) && isset($_POST['inputPassword'])){
    $username = $_POST['inputUsername'];
    $password = $_POST['inputPassword'];
    if (!empty($username) && !empty($password)){
       $query = "SELECT id FROM dashboard WHERE Username = '$username' && Password = '$password' " ;
       $result = mysqli_query($conn, $query);
       if ($result){
           $query_num_rows = mysqli_num_rows($result);
           if ($query_num_rows == 0){
               echo "Wrong Username or Password";
           }else if ($query_num_rows == 1){
             echo $user_id = mysqli_result($result, 0 , 'id');
           }
       }
    }
    else {
        echo "Please input your username and password";
    }
}
?>