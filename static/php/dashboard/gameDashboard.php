<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>TCS Dashboard</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="./static/admin/css/bootstrap.min.css">
	<!----css3---->
	<link rel="stylesheet" href="./static/admin/css/custom.css">


	<!--google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


	<!--google material icon-->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

</head>

<body>
	<div class="wrapper">

		<div class="body-overlay"></div>
		<!-------sidebar--design------------>
		<?php include 'sidebar.php' ?>

		<!-------sidebar--design- close----------->

		<!-------page-content start----------->
		<div id="content">
			<!------top-navbar-start----------->
			<?php include 'header.php' ?>
			<!------top-navbar-end----------->

			<!------main-content-start----------->
			<div class="main-content">
				<div class="row">
					<div class="col-md-12">
						<div class="table-wrapper">

							<div class="table-title">
								<div class="row">
									<div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
										<h2 class="ml-lg-2">Manage Game</h2>
									</div>
									<div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
										<a href="#addModal" class="btn btn-success" data-toggle="modal">
											<i class="material-icons">&#xE147;</i>
											<span>Add New Game Product</span>
										</a>
										<a id="deleteMulti" href="#deleteModal" class="btn btn-danger" data-toggle="modal" onclick="removeMulti()">
											<i class="material-icons">&#xE15C;</i>
											<span>Delete</span>
										</a>
									</div>
								</div>
							</div>

							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th><span class="custom-checkbox">
												<input type="checkbox" id="selectAll">
												<label for="selectAll"></label></th>
										<th>Name</th>
										<th>Price</th>
										<th>Sale</th>
										<th>Genre</th>
										<th>Developer</th>
										<th>Publisher</th>
										<th>Actions</th>
									</tr>
								</thead>

								<tbody>
									<?php
									$gamePerPage = 10;
									$pagination = ($page * $gamePerPage) - $gamePerPage;

									$genreQuery = 'SELECT * from genre gnr where retired = 0';
									$gamesQuery = 'SELECT * from game g join genre gnr on g.genreid = gnr.genreid where g.retired = 0';
									$gameQueryPagination = $gamesQuery . ' ORDER BY g.gamename LIMIT ' . $pagination . ',' . $gamePerPage;


									$gameResult = query($conn, $gamesQuery);
									$gamePaginationResult = query($conn, $gameQueryPagination);
									$genreResult = query($conn, $genreQuery);
									$pageCount = ceil($gameResult->num_rows / $gamePerPage);
									$gamePaginationArr = array();
									$genreArr = array();
									while ($genre = $genreResult->fetch_assoc()) {
										array_push($genreArr, $genre);
									}

									while ($game = $gamePaginationResult->fetch_assoc()) {
										array_push($gamePaginationArr, $game);
										$price = $game['price'] > 0 ? number_format($game['price']) . " vnđ" : 'Free';
										echo '
												<tr>
													<th><span class="custom-checkbox">
															<input type="checkbox" id="checkbox1" name="check[]" value="' . $game['gameid'] . '">
															<label for="checkbox1"></label></th>
													<th>' . $game['gamename'] . '</th>
													<th>' . $price . '</th>
													<th>' . $game['sale'] * 100 . "%" . '</th>
													<th>' . $game['genrename'] . '</th>
													<th>' . $game['developer'] . '</th>
													<th>' . $game['publisher'] . '</th>
													<th>
														<a href="#editModal-' . $game['gameid'] . '" class="edit" data-toggle="modal">
															<i class="material-icons" data-toggle="tooltip"
																title="Edit">&#xE254;</i>
														</a>
														<a href="#deleteModal" class="delete" data-toggle="modal" onclick="remove(' . $game['gameid'] . ')">
															<i class="material-icons" data-toggle="tooltip"
																title="Delete">&#xE872;</i>
														</a>
													</th>
												</tr>';
									}
									?>

								</tbody>


							</table>

							<div class="clearfix">
								<div class="hint-text">showing <b>
										<?php echo $gamePaginationResult->num_rows ?>
									</b> out of <b>
										<?php echo $gameResult->num_rows ?>
									</b></div>
								<ul class="pagination">
									<li class="page-item disabled"><a <?php if ($page > 1)
																			echo 'href="index.php?act=dashboard&entity=game&page=' . (max(1, $page - 1)) . '"' ?>>Previous</a></li>
									<?php
									for ($i = 1; $i <= $pageCount; $i++) {
										if ($i == $page) {
											echo '<li class="page-item active"><a class="page-link">' . $i . '</a></li>';
										} else {
											echo '<li class="page-item"><a href="index.php?act=dashboard&entity=game&page=' . $i . '" class="page-link">' . $i . '</a></li>';
										}
									}
									?>
									<li class="page-item "><a <?php if ($page < $pageCount)
																	echo 'href="index.php?act=dashboard&entity=game&page=' . (max(1, min($pageCount, $page + 1))) . '"' ?> class="page-link">Next</a></li>
								</ul>
							</div>
						</div>
					</div>


					<!----add-modal start--------->
					<div class="modal fade" tabindex="-1" id="addModal" role="dialog">
						<div class="modal-dialog modal-dialog-lg" role="document">
							<form class="modal-content" id="add-form">
								<div class="modal-header">
									<h5 class="modal-title">Add Game</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label>Name</label>
											<input type="text" class="form-control" name="name" required>
										</div>
										<div class="form-group col-md-6">
											<label>Price</label>
											<input type="number" min="0" step="1" class="form-control" name="price" required>

										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label>Sale</label>
											<input type="number" min="0" step="0.01" max="1" class="form-control" name="sale" required>
										</div>
										<div class="form-group col-md-6">
											<label for="inputState">Genre</label>			
											<select name="genre" id="inputState" class="form-control">
												<?php
												foreach ($genreArr as $i => $genre) {
													echo '<option value="' . $genre['genreid'] . '">' . $genre['genrename'] . '</option>';
												}
												?>
											</select>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label>Developer</label>
											<input type="text" class="form-control" name="developer" required>
										</div>
										<div class="form-group col-md-6">
											<label>Publisher</label>
											<input type="text" class="form-control" name="publisher" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-12">
											<label>Summary</label>
											<textarea class="form-control" name="summary" rows="4" required></textarea>
										</div>
									</div>									
								</div>
								<div class="modal-footer">
									<button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-success">Add</button>
								</div>
							</form>
						</div>
					</div>
					<!----add-modal end--------->

					<!----edit-modal start--------->
					<?php
					foreach ($gamePaginationArr as $i => $game) {
						echo '
							<div class="modal fade" tabindex="-1" id="editModal-' . $game['gameid'] . '" role="dialog">
								<div class="modal-dialog modal-dialog-lg" role="document">
									<form class="modal-content" name="edit-form">
										<div class="modal-header">
											<h5 class="modal-title">Edit Game #' . $game['gameid'] . '</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<input type="text" hidden class="form-control" name="id" value="' . $game['gameid'] . '" required>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Name</label>
													<input type="text" class="form-control" name="name" value="' . $game['gamename'] . '" required>
												</div>
												<div class="form-group col-md-6">
													<label>Price</label>
													<input type="number" min="0" step="1" class="form-control" name="price" value="' . $game['price'] . '" required>

												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Sale</label>
													<input type="number" min="0" step="0.01" max="1" class="form-control" name="sale" value="' . $game['sale'] . '" required>
												</div>
												<div class="form-group col-md-6">
													<label for="inputState">Genre</label>			
													<select name="genre" id="inputState" class="form-control">';
													foreach ($genreArr as $i => $genre) {
														if ($game['genreid'] == $genre['genreid']) {
															echo '<option selected value="' . $genre['genreid'] . '">' . $genre['genrename'] . '</option>';
														} else {
															echo '<option value="' . $genre['genreid'] . '">' . $genre['genrename'] . '</option>';
														}
													}
													echo '</select>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Developer</label>
													<input type="text" class="form-control" name="developer" value="' . $game['developer'] . '" required>
												</div>
												<div class="form-group col-md-6">
													<label>Publisher</label>
													<input type="text" class="form-control" name="publisher" value="' . $game['publisher'] . '" required>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-12">
													<label>Summary</label>
													<textarea class="form-control" name="summary" rows="4" required>' . $game['summary'] . '</textarea>
												</div>
											</div>											
										</div>										
										<div class="modal-footer">
											<button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
											<button type="submit" class="btn btn-success">Save</button>
										</div>
									</form>
								</div>
							</div>';
					}
					?>
					<!----edit-modal end--------->

					<!----delete-modal start--------->
					<div class="modal fade" tabindex="-1" id="deleteModal" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content" id="delete-form">
								<div class="modal-header">
									<h5 class="modal-title">Delete Game</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Are you sure you want to delete these records</p>
									<p class="text-warning"><small>this action Cannot be Undone,</small></p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<button type="button" id="delete-btn" class="btn btn-success">Delete</button>
								</div>
							</div>
						</div>
					</div>
					<!----edit-modal end--------->
				</div>
			</div>
			<!------main-content-end----------->
			<!----footer-design------------->
			<?php include 'footer.php' ?>

		</div>
	</div>



	<!-------complete html----------->






	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="./static/admin/js/jquery-3.3.1.slim.min.js"></script>
	<script src="./static/admin/js/popper.min.js"></script>
	<script src="./static/admin/js/jquery-3.3.1.min.js"></script>
	<script src="./static/admin/js/bootstrap.min.js"></script>
	<script>
		//Add functional
		document.getElementById("add-form").onsubmit = async (e) => {
			e.preventDefault();
			const form = e.target;
			const body = new FormData(form);
			await fetch('./static/php/dashboard/addGame.php', {
				method: 'POST',
				body: body,
				mode:"no-cors"					
			}).then(response =>
				response.json()
			).then(response => {
				if (response.status) {
					$('#addModal').modal('hide');
					location.reload();
				}
			}).catch(function(err) {
				console.log(err);
			});
		}

		//Edit functional
		document.getElementsByName("edit-form").forEach(ele => {
			ele.onsubmit = async (e) => {
				e.preventDefault();
				const form = e.target;
				const body = new FormData(form);
				await fetch('./static/php/dashboard/updateGame.php', {
					method: 'POST',
					body: body,
				}).then(response =>
					response.json()
				).then(response => {
					if (response.status) {
						$('#editModal-' + body.get("id")).modal('hide');
						location.reload();
					}
				}).catch(function(err) {
					console.log(err);
				});

			}
		})

		//Delete functional
		const deleteModal = document.getElementById("deleteModal");
		const dltBtn = document.getElementById("deleteMulti")
		dltBtn.style.display = 'none';

		document.getElementById("selectAll").onchange = (e) => {
			document.getElementsByName("check[]").forEach(tag => {
				tag.checked = e.target.checked;
			});
			if (getCheckedCheckBoxs().length > 0) {
				dltBtn.style.display = 'block';
			} else {
				dltBtn.style.display = 'none';
			}
		}

		document.getElementsByName("check[]").forEach(tag => {
			tag.onchange = (e) => {
				if (getCheckedCheckBoxs().length > 0) {
					dltBtn.style.display = 'block';
				} else {
					dltBtn.style.display = 'none';
				}
			}
		});

		function getCheckedCheckBoxs() {
			let ids = [];
			document.getElementsByName("check[]").forEach(tag => {
				if (tag.checked) {
					ids.push(tag.value)
				}
			});
			return ids;
		}

		function remove(id) {
			deleteModal.setAttribute("deleteIds", "(" + id + ")");
		}

		function removeMulti() {
			let ids = getCheckedCheckBoxs();
			deleteModal.setAttribute("deleteIds", "(" + ids.join(",") + ")");
		}

		document.getElementById("delete-btn").onclick = async (e) => {
			e.preventDefault();
			const body = new FormData();
			body.set("ids", deleteModal.getAttribute("deleteIds"));
			await fetch('./static/php/dashboard/deleteGame.php', {
				method: 'POST',
				body: body,
			}).then(response =>
				response.json()
			).then(response => {
				if (response.status) {
					$('#deleteModal').modal('hide');
					location.reload();
				}
			}).catch(function(err) {
				console.log(err);
			});

		}
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			$(".xp-menubar").on('click', function() {
				$("#sidebar").toggleClass('active');
				$("#content").toggleClass('active');
			});

			$('.xp-menubar,.body-overlay').on('click', function() {
				$("#sidebar,.body-overlay").toggleClass('show-nav');
			});

		});
	</script>






</body>

</html>