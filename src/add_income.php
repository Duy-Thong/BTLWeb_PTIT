<?php
session_start();
require ('connect.php');

if (isset($_SESSION['username']) && isset($_SESSION['user_type']) && $_SESSION['logged_in']) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selected_employee = $_POST['employee'];
        $income_date = $_POST['income_date'];
        $total_income = $_POST['salary'];

        $insert_query = "INSERT INTO tra_luong_tbl (id, thoi_gian,so_tien,id_nv) 
                         VALUES (NULL, '$income_date', '$total_income','$selected_employee')";
        $sql_connect->query($insert_query);
        header("Location: income.php");
        exit();
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Add Income</title>
    </head>

    <body>
        <div class="container">
            <h1 class="my-4">Trả lương cho nhân viên</h1>
            <form method="POST">
                <div class="mb-3">
                    <label for="employee" class="form-label">Chọn nhân viên:</label>
                    <select class="form-select" id="employee" name="employee" required>
                        <option value="" disabled selected>Chọn nhân viên</option>
                        <?php
                        $employee_query = "SELECT * FROM nhan_vien_tbl";
                        $employee_result = $sql_connect->query($employee_query);
                        if ($employee_result->num_rows > 0) {
                            while ($row = $employee_result->fetch_assoc()) {
                                echo "<option value='" . $row['id_nv'] . "'>" . $row['ten'] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="income_date" class="form-label">Ngày trả lương:</label>
                    <input type="date" class="form-control" id="income_date" name="income_date" required>
                </div>
                <div class="mb-3">
                    <label for="salary" class="form-label">Tiền lương:</label>

                    <input type="number" class="form-control" id="salary" name="salary" value="<?php echo $salary; ?>"
                        required>
                </div>
                
                <button type="submit" class="btn btn-primary">Xác nhận</button>
            </form>
        </div>
    </body>
    </html>
    <?php
} else {
    header("Location: error.html");
    exit();
}
?>