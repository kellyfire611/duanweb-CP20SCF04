<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web PHP 01</title>

    <style>
    div {
        background: #00ff00; /*HEX*/
    }
    </style>
</head>
<body>
    <h1>Xin chào PHP</h1>
    <?php
    
    //$ghinhodangnhap = true;

    // $boolean = true;
    // $boolean = false;
    // $boolean = 1; // # 0
    // $boolean = 0; // false

    // $sotien = 1234567.8900000M; // decimal
    // $sotienkieuint = (int)$sotien; // MAX INT

    // $sotienkieuint = 200000000;
    // $sotienkieudecimal = (float)$sotienkieuint;

    // is_int($sotienkieuint); // TRUE, otherwise FALSE

    // if(isset($ghinhodangnhap)) {
    //     // logic ve dang nhap
    //     // ...
    // }
    // $email = '';

    // if(empty($email)) {
    //     echo 'Vui long nhap email';
    // } else {
    //     // logic dang nhap
    //     // SELECT * FROM `khachhang` WHERE email = $email
    // }

    // if(isset($hoTen)) {
    //     echo 'Họ tên là: ';
    //     echo $hoTen;
    // }

    // if(condition) {
    //     // thuc thi neu TRUE
    // } else {
    //     // thuc thi neu FALSE
    // }

    // $num = -8;
    // if($num > 0) {
    //     echo 'Đây là số dương';
    // } else if($num == 0) {
    //     echo 'Đây là số 0';
    // } else {
    //     echo 'Đây là số âm';
    // }

    // $thu = 66; // 0-6: 0 là thứ 2
    // if($thu == 0) {
    //     echo 'thu hai';
    // } else if($thu == 1) {
    //     echo 'thu ba';
    // } else if($thu == 2) {
    //     echo 'thu tu';
    // } else if($thu == 3) {
    //     echo 'thu nam';
    // } else if($thu == 4) {
    //     echo 'thu sau';
    // } else if($thu == 5) {
    //     echo 'thu bay';
    // } else if($thu == 6) {
    //     echo 'chu nhat';
    // } else {
    //     echo 'vui long kiem tra lai gia tri nhap. chi duoc nhap tu 0-6';
    // }

    // if($num >= 0 && $num <= 100) {
    //     // ....
    // } else if($num > 100 && $num <= 500)
    // {
    //     //..
    // }

    // switch($thu) {
    //     case 0:
    //         echo 'thu hai';
    //         break;
    //     case 1:
    //         echo 'thu ba';
    //         break;
    //     case 2:
    //         echo 'thu tu';
    //         break;
    //     case 3:
    //         echo 'thu nam';
    //         break;
    //     case 4:
    //         echo 'thu sau';
    //         break;
    //     case 5:
    //         echo 'thu bay';
    //         break;
    //     case 6:
    //         echo 'chu nhat';
    //         break;
    //     default:
    //         echo 'vui long kiem tra lai gia tri nhap. chi duoc nhap tu 0-6';
    //         break;
    // }

    // for($i = 0; $i < 100; $i++) {
    //     // Modulus Chia lấy dư
    //     if( ($i % 3) == 0 ) {
    //         echo 'Gia tri của i: ' . $i . '<br/>';
    //     }
    // }

    // $i = 0;
    // // Trong khi DIEU KIEN con TRUE -> thì còn Thực thi
    // while($i < 100) {
    //     if( ($i % 3) == 0 ) {
    //         echo 'Gia tri của i: ' . $i . '<br/>';
    //     }

    //     // Tăng/Giảm giá trị
    //     $i++; 
    //     // $i = $i + 1;
    // }


    // $hesoluong = 2;

    // // ...
    // $hesoluong = 3;

    // // Constant
    // define('HE_SO_LUONG', 2);
    // define('PI', 3.14);

    // define('TEN_PHIM_YEU_THICH', 'Star wars');
    // echo TEN_PHIM_YEU_THICH;

    // echo 'Hệ số lương mặc định của CTY là: ' . HE_SO_LUONG;
    // echo 'Số PI là: ' . PI .'<br />';

    // $a = 10;
    // $b = 3;
    // $tong = $a + $b;
    // $hieu = $a - $b;
    // $thuong = $a / $b;
    // $tich = $a * $b;
    // // $trungbinhcong = ($a + $b)/2;
    // $trungbinhcong = ($tong)/2;

    // echo 'So a là: ' . $a .'<br />';
    // echo 'So b là: ' . $b .'<br />';
    // echo 'Tổng là là: ' . $tong .'<br />';



    // string ''
    // string ""

    $hoTen = 'Dương Nguyễn Phú Cường';
    $email = 'phucuong@ctu.edu.vn';
    $sdt = '0915659223';

    echo 'Họ tên là: ' . $hoTen . ', email là: ' . $email . ', sdt là: ' . $sdt . '<br />';
    
    echo "Họ tên là: {$hoTen}, email là: {$email}, sdt là: {$sdt} <br />";

    for($i = 0; $i < 100; $i++) {
        if( ($i % 7) == 0) {
            echo $i;
        }
    }

    ?>
    <h2>Nội dung tiếp theo~</h2>
</body>
</html>