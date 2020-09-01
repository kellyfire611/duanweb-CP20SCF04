<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thực thi câu lệnh DELETE trong PHP</title>

</head>
<body>
    <h1>DELETE PHP</h1>
    <?php
    
    // Truy vấn database để lấy danh sách
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    // C:\xampp\htdocs\web02\
    include_once(__DIR__ . '/../dbconnect.php');

    // 2. Chuẩn bị câu lênh DELETE
    $httt_ma = 4;
    $sql = <<<EOT
        DELETE FROM hinhthucthanhtoan
        WHERE httt_ma = $httt_ma;
EOT;

    // 3. Thực thi
    mysqli_query($conn, $sql);
    ?>
</body>
</html>