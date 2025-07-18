<!DOCTYPE html>
<html>

<head>
    <title>User Profile</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-success d-flex justify-content-center align-items-center vh-100">
    <?php
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$city = $_POST['city'];
?>
    <div class="card p-4">
        <h4 class="mb-3">User Profile</h4>
        <div class="alert alert-success">
            Welcome, <strong><?php echo $name; ?></strong>!
        </div>
       <!-- <ul class="list-group">
            <li class="list-group-item"><strong>Full Name:</strong> <//?php echo $name; ?></li>
            <li class="list-group-item"><strong>Email:</strong> <//?php echo $email; ?></li>
            <li class="list-group-item"><strong>Age:</strong> <//?php echo $age; ?></li>
            <li class="list-group-item"><strong>City:</strong> <//?php echo $city; ?></li>
        </ul> -->
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">City</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $age; ?></td>
                    <td><?php echo $city; ?></td>

                </tr>
                </tbody>
        </table>
        <a href="Page-1.html" class="btn btn-primary mt-3">Back to Form</a>
    </div>

</body>

</html>