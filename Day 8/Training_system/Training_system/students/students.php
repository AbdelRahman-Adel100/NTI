<?php require 'connect.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>

    <link href="css/bootstrap.css" rel="stylesheet">
</head>


<body class="bg-light">
    <?php include '../navbar.php';?>

    <div class="container mt-4">
        <h3 class="text-center text-black mb-4">Students List</h3>
        <table class="table table-border table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>DOB</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
            
            $conn=dbconnect();
            $sql="SELECT*FROM studentss";
            $res = $conn->query($sql);

             while($row=$res->fetch_assoc()){
                $x = $row['id'];
                $i = $row['name'];
                $j = $row['email'];
                $n = $row['phone'];
                $y = $row['date_of_birth'];
                    echo"<tr> <td>$x</td> <td>$i</td> <td>$j</td> <td>$n</td> <td>$y</td> 
                
                <td>
                    <a href='edit_student.php?id={$row['id']}' class='btn btn-warning btn-sm'> Edit </a>
                    <a href='delete_student.php?id={$row['id']}' class='btn btn-danger btn-sm'> Delete </a> 
                </td>
                    </tr>";
            } ?>


            </tbody>
        </table>
        <a href="add_student.php" class="btn btn-success mb-3"> Add Student </a>

        <?php
                    if (isset($_GET['msg']) && $_GET['msg'] == 'updated') {
                        echo '<div class="alert alert-success">Updated Successfully</div>';
                    }
                    ?>

    </div>
</body>

</html>