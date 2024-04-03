<?php
$search = isset($_GET["search"]) && $_GET['search'] ? $_GET['search'] : "";
$genre = isset($_GET["genre"]) && $_GET['genre'] ? $_GET['genre'] : "";
$genreQueryCondition = isset($_GET["genre"]) && $_GET['genre'] ? " and genreid= :genre" : "";

include('browse.php');
$sql = "SELECT * FROM game WHERE gamename LIKE :search" . $genreQueryCondition . " LIMIT :pagination, :gamePerPage";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':search', '%' . $search . '%');
$stmt->bindValue(':pagination', $pagination, PDO::PARAM_INT);
$stmt->bindValue(':gamePerPage', $gamePerPage, PDO::PARAM_INT);
if ($genre) {
  $stmt->bindValue(':genre', $_GET['genre']);
}
$stmt->execute();
?>