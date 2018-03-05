
        <?php 
        
            $connect = mysqli_connect("HOST", "USERNAME", "PASSWORD", "DATABASE");
        
            $sql = "SELECT * FROM TABLE";
        
        $result = mysqli_query($connect, $sql);
        
        $json_array = array();
        
        while($row = mysqli_fetch_assoc($result))
        {
            $json_array[] = $row;
        }
        
        echo json_encode($json_array);

        mysqli_close($connect);
        
        ?>
