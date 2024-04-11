<?php
function getAllOrders(){
    $conn = connectDb();
    $sql = "SELECT * FROM cart where retired = 0";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $orders = $stmt->fetchAll();
    $conn = null;
    return $orders; // Return the fetched orders
}
function deleteOrder($cartid){
    $conn = connectDb();
    $sql = "UPDATE cartitem set retired = 1 WHERE cartid = :cartid";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':cartid', $cartid);
    $success = $stmt->execute();

    $sql = "UPDATE cart set retired = 1 WHERE cartid = :cartid";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':cartid', $cartid);
    $success = $stmt->execute(); // Thực hiện truy vấn xóa
    $conn = null;
    return $success; // Trả về true nếu xóa thành công, false nếu không
}
function editOrder($orderId, $cartid, $accountid, $purchasedate, $status, $paymentmethod, $totalprice) {
    $conn = connectDb(); 
    $sql = "UPDATE cart SET cartid = :cartid, accountid = :accountid, purchasedate = :purchasedate, status = :status, paymentmethod = :paymentmethod, totalprice = :totalprice WHERE cartid = :orderId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':cartid', $cartid);
    $stmt->bindParam(':accountid', $accountid);
    $stmt->bindParam(':purchasedate', $purchasedate);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':paymentmethod', $paymentmethod);
    $stmt->bindParam(':totalprice', $totalprice);
    $stmt->bindParam(':orderId', $orderId);
    $success = $stmt->execute();
    $conn = null;
    return $success;
}

function getOrderById($orderId) {
    $conn = connectDb(); 
    $sql = "SELECT * FROM cart WHERE cartid = :orderId"; // Change 'id' to 'cartid'
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':orderId', $orderId);
    $stmt->execute();
    $order = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $order;
}


?>
