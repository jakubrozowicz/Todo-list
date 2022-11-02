<?php
include ('db.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

if ($id > 0){
    $query = "DELETE FROM `todo` WHERE id = $id";
    $executeQuery = mysqli_query($connect, $query);
    header('Location: todo.php');

}else {
    header('Location: todo.php');
}


?>