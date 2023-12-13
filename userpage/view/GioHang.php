<!doctype html>
<html amp class="no-js" lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Giỏ hàng của bạn</title>
    <link rel="shortcut icon" href="./img/logo.webp" type="image/png"/>
    <link href='//theme.hstatic.net/200000411281/1000827595/14/plugin.css?v=176' rel='stylesheet' type='text/css'  media='all'/>
    <link href='//theme.hstatic.net/200000411281/1000827595/14/custom-styles.scss.css?v=176' rel='stylesheet' type='text/css' media='all'/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<hrad>
    <link rel="stylesheet" type="text/css" href="assets/TrangChu.css">
</hrad>
<body>
	<?php include("../layout/navbar.php")?>

	<div class="breadcrumb-shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
					<ol class="breadcrumb breadcrumb-arrows">
						<li>
							<span class="text-dark">
                                <a class="text-dark" href="TrangChu.php">Trang chủ&ensp;</a>
                                /&ensp;Giỏ hàng&ensp;
                            </span>
						</li>
					</ol>
				</div>	
			</div>
		</div>
	</div>

	<div class="container">
		<div class="header-page text-center my-4">
			<h2>Giỏ hàng của bạn</h2>
		</div>		
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<table class="table-cart">		
					<?php 
						$order_id = $_GET["id"];
						$stm = $pdo->prepare('select * from cart join order_tbl on cart.order_id = order_tbl.order_id where cart.order_id = ? and order_tbl.state = 1');
						$stm->execute([$order_id]);
						$data = $stm->fetchAll(PDO::FETCH_ASSOC);
					?>
					<tr>
						<th class="image">&nbsp;</th>
						<th class="item">Tên sản phẩm</th>
						<th class="item">Giá</th>
						<th class="item">Số lượng</th>
						<th class="item">Thành tiền</th>
						<th class="remove">&nbsp;</th>
					</tr>
					<?php
					$tongTien = 0;
					foreach($data as $item) {
						$tongTien += $item["Subtotal"]
						?>
						<tr class="line-item-container" data-variant-id="1078680742">
						<td class="image">
							<div class="product_image">
								<a href="/products/banh-kem-flower-cake">
									<img src="../../adminpage/ElaAdmin/upload/<?php echo $item["Product_Img"]?>" alt="BÁNH KEM CHOCOLATE RUIT">
								</a>
							</div>
						</td>
						<td class="item" width="420px">
							<h3><a class="name" href="/products/banh-kem-flower-cake"><?php echo $item["Product_Name"]?></a></h3>
							<p class="variant"></p>
						</td>
						<td class="item">
							<p><span class="price"><?php echo $item["Product_Price"]?></span></p>
						</td>
						<td class="qty">
							<div class="qty quantity-partent qty-click clearfix" style="padding: 0 38px;">
								<p><span class="price"><?php echo $item["Product_Qty"]?></span></p>
							</div>
						</td>
						<td class="item">
							<p class="">
								<span class="line-item-total price">
									<span class="d-md-none">Tổng tiền: </span><?php echo $item["Subtotal"]?> đ
								</span>
							</p>
						</td>
						<td class="remove">
							<a href="../controller/removeItem.php?item_id=<?php echo $item['cart_id']?>&order_id=<?php echo $order_id?>" class="cart">
								<img src="../img/ic_X.webp"/>
							</a>
						</td>
					</tr>
					<?php }?>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-7 col-lg-5">
				<div class="sidebox-order">
					<div class="sidebox-order_title">
						<h3>Thông tin đơn hàng</h3>
					</div>
					<div class="sidebox-order_total">
						<p>Tổng tiền: <span class="total-price"><?php echo $tongTien?> đ</span></p>
					</div>
					<div class="sidebox-order_action my-2">
						<?php $order_id=$_GET['id']?>
						<a class="btn btn-dark btncart-checkout" href="../controller/buyButton.php?id=<?php echo $order_id?>&total=<?php echo $tongTien?>">THANH TOÁN</a>
					</div>
				</div>
			</div>
		</div>
	</div>

    <?php include("../layout/footer.php")?>
</body>
</html>	