 <!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-success d-flex justify-content-center align-items-center vh-100">

<div class="card p-4">
    <h4 class="mb-3">User Information</h4>
    <form method="POST" action="page 2.php">
        <div class="mb-2">
            <label>Full Name</label>
            <input type="text" name="w" class="form-control" required />
        </div>
        <div class="mb-2">
            <label>Email</label>
            <input type="email" name="x" class="form-control" required />
        </div>
        <div class="mb-2">
            <label>Age</label>
            <input type="number" name="y" class="form-control" required />
        </div>
        <div class="mb-3">
            <label>City</label>
            <input type="text" name="z" class="form-control" required />
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

</body>
</html>
