<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form thêm mới Hình thức Thanh toán</title>
</head>
<body>
    <h1>Thêm mới Hình thức Thanh toán</h1>
    <form name="frmThemMoi" id="frmThemMoi" method="post" action="">
        <table>
            <tr>
                <td>Tên hình thức thanh toán</td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="txt_httt_ten" id="txt_httt_ten" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnLuuDuLieu" id="btnLuuDuLieu" value="Lưu dữ liệu" />
                </td>
            </tr>
        </table>
    </form>

    <?php
    // Nếu người dùng có bấm lưu dữ liệu
    if( isset($_POST['btnLuuDuLieu']) ) {
        $httt_ten = $_POST['txt_httt_ten']; // Lấy/Thu thập thông tin người dùng gởi đến

         // Truy vấn database để lấy danh sách
        // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
        // C:\xampp\htdocs\web02\
        include_once(__DIR__ . '/../dbconnect.php');

        // 2. Chuẩn bị QUERY
        $sql = "INSERT INTO `hinhthucthanhtoan` (httt_ten) VALUES (N'$httt_ten');";

        // 3. Thực thi
        mysqli_query($conn, $sql);
    }
    
    ?>
</body>
</html>