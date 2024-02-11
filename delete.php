

<?php

include 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM students WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if($result){
        header('location:index.php');
    }
    else{
        die(mysqli_error($connection));
    }
}

?>