<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thực thi câu lệnh SELECT trong PHP</title>

</head>
<body>
    <h1>Danh sách hình thức thanh toán</h1>
    <?php
    
    // Truy vấn database để lấy danh sách
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    // C:\xampp\htdocs\web02\
    include_once(__DIR__ . '/../dbconnect.php');

     // 2. Chuẩn bị QUERY
    // HERE DOC
    $sql = <<<EOT
    SELECT httt_ma AS MaThanhToan, httt_ten AS TenThanhToan FROM `hinhthucthanhtoan`
EOT;

    // 3. Yêu cầu PHP thực thi QUERY
    $result = mysqli_query($conn, $sql);

    // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tích để sử dụng
    // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
    // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
    $data = [];
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = array(
            'ma' => $row['MaThanhToan'],
            'ten' => $row['TenThanhToan'],
        );
    }

    // print_r($data);
    ?>

    <table border="1">
        <tr>
            <th>Mã TT</th>
            <th>Tên TT</th>
            <th>Hành động</th>
        </tr>
        <?php foreach($data as $tt): ?>
        <tr>
            <td><?php echo $tt['ma'] ?></td>
            <td><?= $tt['ten'] ?></td>
            <td>
                <!-- ?key1=value1&key2=value2... -->
                <a href="xuly_xoa.php?idmuonxoa=<?= $tt['ma'] ?>">Xóa</a>

                <a href="form_update.php?idmuonsua=<?= $tt['ma'] ?>">Sửa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>