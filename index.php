<?php 
include ('db.php'); 

if(isset($_POST['todoName'])){

    $todoName = $_POST['todoName'];
    $todoTime = $_POST['todoTime'];
    $query = "INSERT INTO `todo`(`todo_name`, `todo_time`) VALUES ('$todoName','$todoTime')";
    $executeQuery = mysqli_query($connect, $query);

    if ($executeQuery){
        header('Location: todo.php');
    }
    else{
        echo 'Błędne zapytanie!';
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" 
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d2a7751006.js" crossorigin="anonymous"></script>

    <title>To Do List</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>My To Do List</h3>
                </div>
                <div class="card-body">
                    <form action="index.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">To Do</label>
                            <input type="text" class="form-control" name="todoName" placeholder="Enter Your to do">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">To do Time</label>
                            <input type="date" class="form-control" name="todoTime">
                        </div>
                        <button type="submit" name="todoSubmit" class="btn btn-primary">Submit</button>
                    </form> 
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>