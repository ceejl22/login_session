<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f5fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .custom-navbar {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            box-shadow: 0 4px 12px rgba(124, 58, 237, 0.15);
        }
        .dashboard-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            background: #ffffff;
        }
        .text-violet {
            color: #5b21b6;
        }
        .btn-custom-logout {
            border: 1px solid rgba(255, 255, 255, 0.6);
            color: #ffffff;
            transition: all 0.3s ease;
        }
        .btn-custom-logout:hover {
            background-color: #ffffff;
            color: #5b21b6;
        }
    </style>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar py-3 mb-5">
        <div class="container">
            <!-- Left side left intentionally blank to remove BSIT System -->
            <div class="ms-auto d-flex align-items-center gap-3">
                <span class="text-white fw-medium">
                    Welcome, <strong><?= htmlspecialchars($_SESSION['username']) ?></strong>
                </span>
                <a href="logout.php" class="btn btn-sm btn-custom-logout px-3 rounded-pill">Logout</a>
            </div>
        </div>
    </nav>

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="card dashboard-card p-4 p-md-5">
                    <div class="card-body">
                        <h1 class="display-6 fw-bold text-violet mb-3">
                            Welcome Back, <?= htmlspecialchars($_SESSION['username']) ?>!
                        </h1>
                        <p class="lead text-secondary mb-0">
                            You have successfully logged into the system using your database account.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>