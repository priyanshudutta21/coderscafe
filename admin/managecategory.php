<!DOCTYPE html>
<?php include('../include/dbcon.php');include('../include/functions.php'); ?>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<title>SB Admin 2 - Tables</title>

	<!-- Custom fonts for this template -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet" />

	<!-- Custom styles for this template -->
	<link href="css/sb-admin-2.min.css" rel="stylesheet" />

	<!-- Custom styles for this page -->
	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
</head>

<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon">
					<i class="fas fa-coffee"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Coders Cafe</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0" />

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="index.html">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider" />

			<!-- Nav Item - -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
					aria-expanded="true" aria-controls="collapseTwo">
					<i class="fas fa-fw fa-cog"></i>
					<span>Category</span>
				</a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="managecategory.php">Manage Catagory</a>
						<a class="collapse-item" href="category.html">View Catagory</a>
					</div>
				</div>
			</li>
			<!-- Nav Item - -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseItems"
					aria-expanded="true" aria-controls="collapseItems">
					<i class="fas fa-cookie-bite"></i>
					<span>Items</span>
				</a>
				<div id="collapseItems" class="collapse" aria-labelledby="headingUtilities"
					data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="manageitem.php">Manage Items </a>
						<a class="collapse-item" href="items.html">View Items</a>
					</div>
				</div>
			</li>
			<!-- Nav Item - -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrders"
					aria-expanded="true" aria-controls="collapseOrders">
					<i class="fas fa-utensils"></i>
					<span>Orders</span>
				</a>
				<div id="collapseOrders" class="collapse" aria-labelledby="headingUtilities"
					data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="orders.php">View Orders </a>
						<a class="collapse-item" href="manageorder.php">manage Orders</a>
					</div>
				</div>
			</li>
			<!-- Nav Item - -->
			<li class="nav-item">
				<a class="nav-link" href="users.html">
					<i class="fas fa-users"></i>
					<span>Users</span></a>
			</li>
			<!-- Nav Item - -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStaff"
					aria-expanded="true" aria-controls="collapseStaff">
					<i class="fas fa-utensils"></i>
					<span>Staff</span>
				</a>
				<div id="collapseStaff" class="collapse" aria-labelledby="headingUtilities"
					data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="managestaff.php">Manage Staff </a>
						<a class="collapse-item" href="staff.php">View Staff</a>
					</div>
				</div>
			</li>
			<!-- Nav Item - -->
			<li class="nav-item">
				<a class="nav-link" href="settings.html">
					<i class="fas fa-cogs"></i>
					<span>Settings</span></a>
			</li>
			<!-- Nav Item - -->
			<li class="nav-item">
				<a class="nav-link" href="settings.html">
					<i class="fas fa-sign-out-alt"></i>
					<span>Logout</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider" />
			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">
			<!-- Main Content -->
			<div id="content">
				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">
						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
								<img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
							</a>
						</li>
					</ul>
				</nav>

				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">
					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Category</h1>
					</div>
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<button href="#" type="button" data-toggle="modal" data-target="#addcate" class="btn btn-success"><i class="fas fa-plus"></i> Add Category</button>
					</div>
					<!-- DataTales Example -->
					<div class="card  mb-4">
						

						<div class="card-body">
							<!-- add content here  -->
							<table class="table">
								<thead>
									<tr>
										<th>Id</th>
										<th>Image</th>
										<th>Category </th>
										<th>status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php
								// delete item
								if(isset($_REQUEST["delete"]))
								{
								
									$sqlD = "DELETE FROM `menu_category` where `cat_id` = '{$_REQUEST['id']}'";
									$conn->query($sqlD);
									// echo $sqlD;
									// die();
									echo '<script>
									swal({
										title: "category Deleted",
										icon: "success",
										button: "close",
										type: "success"
									});
									</script>'; 
								}
									$query = "SELECT * FROM `menu_category` order by `cat_status` desc";
									$result = $conn->query($query);

									while($row = $result->fetch_assoc()){
										echo '
										<tr>
										<td>'.$row["cat_id"].'</td>
										<td><img src="'.catg_img.$row["cat_image"].'" alt="" border=3 height=80 width=80></img></td>
										<td>'.$row["cat_name"].'</td>';

										if($row["cat_status"] == 1){
											echo '<td class="text-success">available</td>';
										}
										else if($row["cat_status"] == 0){
											echo '<td class="text-danger">Empty Items</td>';
										}
										
										echo '<td>
											<form action="" method="post" class="d-inline">
												<input type="hidden" name="id" value='.$row["cat_id"].'>
												<button class="btn btn-primary" type="submit" name="update">
												<i class="fas fa-pen"></i>
												</button>
											</form>
											
											<form action="" method="post" class="d-inline">
												<input type="hidden" name="id" value='.$row["cat_id"].'>
												<button class="btn btn-danger" type="submit" name="delete">
												<i class="fas fa-trash "></i>
												</button>
											</form>
										</td>
									</tr>';
									}
								?>
								</tbody>
							</table>

							<!-- modal 1 add category -->
							<div class="modal fade" id="addcate" tabindex="-1" role="dialog" aria-labelledby="addcate" aria-hidden="true">
								<div class="modal-dialog" role="document">
								  <div class="modal-content">
									<div class="modal-header">
									  <h5 class="modal-title" id="exampleModalLabel">Add Items</h5>
									  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>
									<?php 
									if(isset($_REQUEST["additm"]))
									{	
										// PICTURE UPLOAD
										$file = $_FILES['cimg'];

										$photo_name = $_FILES['cimg']['name'];
										$file_type = $_FILES['cimg']['type'];
										$file_size =$_FILES['cimg']['size'];
										$file_tmp_loc = $_FILES['cimg']['tmp_name'];
										$file_store_path = "../images/items/".$photo_name;
										move_uploaded_file($file_tmp_loc,$file_store_path);

										$caname = $_REQUEST["cname"];

										$query = "INSERT INTO `menu_category`(`cat_name`, `cat_image`, `cat_status`) VALUES ('$caname','$photo_name', '0')";
										echo $query;
										$conn->query($query);
										echo '<script>
										swal({
											title: "Category Added",
											icon: "success",
											button: "close",
											type: "success"
										});
										</script>';
										echo '<meta http-equiv="refresh" content= "0;URL=?CategoryAdded" />'; 
									}
									?>
									<form action="" method="POST" enctype="multipart/form-data">
										<div class="modal-body">
											<div class="form-group">
												<label for="exampleFormControlFile1">category Image</label>
												<input type="file" name="cimg" class="form-control-file" required>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">category Name</label>
												<input type="text" class="form-control" name="cname" placeholder="Enter category Name" required>
											</div>
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="submit" name ="additm" class="btn btn-primary">Add Category</button>
										</div>
									</form>
									
								  </div>
								</div>
							  </div>
							<!-- end modal -->
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Your Website 2020</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->
		</div>
		<!-- End of Content Wrapper -->
	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="js/demo/datatables-demo.js"></script>
</body>

</html>
