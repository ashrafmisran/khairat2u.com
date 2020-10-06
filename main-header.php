<div class="main-header">
	<!-- Logo Header -->
	<div class="logo-header" data-background-color="dark">
		
		<a href="index.php" class="logo">
			<!-- <img src="img/logo-dark-bg.png" alt="navbar brand" class="navbar-brand" width="60%"> -->
			<span class="fab fa-envira text-success"></span> <span class="h3 text-white">khairat2u</span>
		</a>
		<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
				<i class="icon-menu"></i>
			</span>
		</button>
		<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
		<div class="nav-toggle">
			<button class="btn btn-toggle toggle-sidebar">
				<i class="icon-menu"></i>
			</button>
		</div>
	</div>
	<!-- End Logo Header -->

	<!-- Navbar Header -->
	<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark2">
		
		<div class="container-fluid">
			<div class="collapse" id="search-nav">
				<form class="navbar-left navbar-form nav-search mr-md-3" action="index.php?p=search" method="get">
					<div class="input-group">
						<div class="input-group-prepend">
							<button type="submit" class="btn btn-search pr-1">
								<i class="fa fa-search search-icon"></i>
							</button>
						</div>
						<input class="d-none" name="p" value="search">
						<input type="text" placeholder="Cari..." class="form-control" name="s" value="<?php if(isset($_GET['s'])) echo($_GET['s']); ?>">
					</div>
				</form>
			</div>
			<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
				<li class="nav-item toggle-nav-search hidden-caret">
					<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
						<i class="fa fa-search"></i>
					</a>
				</li>
				<li class="nav-item dropdown hidden-caret">
					<a class="nav-link bg-success" data-toggle="dropdown" href="#" aria-expanded="false">
						<i class="fas fa-phone"></i> <span class="h4">Kecemasan</span>
					</a>
					<div class="dropdown-menu quick-actions quick-actions-success animated fadeIn">
						<div class="quick-actions-header">
							<span class="title mb-1">Hubungi Pentadbir</span>
							<span class="subtitle op-8">Urusan Kematian</span>
						</div>
						<div class="quick-actions-scroll scrollbar-outer">
							<div class="quick-actions-items">
								<div class="row m-0">
									<a class="col-6 col-md-6 p-0" href="#">
										<div class="quick-actions-item">
											<i class="fas fa-phone"></i>
											<span class="text">Panggilan telefon</span>
										</div>
									</a>
									<a class="col-6 col-md-6 p-0" href="#">
										<div class="quick-actions-item">
											<i class="fab fa-whatsapp"></i>
											<span class="text">Whatsapp</span>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item dropdown hidden-caret">
					<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
						<div class="avatar-sm">
							<img src="img/dp.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
					</a>
					<ul class="dropdown-menu dropdown-user animated fadeIn">
						<div class="dropdown-user-scroll scrollbar-outer">
							<li>
								<div class="user-box">
									<div class="avatar-lg"><img src="img/dp.jpg" alt="image profile" class="avatar-img rounded"></div>
									<div class="u-text">
										<h4>ASHRAF MISRAN</h4>
										<p class="text-muted">ashrafmisran@gmail.com</p><a href="index.php?p=profile" class="btn btn-xs btn-secondary btn-sm">Papar profil</a>
									</div>
								</div>
							</li>
							<li>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.php?p=profile">Profil pengguna</a>
								<a class="dropdown-item" href="#">Tukar kata laluan</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout.php">Log keluar</a>
							</li>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<!-- End Navbar -->
</div>