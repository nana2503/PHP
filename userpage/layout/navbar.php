<?php 
include("C:/wamp64/www/DOANPHP/userpage/utlils/connectDB.php");
?>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <img src="../img/logo.webp" style="width:130px; margin-top: 2px;">
        <li class="nav-item nav-link" style="padding: 0 80px;"></li>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item nav-link">
                    <a class="menu" aria-current="page" href="TrangChu.php">TRANG CHỦ</a>
                </li>
                <li class="nav-item dropdown nav-link">
                    <a class="menu" href="DanhMuc.php">SẢN PHẨM</a>
                </li>
                <li class="nav-item nav-link">
                    <a class="menu" href="GioHang.html">GIỎ HÀNG</a>
                </li>
                <li class="nav-item nav-link">
                    <a class="menu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php
                    session_start();
                    if (isset($_SESSION['name'])) {
                        echo "Xin chào, " . $_SESSION['name'] . "! 
                        <br>
                        <li class='nav-item nav-link' >                                              
                            <a class='menu' href='../../../DOANPHP/adminpage/ElaAdmin/controller/LogoutController.php'>ĐĂNG XUẤT</a>
                        </div>
                        </li>";
                    } else {
                        echo "<a class='menu' href='../../../DOANPHP/adminpage/ElaAdmin/view/login.php'>ĐĂNG NHẬP | ĐĂNG KÝ</a>";
                    }
                    ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>