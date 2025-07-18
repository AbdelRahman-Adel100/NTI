<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Of Day</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="container mt-5">
        <h2 class="text-center mb-4 text-light">Registration Form</h2>
        <form class="row g-3 was-validated">

            <div class="col-md-6">
                <label for="fullName" class="form-label text-light">Full Name</label>
                <input type="text" class="form-control" id="fullName" required>
                <div class="invalid-feedback">Please enter your name</div>
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label text-light">Email</label>
                <input type="email" class="form-control" id="email" required>
                <div class="invalid-feedback">Please enter valid email</div>
            </div>

            <div class="col-md-4">
                <label for="age" class="form-label text-light">Age</label>
                <input type="number" class="form-control" id="age" required>
                <div class="invalid-feedback">Enter your age</div>
            </div>

            <div class="col-md-4">
                <label for="gender" class="form-label text-light">Gender</label>
                <select class="form-select" id="gender" required>
                    <option value="">Choose</option>
                    <option value="mail">Mail</option>
                    <option value="femail">Femail</option>
                </select>
                <div class="invalid-feedback">Choose your grender</div>
            </div>

            <div class="col-md-4">
                <label for="grade" class="form-label text-light">Grade (0 - 100)</label>
                <input type="number" class="form-control" id="grade" min="0" max="100" required>
                <div class="invalid-feedback">Please enter your grade</div>
            </div>

            <div class="col-12">
                <label for="notes" class="form-label text-light">Notes</label>
                <textarea class="form-control" id="notes" rows="2"></textarea>
            </div>
            <div>

                <button class="btn btn-success btn-sm" type="submit">Send Data</button>
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Show Students
                </button>

            </div>

        </form>
        <div class="row-md-4">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">list of students</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <table class="table table-bordered table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Ali</th>
                                        <th>90</th>

                                        <th>
                                            <?php
                                                    $grade = 90;
                                                    if ($grade >= 85) echo "Excellent";
                                                    else if ($grade >= 70) echo "Very Good";
                                                    else if ($grade >= 50) echo "Acceptable";
                                                    else echo "Failed";
                                                    ?>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Omar</th>
                                        <th>72</th>
                                        <th>
                                            <?php
                                                    $grade = 72;
                                                    if ($grade >= 85) echo "Excellent";
                                                    else if ($grade >= 70) echo "Very Good";
                                                    else if ($grade >= 50) echo "Acceptable";
                                                    else echo "Failed";
                                                    ?>
                                        </th>

                                    </tr>
                                    <tr>
                                        <th>Kareem</th>
                                        <th>45</th>
                                        <th>
                                            <?php
                                                    $grade = 45;
                                                    if ($grade >= 85) echo "Excellent";
                                                    else if ($grade >= 70) echo "Very Good";
                                                    else if ($grade >= 50) echo "Acceptable";
                                                    else echo "Failed";
                                                    ?>
                                        </th>
                                    </tr>

                                </tbody>

                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div><br>

        </div>
        <script src="js/bootstrap.bundle.js"></script>

</body>

</html>