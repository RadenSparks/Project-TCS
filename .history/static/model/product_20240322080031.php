<?php
        function productDetails($id) {
            $conn = connectDb(); 
            $sql = "SELECT * FROM products WHERE id=".$id;
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $data = $stmt->fetchAll();
            $conn = null;
            return $data;
        }

?>