<?php
        function productDetails() {
            $conn = connectDb(); 
            $sql = "SELECT * FROM ;
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $data = $stmt->fetchAll();
            $conn = null;
            return $data;
        }

?>