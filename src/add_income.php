<?php
session_start();
require ('connect.php');

if (isset($_SESSION['username']) && isset($_SESSION['user_type']) && $_SESSION['logged_in']) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selected_employee = $_POST['employee'];
        $income_date = $_POST['income_date'];
        $fine_amount = $_POST['fine_amount'];

        $salary_query = "SELECT tong_luong FROM luong_tbl WHERE id_nv = '$selected_employee'";
        $salary_result = $sql_connect->query($salary_query);
        if ($salary_result->num_rows > 0) {
            $salary_row = $salary_result->fetch_assoc();
            $salary = $salary_row['tong_luong'];
        }

        // Calculate deduction for leave days
        $leave_query = "SELECT * FROM nghi_phep_tbl WHERE id_nv = '$selected_employee'";
        $leave_result = $sql_connect->query($leave_query);
        if ($leave_result->num_rows > 0) {
            $leave_row = $leave_result->fetch_assoc();
            $leave_days = $leave_row['leave_days'];
            $deduction = ($salary / 30) * $leave_days;
        }

        $total_income = $salary - $deduction - $fine_amount;

        $insert_query = "INSERT INTO tra_luong_tbl (id_nv, ngay_tra_luong, luong, phat, tru_ngay_phep, tong_luong) 
                         VALUES ('$selected_employee', '$income_date', '$salary', '$fine_amount', '$deduction', '$total_income')";
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
                <div class="mb-3">
                    <label for="leave_deduction" class="form-label">Tiền nghỉ (trừ):</label>
                    <input type="number" class="form-control" id="leave_deduction" name="leave_deduction" required>
                </div>
                <div class="mb-3">
                    <label for="fine_amount" class="form-label">Tiền phạt:</label>
                    <input type="number" class="form-control" id="fine_amount" name="fine_amount" required>
                </div>
                <div class="mb-3">
                    <label for="total_income" class="form-label">Tổng lương:</label>
                    <input type="number" class="form-control" id="total_income" name="total_income" required readonly>
                </div>
                <button type="submit" class="btn btn-primary">Xác nhận</button>
            </form>
        </div>
    </body>
    <script>
        function updateSalary(val) {
            console.log(val);
            let luong = document.getElementById('salary').value === '' ? 0 : document.getElementById('salary').value;
            let tien_nghi = document.getElementById('leave_deduction').value === '' ? 0 : document.getElementById('leave_deduction').value;
            let pc = document.getElementById('fine_amount').value === '' ? 0 : document.getElementById('fine_amount').value;
            document.getElementById('total_income').value = luong - tien_nghi - pc;
        }

    </script>

    </html>
    <?php
} else {
    header("Location: error.html");
    exit();
}
?>