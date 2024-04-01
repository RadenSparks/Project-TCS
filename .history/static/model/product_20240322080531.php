<?php
     <?php
     function connectDb() {
         $servername = "your_servername";
         $username = "your_username";
         $password = "your_password";
         $dbname = "your_dbname";
     
         try {
             $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             return $conn;
         } catch(PDOException $e) {
             echo "Connection failed: " . $e->getMessage();
         }
     }
     
     function productDetails() {
         $conn = connectDb(); 
         $sql = "SELECT * FROM game";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
         $conn = null;
         return $data;
     }
     ?>
     

?>