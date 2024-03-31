
<?php
    function detail($id) {
           // Gọi hàm connectDb() để thiết lập kết nối đến cơ sở dữ liệu và lấy đối tượng PDO, sau đó gán vào biến $conn.
           
           // Thực thi câu truy vấn đã được chuẩn bị bằng cách gọi phương thức execute() trên đối tượng PDOStatement ($stmt).
           // Cài đặt chế độ setFetchMode của đối tượng PDO --> nó cài đặt cách dữ liệu được trả về
           // Dùng fetchAll lấy data từ CSDL và trả về một mảng chứa giá trị
           $conn = connectDb();
           // Khai báo câu truy vấn SQL để lấy tất cả các dữ liệu từ bảng 
        $sql = "SELECT * FROM game WHERE gameid=".$id;
        // Sử dụng đối tượng PDO để chuẩn bị câu truy vấn SQL.
        // Chuẩn bị câu truy vấn để thực thi, tránh tình trạng SQL injection
        $stmt = $conn->prepare($sql);
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $conn = null;
        return $data;
    }
?>