<?php
// lấy thông tin id người dùng muốn xóa
$idmuonxoa = $_GET['idmuonxoa'];

// Truy vấn database để lấy danh sách
// 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
// C:\xampp\htdocs\web02\
include_once(__DIR__ . '/../dbconnect.php');

// 2. Chuẩn bị câu lênh DELETE
$sql = <<<EOT
    DELETE FROM hinhthucthanhtoan
    WHERE httt_ma = $idmuonxoa;
EOT;

// 3. Thực thi
mysqli_query($conn, $sql);
?>