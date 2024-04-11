<?php
    function findAllCustomer(){
        $conn = connectDb();
        $sql = "SELECT * FROM accounts where active = 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $customer_list = $stmt->fetchAll();
        $conn = null;
        return $customer_list;
    }

    function deleteCustomer($accountid) {
        $conn = connectDb();
        $sql = "UPDATE accounts set active = 0 WHERE accountid = :accountid";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':accountid', $accountid);
        $stmt->execute();
    }
    function editCusomer($accountid, $firstname, $lastname, $displayname, $password, $email) {
        $conn = connectDb();
        $sql = "UPDATE accounts SET firstname = :firstname, lastname = :lastname, displayname = :displayname, password = :password, email = :email WHERE accountid = :accountid"; 
        $stmt = $conn->prepare($sql); 
        $stmt->bindParam(':accountid', $accountid); 
        $stmt->bindParam(':firstname', $firstname); 
        $stmt->bindParam(':lastname', $lastname); 
        $stmt->bindParam(':displayname', $displayname); 
        $stmt->bindParam(':password', $password); 
        $stmt->bindParam(':email', $email); 
        $success = $stmt->execute(); 
        $conn = null; 
        return $success;
    }
    function findByIdCustomer($accountid) {
        $conn = connectDb();
        $sql = "SELECT * FROM accounts WHERE accountid = :accountid";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':accountid', $accountid);
        $stmt->execute();
        $customer_info = $stmt->fetch(PDO::FETCH_ASSOC);
        $conn = null;
        return $customer_info;
    }
    
?>
