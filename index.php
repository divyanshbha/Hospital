<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Uniform Management System</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
   
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Hospital Uniform Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add_uniform.php">Add Uniform</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_uniforms.php">View Uniforms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search_uniforms.php">Search Uniforms</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h2>Welcome to the Hospital Uniform Management System</h2>
        <div class="row justify-content-center">
            <!-- Feature 1: Add Uniform -->
            <div class="col-md-4 mb-4">
                <div class="feature-box text-center">
                    <i class="bi bi-plus-circle-fill"></i>
                    <h3>Add New Uniform</h3>
                    <p>Quickly add new hospital uniform details like name, size, color, and price.</p>
                    <a href="add_uniform.php" class="btn-custom" style="text-decoration:none;">Add Uniform</a>
                </div>
            </div>

            <!-- Feature 2: View Uniforms -->
            <div class="col-md-4 mb-4">
                <div class="feature-box text-center">
                    <i class="bi bi-eye-fill"></i>
                    <h3>View All Uniforms</h3>
                    <p>See the complete list of hospital uniforms stored in the system.</p>
                    <a href="view_uniforms.php" class="btn-custom" style="text-decoration:none;">View Uniforms</a>
                </div>
            </div>

            <!-- Feature 3: Search Uniforms -->
            <div class="col-md-4 mb-4">
                <div class="feature-box text-center">
                    <i class="bi bi-search"></i>
                    <h3>Search Uniforms</h3>
                    <p>Search for hospital uniforms by name to easily locate specific items.</p>
                    <a href="search_uniforms.php" class="btn-custom" style="text-decoration:none;">Search Uniforms</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>Built with ❤️ for the Healthcare Industry</p>
    </footer>

    <!-- Bootstrap JS and Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
