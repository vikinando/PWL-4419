<?php

session_start();

if (isset ($_POST['Login'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	//periksa login
	if (($user == "yuha" && $pass == "12345") OR ($user == "admin" && $pass == "12345")) {
		//menciptakan session
		$_SESSION['login'] = $user;
		$_SESSION['role'] = "guest";

		if($user == "admin"){
			$_SESSION['role'] = "admin";
		}
		
		//menuju ke halaman product
		header("location:list-product.php");
	}else{
		header("location:loginsession.php"); 
	}
} else {
	
	?>
	<html>
	<head>
		<title>Form Log In</title>
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
			<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

			<!-- Google Fonts -->
			<link href="https://fonts.gstatic.com" rel="preconnect">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

			<!-- Vendor CSS Files -->
			<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
			<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
			<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
			<link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
			<link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
			<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
			<link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

			<!-- Template Main CSS File -->
			<link href="assets/css/style.css" rel="stylesheet">
	</head>
	<body>
		<main>
		<div class="container">
			<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
							<div class="card mb-3">
								<div class="card-body">
									<form class="row g-3 needs-validation" action="" method="post" novalidate>
								
											<h2 class="card-title text-center pb-0 fs-4">Please Login Here...</h2>
										
										<div class="col-12">
											<label for="Username" class="form-label">Username</label>
											<div class="input-group has-validation">
											<span class="input-group-text" id="inputGroupPrepend">@</span>
											<input type="text" name="user" class="form-control" required>
										</div>
										<div class="col-12">
											<label for="Password" class="form-label">Password</label>
											<input type="password" name="pass"class="form-control" required>
										</div>
										<div class="col-12">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
												<label class="form-check-label" for="rememberMe">Remember me</label>
											</div>
										</div>
										<div class="col-12" >
											<a href="list-product.php" class="btn btn-primary">Login</a> 
										</div>
									</form>
								</div>
							</div>
							<div class="credits">	
								<i align="center">
								<a href="#"></a></i>
              				</div>
	
						</div>
					</div>
				
				</div>
			</section>
		</div>
	</main>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>

<?php 
}	 
?>