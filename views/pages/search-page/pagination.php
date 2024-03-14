<div class="row">
	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			<?php		
			//pagination			        
			$sql_pagination = "select*FROM game g where gamename LIKE '%$search%'" . $genreQueryCondition;
			$query_pagination = mysqli_query($conn, $sql_pagination);
			$row_pagination = mysqli_num_rows($query_pagination);
			$pagenumber = ceil($row_pagination / $gameoncepage);
			$search = isset($_GET["search"]) ? $_GET['search'] : "";
			$genre = isset($_GET["genre"]) ? $_GET['genre'] : "";

			if ($page != 1) {
				?>
				<li class="page-item">
					<a class="page-link" href='index.php?site=products&page=<?php echo $page - 1; ?>&search=&genre='>
					</a>
				</li>
			<?php } ?>
			<?php
			for ($i = 1; $i <= $pagenumber; $i++) {
				if ($i == $page) {
					echo "<li class='page-item'><a class='page-link active' href='index.php?site=products&page={$i}&search=" . $search . "&genre=" . $genre . "'>" . $i . "</a></li>";
				} else
					echo "<li class='page-item'><a class='page-link' href='index.php?site=products&page={$i}&search=" . $search . "&genre=" . $genre . "'>" . $i . "</a></li>";
			}
			if ($page != $pagenumber && $pagenumber != 0) {
				?>
				<li class="page-item"><a class='page-link'
						href='index.php?site=products&page=<?php echo $page + 1; ?>&search=&genre='>></a>
				<?php } ?>
		</ul>
	</nav>
</div>