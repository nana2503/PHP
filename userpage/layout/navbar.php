<?php 
include("C:/wamp64/www/DOANPHP/userpage/utlils/connectDB.php");
session_start();
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
                    
                    
                    <?php 
                    $sql = "SELECT * FROM cart join order_tbl on cart.order_id = order_tbl.order_id where order_tbl.state = 1 and order_tbl.customer_id = ?";
                    $stm = $pdo->prepare($sql); 
                    $stm->execute([$_SESSION['customer_id']]);
                    $data = $stm->fetch(PDO::FETCH_ASSOC);

                    if($data) {?>
                        <?php $order_id = $data['Order_Id']?>
                        <a class="menu" href="../view/GioHang.php?id=<?php echo $order_id?>">GIỎ HÀNG</a>
                    <?php } else {?>
                        <a class="menu" href="../view/GioHang.php?id=<?php echo $order_id?>">GIỎ HÀNG</a>
                    <?php } ?>
                </li>
                <li class="nav-item nav-link">
                    <a class="menu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php

                    if (isset($_SESSION['name']) || isset($_SESSION['customer_id'])) {
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