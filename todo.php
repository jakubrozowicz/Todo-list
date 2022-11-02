<?php
include ('db.php'); 
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
            <div class="col-lg-10 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>My To Do List</h3>
                </div>
                <div class="card-body">
                    <?php
                        $query = "SELECT * FROM todo";
                        $executeQuery = mysqli_query($connect, $query);
                        $results = mysqli_fetch_all($executeQuery, MYSQLI_ASSOC);
                        
                        echo '<table class="table">';
                        echo '<thead class="thead-dark">';
                        echo '<tr>';
                        echo '<th scope="col">Todo</th>';
                        echo '<th scope="col">Todo Time</th>';
                        echo '<th>Status</th>';
                        echo '<th>Created</th>';
                        echo '<th>Updated</th>';
                        echo '<th>Action</th>';
                        echo '</tr>';
                        echo '</thead>';             
                    
                        foreach ($results as $result)
                        {
                            if($result["status"] == 1)
                            {
                                echo '<tbody style ="text-decoration: line-through">';
                            }else

                            {
                            echo '<tbody>';
                            }
                            echo '<tr>';
                            echo '<td >' . $result["todo_name"] . '</td>';
                            echo '<td>' . $result["todo_time"] . '</td>';
                            echo '<td>' . $result["status"] . '</td>';
                            echo '<td>' . $result["created_at"] . '</td>';
                            echo '<td>' . $result["updated_at"] . '</td>';
                            echo '<td><a href="done.php?id=' . $result["id"] . '"<i class="fa-solid fa-circle-check"></i></a> <a href="delete.php?id=' . $result["id"] . '"<i class="fa-solid fa-trash" style="margin-left: 20%"></i></a></td>';
                            echo '</tr>';
                            echo '</tbody>';
                        }
                    echo '</table>';

                    echo '<a href="index.php">Add another task to do list</a>';
                    ?>

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