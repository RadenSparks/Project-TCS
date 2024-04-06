<?php
function finAllCategory(){
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

?>