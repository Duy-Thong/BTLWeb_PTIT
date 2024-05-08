<?php

session_start();
$id = $_GET['id'];
require_once ('connect.php');

$query = "DELETE from nhan_vien_tbl WHERE id_nv = $id";

$result = $sql_connect->query($query);

header("Location: staff.php");
exit();

?>