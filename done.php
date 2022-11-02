<?php

// echo '<pre>';
// var_dump($_GET);
// echo '<pre>';

include ('db.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $status = 1;
}

if ($id > 0){
  $query = "UPDATE `todo` SET `status`='$status' WHERE id= '$id'";
  $executeQuery = mysqli_query($connect, $query);
  header('Location: todo.php');

}else {
  header('Location: todo.php');
}