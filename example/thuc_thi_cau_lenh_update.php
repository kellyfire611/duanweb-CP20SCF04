<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thực thi câu lệnh UPDATE trong PHP</title>

</head>
<body>
    <h1>UPDATE PHP</h1>
    <?php
    
    // Truy vấn database để lấy danh sách
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    // C:\xampp\htdocs\web02\
    include_once(__DIR__ . '/../dbconnect.php');

    // 2. Chuẩn bị câu lênh UPDATE
    $httt_ma = 40000;
    $httt_ten = 'Tên mới updated 33333....';
    $sql = <<<EOT
        UPDATE hinhthucthanhtoan
        SET httt_ten = N'$httt_ten'
        WHERE httt_ma = $httt_ma;
EOT;

    // 3. Thực thi
    mysqli_query($conn, $sql);
    ?>
</body>
</html>