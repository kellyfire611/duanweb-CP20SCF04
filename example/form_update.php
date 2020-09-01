<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Sửa Hình thức Thanh toán</title>
</head>
<body>
    <?php
    
    // Truy vấn database để lấy danh sách
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    // C:\xampp\htdocs\web02\
    include_once(__DIR__ . '/../dbconnect.php');

    // Lây lại thông tin cũ của dòng muốn hiệu chỉnh
    $idmuonsua = $_GET['idmuonsua'];

    // HERE DOC
    $sqlSelect = <<<EOT
    SELECT httt_ma, httt_ten FROM `hinhthucthanhtoan` WHERE httt_ma = $idmuonsua;
EOT;

    // 3. Yêu cầu PHP thực thi QUERY
    $resultSelect = mysqli_query($conn, $sqlSelect);

    // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tích để sử dụng
    // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
    // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
    $htttRow = [];
    while ($row = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC)) {
        $htttRow = array(
            'httt_ma' => $row['httt_ma'],
            'httt_ten' => $row['httt_ten'],
        );
    }

    // Đã có thông tin cũ của dòng muốn hiệu chỉnh dữ liệu
    ?>

    <h1>Sửa Hình thức Thanh toán</h1>
    <form name="frmSua" id="frmSua" method="post" action="">
        <table>
            <tr>
                <td>Tên hình thức thanh toán</td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="txt_httt_ten" id="txt_httt_ten" value="<?php echo $htttRow['httt_ten'] ?>" />
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
    // Xử lý cập nhật dữ liệu
    if( isset($_POST['btnLuuDuLieu']) ) {
        // 2. Chuẩn bị câu lênh UPDATE
        $httt_ten = $_POST['txt_httt_ten'];
        
        $sql = <<<EOT
            UPDATE hinhthucthanhtoan
            SET httt_ten = N'$httt_ten
            WHERE httt_ma = $idmuonsua;
EOT;

        // 3. Thực thi
        mysqli_query($conn, $sql) or die("<b>Có lỗi khi thực thi câu lệnh SQL: </b>" . mysqli_error($conn) . "<br /><b>Câu lệnh vừa thực thi:</b></br>$sql");
    }
    ?>
</body>
</html>