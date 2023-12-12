<?php
// session_start();
include("../../adminpage/ElaAdmin/utils/connect.php");
// include("../model/order.php");

if (isset($_POST['addCart']) && isset( $_POST['Customer_Id'])) {
    $product_id = $_POST["Product_Id"];
    $customer_id = $_POST['Customer_Id'];
    $product_quantity = $_POST['Product_quantity'];
    $product_price = $_POST['Product_price'];
    $Subtotal = intval($product_price) * $product_quantity;
    $product_image = $_POST['Product_Image'];
    $product_name = $_POST['Product_Name'];
    $croppedFileName = strstr($product_image, 'Screenshot');
    $order_id = $_POST["Order_Id"];

    //     $item = new Order($product_id, $customer_id, $product_price, $product_quantity, $State);
    $sql = "INSERT INTO cart (Product_Id,Product_Img, Order_Id, Product_Qty, Product_Name, Product_Price, Subtotal) values(?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$product_id, $croppedFileName, $order_id, $product_quantity, $product_name, $product_price, $Subtotal]);
    echo '<script>
    alert("Thêm vào giỏ hàng thành công!!");
    window.location.replace("../view/ChiTietSP?id=' . $product_id . '");
</script>';
} else {
    echo '<script>
    alert("Yêu cầu đăng nhập!!!");
    window.location.replace("../../adminpage/ElaAdmin/view/login.php");
</script>';
}
// // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
// if (isset($_SESSION['cart'][$product_id])) {
//     // Nếu đã tồn tại, cập nhật số lượng
//     $_SESSION['cart'][$product_id]['quantity'] += $product_quantity;
//     } else {
//     // Nếu chưa tồn tại, thêm mới vào giỏ hàng
//     $_SESSION['cart'][$product_id] = array(
//     'product_id' => $product_id,
//     'customer_id' => $customer_id,
//     'quantity' => $product_quantity,
//     'price' => $product_price,
//     );
//     }
//     var_dump($_SESSION['cart']);
//     // Đếm số lượng sản phẩm trong giỏ hàng
//     $total_items = count($_SESSION['cart']);
//     echo "Số lượng sản phẩm trong giỏ hàng: " . $total_items;
// }
// echo $customer_id . " " . $product_quantity . " " . $product_id . " " . $product_price . " " . $State;
