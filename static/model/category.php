<?php
function findAllCategory(){
    $conn = connectDb();
    $sql = "SELECT * FROM genre where retired = 0";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $category_list = $stmt->fetchAll();
    $conn = null;
    return $category_list;
    
}
function addCategory($genrename, $img) {
    $conn = connectDb();
    $sql = "INSERT INTO genre (genrename) VALUES (:genrename, :img)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':genrename', $genrename);
    $success = $stmt->execute();
    $conn = null;
    return $success;
}
function getCategoryById($genreid) {
    $conn = connectDb();
    $sql = "SELECT * FROM genre WHERE genreid = :genreid";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':genreid', $genreid);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $result;
}
function deleteCategory($genreid) {
    $conn = connectDb();
    $sql = "UPDATE genre set retired = 1 WHERE genreid = :genreid";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':genreid', $genreid);
    $success = $stmt->execute();
    $conn = null;
    return $success;
}
function editCategory($genreid, $categoryName, $categoryImage) {
    $conn = connectDb();
    $sql = "UPDATE genre SET genrename = :genrename WHERE genreid = :genreid"; 
    $stmt = $conn->prepare($sql); 
    $stmt->bindParam(':genreid', $genreid); 
    $stmt->bindParam(':genrename', $categoryName); 
    $success = $stmt->execute(); 
    $conn = null; 
    return $success;
}

?>