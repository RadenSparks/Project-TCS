<?php
    function account() {
           // Gọi hàm connectDb() để thiết lập kết nối đến cơ sở dữ liệu và lấy đối tượng PDO, sau đó gán vào biến $conn.
         
           
         
           
        $conn = connectDb();
           // Khai báo câu truy vấn SQL để lấy tất cả các dữ liệu từ bảng
        $sql = "SELECT * FROM account";
        $stmt = $conn->prepare($sql);
        // Thực thi câu truy vấn đã được chuẩn bị bằng cách gọi phương thức execute() trên đối tượng PDOStatement ($stmt).
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        // Dùng fetchAll lấy data từ CSDL và trả về một mảng chứa giá trị
        $data = $stmt->fetchAll();
        $conn = null;
        return $data;
    }

?>