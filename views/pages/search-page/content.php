<?php
	$search = isset($_GET["search"]) && $_GET['search'] ? $_GET['search'] : "";
	$genre = isset($_GET["genre"]) && $_GET['genre'] ? $_GET['genre'] : "";
	$genreQueryCondition = isset($_GET["genre"]) && $_GET['genre'] ? " and genreid='" . $_GET['genre'] . "'" : "";
	
	include('browse.php');
?>