<?php require 'connect.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollments</title>

    <link href="css/bootstrap.css" rel="stylesheet">
</head>


<body class="bg-light">
    <?php include '../navbar.php';?>

    <div class="container mt-4">
        <h3 class="text-center text-black mb-4">Enrollments List</h3>
        <table class="table table-border table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>STUDENTS_ID</th>
                    <th>COURSES_ID</th>
                    <th>GRADE</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
            
            $conn=dbconnect();
            $sql="SELECT*FROM enrollments ";
            $res = $conn->query($sql);

             while($row=$res->fetch_assoc()){
                $x = $row['id'];
                $i = $row['students_id'];
                $j = $row['courses_id'];
                $n = $row['grade'];
                    echo"<tr> <td>$x</td> <td>$i</td> <td>$j</td> <td>$n</td>
                
                <td>
                    <a href='edit_enrollments.php?id={$row['id']}' class='btn btn-warning btn-sm'> Edit </a>
                    <a href='delete_enrollments.php?id={$row['id']}' class='btn btn-danger btn-sm'> Delete </a> 
                </td>
                    </tr>";
            } ?>


            </tbody>
        </table>

        <a href="add_enrollments.php" class="btn btn-success mb-3"> Add Enrollments </a>

        <?php
                    if (isset($_GET['msg']) && $_GET['msg'] == 'updated') {
                        echo '<div class="alert alert-success">Updated Successfully</div>';
                    }
                    ?>
        <hr>
        <h4 class="text-center text-black mb-4">Student's enrollments List</h4>
        <table class="table table-border table-striped">
            <thead class="table-dark">
                <tr>
                    <th>STUDENTS_ID</th>
                    <th>COURSES_ID</th>
                    <th>GRADE</th>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>DOB</th>
                </tr>
            </thead>
            <tbody>
                <?php
            
            $conn=dbconnect();
            $sql="SELECT enrollments.students_id, enrollments.courses_id , enrollments.grade , enrollments.id 
            ,studentss.name , studentss.email , studentss.phone , studentss.date_of_birth
             FROM enrollments JOIN studentss ON enrollments.students_id = studentss.id";
 
            $res = $conn->query($sql);

             while($row=$res->fetch_assoc()){
                $i = $row['students_id'];
                $j = $row['courses_id'];  
                $m = $row['grade'];      
                $x = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $dob = $row['date_of_birth'];


                    echo"<tr> <td>$i</td> <td>$j</td> <td>$m</td> <td>$x</td> <td>$name</td> <td>$email</td> <td>$phone</td> <td>$dob</td>
                
                    </tr>";
            } ?>


            </tbody>
        </table>



    </div>
</body>

</html>