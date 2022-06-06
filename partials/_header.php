<?php
	require_once 'includes/db.php';
	require_once 'includes/function.php';
	require_once 'includes/session_function.php';

	function bgLight() {
		if($_SERVER['REQUEST_URI'] === '/school/blog.php') {
			return 'navbar-light bg-white';
		}

		return 'navbar-dark bg-dark';
	}

	function setActive($path = null) {
		if(substr($_SERVER['REQUEST_URI'], 1) === $path) {
			return 'fw-bolder text-primary';
		}

		return '';
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Font awesome cdn CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/styles.css" />
		<!-- icon du domaine -->
		
		<link rel="icon" href="assets/img/logo/logo3.png">

		<title><?= isset($title) ? $title : WEBSITE_NAME ?></title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg <?= bgLight(); ?> w-100">
			<div class="container">
				<a class="navbar-brand text-uppercase py-3 text-primary fw-bolder" href="#">
                    <img class="img rounded-circle mx-auto" style="width: 30px; height: 30px" src="assets/img/logo/logo3.png" alt="">
                    <span class="fs-6"><?= WEBSITE_NAME ?></span>
                </a>
				<button
					class="navbar-toggler text-primary"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item pe-4">
							<a class="nav-link <?= setActive('school/index.php') ?>" aria-current="page" href="index.php">Accueil</a>
						</li>
						<li class="nav-item pe-4">
							<a class="nav-link <?= setActive('school/blog.php') ?>" href="blog.php">Blog</a>
						</li>
						<li class="nav-item pe-4">
							<a class="nav-link <?= setActive('school/contact.php') ?>" href="contact.php">Contact</a>
						</li>
						<?php if(isset($_SESSION['auth'])) {
							?>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<strong><?= $_SESSION['names'] .' '. $_SESSION['firstname'] ?></strong> 
									<img class="img rounded-circle mx-auto" style="width: 20px; height: 20px" src="assets/img/logo/logo3.png" alt="">
								</a>
								<ul class="dropdown-menu bg-dark text-light" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item nav-link <?= setActive("php/profil.php?id={$_SESSION['id']}") ?>" href="profil.php?id=<?= $_SESSION['id'] ?>">Profil</a></li>
									<li><a class="dropdown-item" href="#">Another action</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item nav-link" href="logout.php">Déconnéxion</a></li>
								</ul>
							</li>
							<?php
						}else {
							?>
							<li class="nav-item pe-4">
								<a class="nav-link" href="login.php">Connexion</a>
							</li>
							<?php
						}
						?>
												
					</ul>
				</div>
			</div>
		</nav>