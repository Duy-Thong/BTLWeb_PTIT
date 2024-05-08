<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="\assets\styles.css">
    <title>Login Page</title>
</head>
<body>
    <div class="login_form background mt-5 mx-auto ">
        <section class="vh-100">
            <div class="container h-custom ">
                <div class="row">
                    
                    <p class="h1 text-center">Hệ thống quản lý nhân viên - PTIT IT SOLUTIONS</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
                <div class="row"> 
                
                <div class="center row d-flex justify-content-center align-items-center h-100">
    
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="https://static.vecteezy.com/system/resources/previews/005/879/539/non_2x/cloud-computing-modern-flat-concept-for-web-banner-design-man-enters-password-and-login-to-access-cloud-storage-for-uploading-and-processing-files-illustration-with-isolated-people-scene-free-vector.jpg"
                        class="img-fluid" alt="Sample image">
                    </div>

                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <p class="h1">Đăng nhập</p>

                        <?php
                            if (isset($_GET['error'])) { ?>
                                <p class="error"> <?php echo $_GET['error']; ?></p>
                        <?php    
                            } ?>

                        <form method="post">
                        <!-- Username input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Tài khoản</label>
                                <input type="text" name="username" id="form3Example3" class="form-control form-control-lg"/>
                            </div>

                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-3">
                                <label class="form-label" for="form3Example4">Mật khẩu</label>      
                                <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"/>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-0">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                    <label class="form-check-label" for="form2Example3">
                                        Ghi nhớ tài khoản
                                    </label>
                                </div>
                                <a href="forget_password.php" class="text-body">Quên mật khẩu?</a>
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng nhập</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>


    <?php

        function validation($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }


        if (isset($_POST['submit'])) {
    
            require_once ('connect.php');
        
            session_start();
            $username = validation($_POST["username"]); 
            $password = validation($_POST["password"]);        
        
            if (empty($username)) {
                header("Location: login.php?error=Chưa nhập tài khoản");
                exit();
            }

            if (empty($password)) {
                header("Location: login.php?error=Chưa nhập mật khẩu");
                exit();
            }

            $query="SELECT * FROM login_tbl WHERE username='$username' AND password='$password'"; 
    
            $result = $sql_connect->query($query); 
    
            // Mysql_num_row is counting table row
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['username'] == $username && $row['password'] == $password) {
                    echo "Logged In";
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['user_type'] = $row['user_type'];
                    $_SESSION['logged_in'] = true;
                    header("Location: home.php");
                    exit();
                }
            } 
            else {
                header("Location: login.php?error=Tài khoản hoặc mật khẩu chưa đúng");
                exit();
            }
        }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>