<?php
include('db.php');

$sql = "SELECT * FROM uniforms";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Uniforms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="return.css"> -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            margin-top: 20px;
        }

        .return-btn {
    background-color: #6c757d;
    color: #fff;
    border-radius: 5px;
    font-size: 1.1rem;
    margin-top: 20px;
    width: 15%;
   padding: 3.5px;
    text-align: center;
}

.return-btn:hover {
    background-color: #5a6268;
}
    </style>
</head>
<body>


    <div class="container">

      <!-- Return to Home Button -->
      <a href="index.php" class="btn return-btn" style="display:flex; justify-content:center;">Return to Home</a>
        <h2>All Uniforms</h2>

        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["name"] . "</td>
                                <td>" . $row["size"] . "</td>
                                <td>" . $row["color"] . "</td>
                                <td>" . $row["price"] . "</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>No uniforms found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
