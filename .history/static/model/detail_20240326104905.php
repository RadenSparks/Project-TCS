
<?php
    function detail($id) {
        $conn = product()
        $sql = "SELECT * FROM game WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $conn = null;
        return $data[0];
    }
?>