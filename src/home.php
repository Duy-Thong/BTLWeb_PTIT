<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['user_type']) && $_SESSION['logged_in']) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="\assets\styles.css">
        <style>
            .navbar-nav {
                margin-left: auto;
            }
        </style>
        <title>Home Page</title>
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home.php">Hệ thống quản lý nhân viên</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="home.php">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="department.php">Chức Vụ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="staff.php">Nhân Viên</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="salary.php">Lương</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="leave.php">Nghỉ Phép</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="income.php">Phiếu lương</a>
                            </li>

                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Admin
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="col py-3">
                <h1>Trang chủ</h1>
                <hr style="border: 2px solid blue">
                <br><br>

                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col-xl-3">
                                <div class="card" style="background-color: #337ab7; color: #fff">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h2>Chức Vụ</h2>
                                            </div>
                                            <div class="col" style="max-width: fit-content !important;">
                                                <i class="fs-4 bi bi-table"></i>
                                            </div>
                                        </div>
                                        <br><br>
                                        <a href="department.php" class="text-white text-decoration-none"
                                            style="min-width: 100%; text-align: center;">
                                            Xem Thêm
                                            <i class="bi bi-arrow-right-circle-fill mx-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3">
                                <div class="card" style="background-color: #c43349; color: #fff">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h2>Nhân Viên</h2>
                                            </div>
                                            <div class="col" style="max-width: fit-content !important;">
                                                <i class="fs-4 bi bi-people"></i>
                                            </div>
                                        </div>
                                        <br><br>
                                        <a href="staff.php" class="text-white text-decoration-none"
                                            style="min-width: 100%; text-align: center;">
                                            Xem Thêm
                                            <i class="bi bi-arrow-right-circle-fill mx-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3">
                                <div class="card" style="background-color: #d65b36; color: #fff">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h2>Nghỉ Phép</h2>
                                            </div>
                                            <div class="col" style="max-width: fit-content !important;">
                                                <i class="fs-4 bi bi-person-x"></i>
                                            </div>
                                        </div>
                                        <br><br>
                                        <a href="leave.php" class="text-white text-decoration-none"
                                            style="min-width: 100%; text-align: center;">
                                            Xem Thêm
                                            <i class="bi bi-arrow-right-circle-fill mx-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3">
                                <div class="card" style="background-color: #21963c; color: #fff">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h2>Lương</h2>
                                            </div>
                                            <div class="col" style="max-width: fit-content !important;">
                                                <i class="fs-4 bi bi-cash-coin"></i>
                                            </div>
                                        </div>
                                        <br><br>
                                        <a href="salary.php" class="text-white text-decoration-none"
                                            style="min-width: 100%; text-align: center;">
                                            Xem Thêm
                                            <i class="bi bi-arrow-right-circle-fill mx-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
    <?php
} else {
    header("Location: login.php");
    exit();
}
?>