<?php
include("C:/wamp64/www/DOANPHP/userpage/utlils/connectDB.php");
session_start();
$order_id = $_GET['id']; //hien tai
$customer_id =  $_SESSION['customer_id'];
$order_total = $_GET['total'];

// cập nhật giỏ hàng có order id đó

$sql = "UPDATE order_tbl SET State = ?, Order_Total = ? WHERE Order_id = ?";
$stmt = $pdo->prepare($sql);
if ($stmt->execute([0, $order_total, $order_id])) {
    echo '<script>
        alert("Đặt hàng thành công");
        window.location.replace("../view/TrangChu.php");
        </script>';
    $sql = "INSERT INTO Order_tbl (Order_Total, Customer_Id, State) values(?, ?, ?)";
    $stm = $pdo->prepare($sql);
    $stm->execute([0, $customer_id, 1]);
} else {
    echo "Không đặt hàng đc vì na ngu";
}


// $takeOrderId = "SELECT * FROM Order_Tbl where Customer_Id = ? and State = 1";
// $stm = $pdo->prepare($takeOrderId);
// $stm->execute([$customer_id]);
// $order_Record = $stm->fetchAll(PDO::FETCH_ASSOC); 
