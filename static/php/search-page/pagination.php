<div class="row">
	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			<?php		
			// Pagination			        
			$sql_pagination = "SELECT * FROM game WHERE gamename LIKE :search" . $genreQueryCondition;
			$stmt_pagination = $pdo->prepare($sql_pagination);
			$stmt_pagination->bindValue(':search', '%' . $search . '%');
			// Bind other parameters if needed
			$stmt_pagination->bindValue(':genre', $genre);
			$stmt_pagination->execute();
			$row_pagination = $stmt_pagination->rowCount();
			$pagenumber = ceil($row_pagination / $gameoncepage);

			if ($page != 1) {
			?>
				<li class="page-item">
					<a class="page-link" href='index.php?act=products&page=<?php echo $page - 1; ?>&search=<?php echo $search; ?>&genre=<?php echo $genre; ?>'></a>
				</li>
			<?php } ?>
			<?php
			for ($i = 1; $i <= $pagenumber; $i++) {
				if ($i == $page) {
					echo "<li class='page-item'><a class='page-link active' href='index.php?act=products&page={$i}&search=" . $search . "&genre=" . $genre . "'>" . $i . "</a></li>";
				} else
					echo "<li class='page-item'><a class='page-link' href='index.php?act=products&page={$i}&search=" . $search . "&genre=" . $genre . "'>" . $i . "</a></li>";
			}
			if ($page != $pagenumber && $pagenumber != 0) {
			?>
				<li class="page-item"><a class='page-link' href='index.php?act=products&page=<?php echo $page + 1; ?>&search=<?php echo $search; ?>&genre=<?php echo $genre; ?>'>>></a>
			<?php } ?>
		</ul>
	</nav>
</div>
