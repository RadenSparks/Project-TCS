<?php
    function findAllCustomer(){
        $conn = conndb();
        $sql = "SELECT * FROM accounts";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $customer_list = $stmt->fetchAll();
        $conn = null;
        return $customer_list;
    }

    function deleteCustomer($accountid) {
        $conn = conndb();
        $sql = "DELETE FROM accounts WHERE accountid = :accountid";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':accountid', $accountid);
        $stmt->execute();
    }
    function editCusomer($accountid, $firstname, $lastname, $displayname, $password, $country, $email) {
        $conn = conndb();
        $sql = "UPDATE accounts SET firstname = :firstname, lastname = :lastname, displayname = :displayname, password = :password, country = :country, email = :email WHERE accountid = :accountid"; 
        $stmt = $conn->prepare($sql); 
        $stmt->bindParam(':accountid', $accountid); 
        $stmt->bindParam(':firstname', $firstname); 
        $stmt->bindParam(':lastname', $lastname); 
        $stmt->bindParam(':displayname', $displayname); 
        $stmt->bindParam(':password', $password); 
        $stmt->bindParam(':country', $country); 
        $stmt->bindParam(':email', $email); 
        $success = $stmt->execute(); 
        $conn = null; 
        return $success;
    }
    function findByIdCustomer($accountid) {
        $conn = conndb();
        $sql = "SELECT * FROM accounts WHERE accountid = :accountid";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':accountid', $accountid);
        $stmt->execute();
        $customer_info = $stmt->fetch(PDO::FETCH_ASSOC);
        $conn = null;
        return $customer_info;
    }
    
?>
<!-- function deleteCatalog($id) {
        $conn = conndb();
        $sql = "DELETE FROM catalogs WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
        $conn = null;
    } -->