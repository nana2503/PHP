<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Freshgarden</title>
    <link rel="shortcut icon" href="../img/logo.webp" type="image/png" />
    <link href='//theme.hstatic.net/200000411281/1000827595/14/custom-styles.scss.css?v=176' rel='stylesheet' type='text/css' media='all' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<hrad>
    <link rel="stylesheet" type="text/css" href="assets/TrangChu.css">
</hrad>

<body>
    <?php include("../layout/navbar.php") ?>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/caroseo1.1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/caroseo2.1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/caroseo3.1.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="home home-featured-product">
        <div class="section-heading text-center style-dark">
            <h2 class="section-title">
                <div class="icon"><img src="../img/imgSPNB.webp" alt="icon"></div>
                <span style="font-size: 45px; color: #fff;">Sản phẩm nổi bật</span>
            </h2>
            <div class="container" style="font-size: 17px;  color: #fff;">Cập nhật về những sản phẩm nổi bật nhất từ Fresh Garden</div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 my-5 col-sm-6">
                    <a href="">
                        <img src="../img/spnb1.webp" class="spnb dont_scale wow animated fadeInDown" data-animation="fadeInDown" alt="">
                    </a>
                    <div class="text-center">
                        <h5><a href="">BÁNH KEM RED VELVET</a></h5>
                        <b class="gia">320.000đ</b>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 my-5 col-sm-6">
                    <a href="">
                        <img src="../img/spnb2.webp" class="spnb dont_scale wow animated fadeInDown" data-animation="fadeInDown" alt="">
                    </a>
                    <div class="text-center">
                        <h5><a href="">BÁNH KEM RED VELVET</a></h5>
                        <b class="gia">320.000đ</b>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 my-5 col-sm-6">
                    <a href="">
                        <img src="../img/spnb3.webp" class="spnb dont_scale wow animated fadeInDown" data-animation="fadeInDown" alt="">
                    </a>
                    <div class="text-center">
                        <h5><a href="">BÁNH KEM RED VELVET</a></h5>
                        <b class="gia">320.000đ</b>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 my-5 col-sm-6">
                    <a href="">
                        <img src="../img/spnb4.webp" class="spnb dont_scale wow animated fadeInDown" data-animation="fadeInDown" alt="">
                    </a>
                    <div class="text-center">
                        <h5><a href="">BÁNH KEM RED VELVET</a></h5>
                        <b class="gia">320.000đ</b>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <section class="home-service">
            <div class="section-heading text-center">
                <h2 class="section-title">
                    <div class="icon"><img src="../img/icon-DVNB.webp" alt="icon"></div>
                    <span>Dịch vụ nổi bật</span>
                </h2>
                <div class="desc"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <img src="../img/service_img_1.webp" class="aligncenter dont_scale wow animated fadeInDown" data-animation="fadeInDown" alt="">
                        <h4 class="special-text marine-food-h4" data-animation="">Bánh tươi mỗi ngày</h4>
                        <h4 class="new special-text wow animated fadeInLeft marine-food-h4-2" data-animation="fadeInLeft">Sản phẩm được sản xuất trong ngày với nguyên liệu chất lượng và tươi mới </h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <img src="../img/service_img_2.webp" class="aligncenter dont_scale wow animated fadeInDown" data-animation="fadeInDown" alt="">
                        <h4 class="special-text marine-food-h4" data-animation="">Đa dạng chọn lựa </h4>
                        <h4 class="new special-text wow animated fadeInLeft marine-food-h4-2" data-animation="fadeInLeft">Thế giới phong phú của bánh kem tươi, bánh mì, pizza, bánh ngọt... </h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <img src="../img/service_img_3.webp" class="aligncenter dont_scale wow animated fadeInDown" data-animation="fadeInDown" alt="">
                        <h4 class="special-text marine-food-h4" data-animation="">Hệ thống cửa hàng</h4>
                        <h4 class="new special-text wow animated fadeInLeft marine-food-h4-2" data-animation="fadeInLeft">Hệ thống 60 cửa hàng lớn và phủ khắp đáp ứng nhu cầu mua sắm tiện lợi</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <img src="../img/service_img_4.webp" class="aligncenter dont_scale wow animated fadeInDown" data-animation="fadeInDown" alt="">
                        <h4 class="special-text marine-food-h4" data-animation="">Dịch vụ tận tâm </h4>
                        <h4 class="new special-text wow animated fadeInLeft marine-food-h4-2" data-animation="fadeInLeft">Sự tỉ mỉ, tận tâm và chuyên nghiệp luôn là huyết mạch trong phục vụ </h4>
                    </div>
                </div>
        </section>
    </div>
    <div class="container">
        <div class="section-heading text-center">
            <h2 class="section-title">
                <div class="icon"><img src="../img/icon-TinTuc.webp" alt="icon"></div>
                <span>Tin tức</span>
            </h2>
            <div class="desc">Nơi Fresh Garden cập nhật thông tin mới nhất vê sản phẩm, cửa hàng và ưu đãi</div>
        </div><br>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="article-content text-center">
                    <div class="article-image">
                        <a href="" title="Vui hè sang - Rộn ràng trải nghiệm cùng Fresh Garden">
                            <img src="../img/tintuc1.webp" style="width: 90%; height: 90%;" alt="Vui hè sang - Rộn ràng trải nghiệm cùng Fresh Garden">
                        </a>
                    </div>
                    <h3 class="article-title">
                        <a class="tintuc" href="" title="Vui hè sang - Rộn ràng trải nghiệm cùng Fresh Garden">Vui hè sang - Rộn ràng trải nghiệm cùng Fresh Garden</a>
                    </h3>
                    <div class="article-desc">
                        <p class="tintuc">💯 Tiếp nối chuỗi sự kiện ưu đãi đặc biệt dành tặng khách hàng, Fresh Garden gửi bạn lờ...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="article-content text-center">
                    <div class="article-image">
                        <a href="" title="Vui hè sang - Rộn ràng trải nghiệm cùng Fresh Garden">
                            <img src="../img/tintuc2.webp" style="width: 90%; height: 90%;" alt="Vui hè sang - Rộn ràng trải nghiệm cùng Fresh Garden">
                        </a>
                    </div>
                    <h3 class="article-title">
                        <a class="tintuc" href="" title="Vui hè sang - Rộn ràng trải nghiệm cùng Fresh Garden">Vui hè sang - Rộn ràng trải nghiệm cùng Fresh Garden</a>
                    </h3>
                    <div class="article-desc">
                        <p class="tintuc">Từ ngày 17/05 - 21/05/2022, Fresh Garden gửi tặng Quý khách hàng "săn deal no nê" thưởn...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="article-content text-center">
                    <div class="article-image">
                        <a href="" title="Vui hè sang - Rộn ràng trải nghiệm cùng Fresh Garden">
                            <img src="../img/tintuc3.webp" style="width: 90%; height: 90%;" alt="Vui hè sang - Rộn ràng trải nghiệm cùng Fresh Garden">
                        </a>
                    </div>
                    <h3 class="article-title">
                        <a class="tintuc" href="" title="Vui hè sang - Rộn ràng trải nghiệm cùng Fresh Garden">Vui hè sang - Rộn ràng trải nghiệm cùng Fresh Garden</a>
                    </h3>
                    <div class="article-desc">
                        <p class="tintuc">Bánh mì nướng Fresh Garden ngon giòn rụm – ăn là mê&nbsp;Bạn yêu bánh mì giòn rụm và thích s...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("../layout/footer.php") ?>
</body>

</html>