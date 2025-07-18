<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-success">
    <div class="container mt-5">
        <form class="row g-3 was-validated">
            <table class="table table-light table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Key</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>


                    <tr>
                        <td>PHP_SELF</td>
                         <?php
                            echo "<td>{$_SERVER['PHP_SELF']}</td>";
                         ?>   
                    </tr>
                    <tr>

                        <td>SERVER_NAME</td>
                      <?php
                            echo "<td>{$_SERVER['SERVER_NAME']}</td>";
                          ?>   

                    </tr>
                    <tr>
                        <td>HTTP_HOST</td>
                      <?php
                            echo "<td>{$_SERVER['HTTP_HOST']}</td>";
                           ?>   

                    </tr>
                    <tr>
                        <td>USER_AGENT</td>
                      <?php
                            echo "<td>{$_SERVER['HTTP_USER_AGENT']}</td>";
                           ?>   

                    </tr>
                    <tr>
                        <td>REQUEST_METHOD</td>
                      <?php
                            echo "<td>{$_SERVER['REQUEST_METHOD']}</td>";
                         ?>   

                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>