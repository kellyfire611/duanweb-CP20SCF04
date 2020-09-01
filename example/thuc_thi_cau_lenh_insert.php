<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thực thi câu lệnh INSERT trong PHP</title>

</head>
<body>
    <h1>INSERT PHP</h1>
    <?php
    
    // Truy vấn database để lấy danh sách
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    // C:\xampp\htdocs\web02\
    include_once(__DIR__ . '/../dbconnect.php');

    // 2. Chuẩn bị QUERY
    $tenchuyenkhoan = 'Chuyển ATM';
    $sql = "INSERT INTO `hinhthucthanhtoan` (httt_ten) VALUES (N'$tenchuyenkhoan');";

    // Debug
    // var_dump($sql);
    // print_r($sql);
    // die;

    // 3. Thực thi
    mysqli_query($conn, $sql);
    ?>
</body>
</html>