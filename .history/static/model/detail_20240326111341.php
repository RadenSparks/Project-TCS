
<?php
    function detail($id) {
        $conn = connectDb();
        $sql = "SELECT * FROM game WHERE gameid=".$id;
        $stmt = $conn->prepare($sql);
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $conn = null;
        return $data[0];
    }
?>