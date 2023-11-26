<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <img src="./img/logo.webp" style="width:130px; margin-top: 2px;">
        <li class="nav-item nav-link"></li>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item nav-link">
                    <a class="menu" aria-current="page" href="TrangChu.php">TRANG CHỦ</a>
                </li>
                <li class="nav-item dropdown nav-link">
                    <a class="menu dropdown-toggle" href="BanhKem.html" data-bs-toggle="dropdown">SẢN PHẨM</a>
                    <ul class="menu2 dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="menu2 mx-4" href="BanhKem.html">Bánh Kem Tươi</a></li>
                        <li><a class="menu2 mx-4" href="#">Bánh Quy</a></li>
                        <li><a class="menu2 mx-4" href="#">Bánh Piza</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-link">
                    <a class="menu" href="GioiThieu.html">GIỚI THIỆU</a>
                </li>
                <li class="nav-item nav-link">
                    <a class="menu" href="GioHang.html">GIỎ HÀNG</a>
                </li>
                <li class="nav-item nav-link">
                    <?php
                    session_start();
                    if (isset($_SESSION['name'])) {
                        echo "Xin chào, " . $_SESSION['name'] . "! 
                        <br>
                        <li class='nav-item nav-link'>                                              
                            <a class='menu' href='../../DOANPHP/adminpage/ElaAdmin/controller/LogoutController.php'>ĐĂNG XUẤT</a>
                        </li>";
                    } else {
                        echo "<a class='menu' href='../../DOANPHP/adminpage/ElaAdmin/view/login.php'>ĐĂNG NHẬP | ĐĂNG KÝ</a>";
                    }
                    ?>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
    </div>
</nav>