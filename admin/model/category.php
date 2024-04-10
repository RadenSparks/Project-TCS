<?php
function findAllCategory(){
    $conn = conndb();
    $sql = "SELECT * FROM genre";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $category_list = $stmt->fetchAll();
    $conn = null;
    return $category_list;
    
}
function addCategory($genrename, $img) {
    $conn = conndb();
    $sql = "INSERT INTO genre (genrename, img) VALUES (:genrename, :img)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':genrename', $genrename);
    $stmt->bindParam(':img', $img);
    $success = $stmt->execute();
    $conn = null;
    return $success;
}
function getCategoryById($genreid) {
    $conn = conndb();
    $sql = "SELECT * FROM genre WHERE genreid = :genreid";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':genreid', $genreid);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $result;
}
function deleteCategory($genreid) {
    $conn = conndb();
    $sql = "DELETE FROM genre WHERE genreid = :genreid";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':genreid', $genreid);
    $success = $stmt->execute();
    $conn = null;
    return $success;
}
function editCategory($genreid, $categoryName, $categoryImage) {
    $conn = conndb();
    $sql = "UPDATE genre SET genrename = :genrename, img = :img WHERE genreid = :genreid"; 
    $stmt = $conn->prepare($sql); 
    $stmt->bindParam(':genreid', $genreid); 
    $stmt->bindParam(':genrename', $categoryName); 
    $stmt->bindParam(':img', $categoryImage); 
    $success = $stmt->execute(); 
    $conn = null; 
    return $success;
}

?>