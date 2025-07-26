<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-success">
    <div class="container mt-5">
        <h2 class="text-center mb-4 text-light">Products</h2>
        <form class="row g-3 was-validated">
            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Price (EGP)</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
              $products = [
                ["Name" => "Laptop", "Price (EGP)" => "15000", "Quantity" => 3],
                ["Name" => "phone", "Price (EGP)" => "8000", "Quantity" => 5],
                ["Name" => "Tablet", "Price (EGP)" => "6000", "Quantity" => 2]
              ];

              foreach ($products as $product) {
                echo "<tr>";
                echo "<td>{$product['Name']}</td>";
                echo "<td>{$product['Price (EGP)']}</td>";
                echo "<td>{$product['Quantity']}</td>";
              }
              ?>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>