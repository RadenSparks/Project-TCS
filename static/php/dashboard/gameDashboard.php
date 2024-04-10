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

		<div id="sidebar">
			<div class="sidebar-header">
				<h3><img src="./static/image/img-layoutold/logo.png" class="img-fluid" /><span>TCS Dashboard</span></h3>
			</div>
			<ul class="list-unstyled component m-0">
				<li class="active">
					<a href="#" class="dashboard">
						Games Management
					</a>
					<a href="#" class="dashboard">
						Account Management
					</a>
					<a href="#" class="dashboard">
						Genre Management
					</a>
				</li>
			</ul>
		</div>

		<!-------sidebar--design- close----------->



		<!-------page-content start----------->

		<div id="content">

			<!------top-navbar-start----------->

			<div class="top-navbar">
				<div class="xd-topbar">
					<div class="row">
						<div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
							<div class="xp-menubar">
								<span class="material-icons text-white">signal_cellular_alt</span>
							</div>
						</div>

						<div class="col-md-5 col-lg-3 order-3 order-md-2">
							<div class="xp-searchbar">
								<form>
									<div class="input-group">
										<input type="search" class="form-control" placeholder="Search">
										<div class="input-group-append">
											<button class="btn" type="submit" id="button-addon2">Go
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>


						<div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
							<div class="xp-profilebar text-right">
								<nav class="navbar p-0">
									<ul class="nav navbar-nav flex-row ml-auto">

										<li class="dropdown nav-item">
											<a class="nav-link" href="#" data-toggle="dropdown">
												<img src="./static/admin/img/user.jpg"
													style="width:40px; border-radius:50%;" />
												<span class="xp-user-live"></span>
											</a>
											<ul class="dropdown-menu small-menu">
												<li><a href="#">
														<span class="material-icons">person_outline</span>
														Profile
													</a></li>
												<li><a href="#">
														<span class="material-icons">settings</span>
														Settings
													</a></li>
												<li><a href="#">
														<span class="material-icons">logout</span>
														Logout
													</a></li>

											</ul>
										</li>


									</ul>
								</nav>
							</div>
						</div>

					</div>

					<div class="xp-breadcrumbbar text-center">
						<h4 class="page-title">Dashboard</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">TCS</a></li>
							<li class="breadcrumb-item active" aria-curent="page">Dashboard</li>
						</ol>
					</div>


				</div>
			</div>
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
										<a id="deleteMulti" href="#deleteModal" class="btn btn-danger"
											data-toggle="modal" onclick="removeMulti()">
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

									$genreQuery = 'SELECT * from genre gnr';
									$gamesQuery = 'SELECT * from game g join genre gnr on g.genreid = gnr.genreid where retired = 0';
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
						<div class="modal-dialog" role="document">
							<form class="modal-content" id="add-form">
								<div class="modal-header">
									<h5 class="modal-title">Add Game</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" name="name" required>
									</div>
									<div class="form-group">
										<label>Price</label>
										<input type="number" min="0" step="1" class="form-control" name="price" required>
									</div>
									<div class="form-group">
										<label>Sale</label>
										<input type="number" min="0" step="0.01" max="1" class="form-control" name="sale" required>
									</div>
									<div class="form-group">
										<label>Developer</label>
										<input type="text" class="form-control" name="developer" required>
									</div>
									<div class="form-group">
										<label>Publisher</label>
										<input type="text" class="form-control" name="publisher" required>
									</div>
									<div class="form-group">
										<label>Genre</label>
										<select name="genre">
											<?php
									foreach ($genreArr as $i => $genre) {
										echo '<option value="' . $genre['genreid'] . '">' . $genre['genrename'] . '</option>';
									}
									?>
										</select>
									</div>
									<div class="form-group">
										<label>Summary</label>
										<textarea class="form-control" name="summary" rows="8" required></textarea>
									</div>
								</div>
								<div class="modal-footer">
									<button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-success">Add</button>
								</div>
							</form>
						</div>
					</div>
					<script>
						document.getElementById("add-form").onsubmit = async (e) => {
							e.preventDefault();
							const form = e.target;
							const body = new FormData(form);
							await fetch('http://localhost/Project-TCS/static/php/dashboard/addGame.php', {
								method: 'POST',
								body: body,
							}).then(response =>
								response.json()
							).then(response => {
								if (response.status) {
									$('#addModal').modal('hide');
									location.reload();
								}
							}).catch(function (err) {
								console.log(err);
							});
						}
					</script>

					<!----add-modal end--------->

					<!----edit-modal start--------->
					<?php
					foreach ($gamePaginationArr as $i => $game) {
						echo '
							<div class="modal fade" tabindex="-1" id="editModal-' . $game['gameid'] . '" role="dialog">
								<div class="modal-dialog" role="document">
									<form class="modal-content" name="edit-form">
										<div class="modal-header">
											<h5 class="modal-title">Edit Game</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<input type="text" hidden class="form-control" name="id" value="' . $game['gameid'] . '" required>
											<div class="form-group">
												<label>Name</label>
												<input type="text" class="form-control" name="name" value="' . $game['gamename'] . '" required>
											</div>
											<div class="form-group">
												<label>Price</label>
												<input type="number" min="0" step="1" class="form-control" name="price" value="' . $game['price'] . '" required>
											</div>
											<div class="form-group">
												<label>Sale</label>
												<input type="number" min="0" max="1" step="0.01" class="form-control" name="sale" value="' . $game['sale'] . '" required>
											</div>
											<div class="form-group">
												<label>Developer</label>
												<input type="text" class="form-control" name="developer" value="' . $game['developer'] . '" required>
											</div>
											<div class="form-group">
												<label>Publisher</label>
												<input type="text" class="form-control" name="publisher" value="' . $game['publisher'] . '" required>
											</div>
											<div class="form-group">
												<label>Genre</label>
												<select name="genre">';
						foreach ($genreArr as $i => $genre) {
							if ($game['genreid'] == $genre['genreid']) {
								echo '<option selected value="' . $genre['genreid'] . '">' . $genre['genrename'] . '</option>';
							} else {
								echo '<option value="' . $genre['genreid'] . '">' . $genre['genrename'] . '</option>';
							}
						}
						echo '</select>
											</div>
											<div class="form-group">
												<label>Summary</label>
												<textarea class="form-control" name="summary" rows="8" required>' . $game['summary'] . '</textarea>
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

					<script>
						document.getElementsByName("edit-form").forEach(ele => {
							ele.onsubmit = async (e) => {
								e.preventDefault();								
								const form = e.target;
								const body = new FormData(form);								
								await fetch('http://localhost/Project-TCS/static/php/dashboard/updateGame.php', {
									method: 'POST',
									body: body,
								}).then(response =>
									response.json()
								).then(response => {
									if (response.status) {
										$('#editModal-' + body.get("id")).modal('hide');
										location.reload();
									}
								}).catch(function (err) {									
									console.log(err);
								});
								
							}
						})

					</script>
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

					<script>
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
							await fetch('http://localhost/Project-TCS/static/php/dashboard/deleteGame.php', {
								method: 'POST',
								body: body,
							}).then(response =>
								response.json()
							).then(response => {
								if (response.status) {
									$('#deleteModal').modal('hide');
									location.reload();
								}
							}).catch(function (err) {
								console.log(err);
							});

						}

					</script>
					<!----edit-modal end--------->

				</div>
			</div>

			<!------main-content-end----------->



			<!----footer-design------------->

			<footer class="footer">
				<div class="container-fluid">
					<div class="footer-in">
						<p class="mb-0">&copy 2021 TCS Design . All Rights Reserved.</p>
					</div>
				</div>
			</footer>
		</div>
	</div>



	<!-------complete html----------->






	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="./static/admin/js/jquery-3.3.1.slim.min.js"></script>
	<script src="./static/admin/js/popper.min.js"></script>
	<script src="./static/admin/js/jquery-3.3.1.min.js"></script>
	<script src="./static/admin/js/bootstrap.min.js"></script>



	<script type="text/javascript">
		$(document).ready(function () {
			$(".xp-menubar").on('click', function () {
				$("#sidebar").toggleClass('active');
				$("#content").toggleClass('active');
			});

			$('.xp-menubar,.body-overlay').on('click', function () {
				$("#sidebar,.body-overlay").toggleClass('show-nav');
			});

		});
	</script>





</body>

</html>