<?php
    include("C:/wamp64/www/DOANPHP/userpage/utlils/connectDB.php");
    session_start();
    $order_id = $_SESSION['order_id']; //hien tai
    $customer_id =  $_SESSION['customer_id'];
    var_dump($customer_id, $order_id);
    $stmt = $pdo->prepare("SELECT * from order_tbl where order_id = ?");
    $stmt->execute([$order_id]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    echo $data["State"];

    $sql = "UPDATE order_tbl SET State = ? WHERE Order_id = ?";
    $stmt = $pdo->prepare($sql);
    if($stmt->execute([0, $order_id])) {
        echo "Cập nhật thành công là đã đặt hàng";
    } else {
        echo "Không đặt hàng đc vì na ngu";
    }

    

    // var_dump($order_id);
    unset($order_id);

    $sql = "INSERT INTO Order_tbl (Order_Total, Customer_Id, State) values(?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([0, $customer_id, 1]);

    $takeOrderId = "SELECT * FROM Order_Tbl where Customer_Id = ? and State = 1";
    $stm = $pdo->prepare($takeOrderId);
    $stm->execute([$customer_id]);
    $order_Record = $stm->fetchAll(PDO::FETCH_ASSOC); 

    //tạo thêm 1 trường isDelivered để đánh dấu đơn hàng đã được giao chưa

    foreach ($order_Record as $order){
        $order_id = $order['Order_Id'];
        echo $order_id;
    }


?>