<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="webroot/css/bootstrap.min.css">
	<style>
	.logout {
		line-height: 50px;
		color: white;
	}
</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-expand navbar-inverse" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header ">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">FrontEnd Website</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li class="active"><a href="index.php?controller=front&action=home">Home</a></li>
					<li><a href="#">Introduces</a></li>
					<li><a href="index.php?controller=news&action=list_news">News</a></li>
					<li><a href="index.php?controller=products&action=list_products">Products</a></li>
					<li><a href="#">Contacts</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<?php if (isset($_SESSION['username'])) {?>
						<li class="logout">Hi, <?php echo $_SESSION['username']; ?></li>
						<li><a href="index.php?controller=users&action=logout">Logout</a></li>
						<li><a href="admin.php">Admin</a></li>
						<?php }else{ ?>
							<li><a href="index.php?controller=users&action=login" >Login</a></li>
							<li><a href="index.php?controller=users&action=register">Register</a></li>
							<?php } ?>
						</ul>

					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
	<!-- <h1>FrontEnd Website</h1>
	<nav id="nav">
		<ul>
			<li><a href="index.php?controller=front&action=home">Home</a></li>
			<li><a href="index.php?controller=news&action=list_news">News</a></li>
			<li><a href="index.php?controller=products&action=list_products">Products</a></li> -->

			

			<!-- </ul> -->
			<!-- </nav> -->
			<?php 
			include 'controller/frontend_controller.php';
			$front = new FrontendController();
			$front->handleRequest();
			?>
			<script src="webroot/js/bootstrap.min.js"></script>
		</body>
		</html>