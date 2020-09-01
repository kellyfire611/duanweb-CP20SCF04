<?php

    // Phân tách khối dữ liệu
    $tentaikhoan = $_GET['username'];
    $matkhau = $_GET['password'];

    if($tentaikhoan == 'admin' && $matkhau == '123456') {
        echo "Thông tin nhận được là {$tentaikhoan}, mật khẩu là    {$matkhau}";
    } else {
        echo "dang nhap that bai.";
    }
?>