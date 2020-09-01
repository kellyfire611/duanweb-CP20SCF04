<?php

    $username = $_POST['username'];
    $password = $_POST['password'];
    $full_name = $_POST['full_name'];
    
    
    // Xử lý checkbox
    // Khai báo giá trị mặc định là mảng (array) rỗng
    $tuychonkhoahoc = []; 
    if( isset($_POST['chkKhoaHoc']) ) {
        $tuychonkhoahoc = $_POST['chkKhoaHoc'];
    }
    //[1, 2,3, 6, 7] => '1,2,3,6,7'

    // Xử lý radio
    // Khai báo giá trị mặc định là rỗng
    $gioitinh = null;
    if( isset($_POST['rdGioiTinh']) ) {
        $gioitinh = $_POST['rdGioiTinh'];
    }
    // var_dump($gioitinh);
    // die;


    echo '<ul>';
    echo "<li>Username là: {$username}</li>";
    echo "<li>password là: {$password}</li>";
    echo "<li>full_name là: {$full_name}</li>";

    // Xử lý khi in (render) HTML
    if( !empty($tuychonkhoahoc) ) {
        $chuoituychon = implode(',', $tuychonkhoahoc);
        echo "<li>tùy chọn là: {$chuoituychon}</li>";
    }

    // Xử lý khi in (render) HTML
    echo "<li>giới tính là: {$gioitinh}</li>";

    echo '</ul>';
?>