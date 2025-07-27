<?php require 'connect.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>

    <link href="css/bootstrap.css" rel="stylesheet">
</head>


<body class="bg-light">
    <?php include '../navbar.php';?>

    <div class="container mt-4">
        <h3 class="text-center text-black mb-4">Courses List</h3>
        <table class="table table-border table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>HOURS</th>
                    <th>PRICE</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
            
            $conn=dbconnect();
            $sql="SELECT*FROM courses";
            $res = $conn->query($sql);

             while($row=$res->fetch_assoc()){
                $x = $row['id'];
                $i = $row['title'];
                $j = $row['description'];
                $n = $row['hours'];
                $y = $row['price'];
                    echo"<tr> <td>$x</td> <td>$i</td> <td>$j</td> <td>$n</td> <td>$y</td> 
                
                <td>
                    <a href='edit_courses.php?id={$row['id']}' class='btn btn-warning btn-sm'> Edit </a>
                    <a href='delete_courses.php?id={$row['id']}' class='btn btn-danger btn-sm'> Delete </a> 
                </td>
                    </tr>";
            } ?>


            </tbody>
        </table>
        <a href="add_courses.php" class="btn btn-success mb-3"> Add Courses </a>

        <?php
                    if (isset($_GET['msg']) && $_GET['msg'] == 'updated') {
                        echo '<div class="alert alert-success">Updated Successfully</div>';
                    }
                    ?>

    </div>
</body>

</html>