<?php
function product()
{
    // Gọi hàm connectDb để tiến hành kết nối đến CSDL và lấy đối tượng PDO, sau đó gán vào biến $conn;
    $conn = connectDb();

        // Khai báo câu truy vấn SQL để lấy tất cả các dữ liệu từ bảng catalogs
        $sql = "SELECT * FROM products";
        
        // Sử dụng đối tượng PDO để chuẩn bị câu truy vấn SQL.
        // Chuẩn bị câu truy vấn để thực thi, tránh tình trạng SQL injection
        $stmt = $conn->prepare($sql); 
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data = $stmt->fetchAll();
    $conn = null;
    return $data;
}
