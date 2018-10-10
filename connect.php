    <?php 
        //learning how to connect to a database
        $mysqli = new mysqli("localhost", "root", "", "forever");
      
        $query = "SELECT 'food', 'calories' FROM trial "; 

        if ($query_run = mysqli_query($mysqli, $query)){
           
            while($query_row = mysqli_fetch_assoc($query_run )){
                $food = $query_row['food'];
                $calories = $query_row['calories'];

                echo $food .' has ' . $calories;
            }
        } else {
            echo mysqli_error($mysqli);
        }
    ?>