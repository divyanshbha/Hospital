<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM uniforms WHERE name LIKE '%$search%'";
    $result = $conn->query($sql);
} else {
    $sql = "SELECT * FROM uniforms";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Uniforms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="return.css">
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
        <a href="index.php" class="btn return-btn">Return to Home</a>
        <h2>Search Uniforms</h2>

        <form method="GET" action="" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by uniform name">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        <h3>Results:</h3>
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
