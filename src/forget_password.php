<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Khôi phục mật khẩu
                    </div>
                    <div class="card-body">
                        <form action="forgot_password_process.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Gửi Email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>