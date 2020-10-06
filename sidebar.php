	<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">

					<!-- Start menu -->				
					<ul class="nav nav-primary">
						<li id="link-dashboard" class="nav-item">
							<a href="index.php">
								<i class="fas fa-tachometer-alt"></i>
								<p>Papan utama</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Ahli</h4>
						</li>
						<li id="link-fee" class="nav-item">
							<a href="index.php?p=fee">
								<i class="fas fa-donate"></i>
								<p>Yuran</p>
							</a>
						</li>
						<li id="link-receipt" class="nav-item">
							<a href="index.php?p=receipt">
								<i class="fas fa-receipt"></i>
								<p>Resit pembayaran</p>
							</a>
						</li>
						<li id="link-message" class="nav-item">
							<a href="index.php?p=message">
								<i class="fas fa-envelope"></i>
								<p>Mesej</p>
								<span class="badge badge-danger">4</span>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Tabung</h4>
						</li>
						<li id="link-announcement" class="nav-item">
							<a href="index.php?p=announcement">
								<i class="fas fa-broadcast-tower"></i>
								<p>Pengumuman</p>
								<span class="badge badge-danger">4</span>
							</a>
						</li>
						<li id="link-financial-statement" class="nav-item">
							<a href="index.php?p=financial-statement">
								<i class="fas fa-hand-holding-usd"></i>
								<p>Laporan Kewangan</p>
							</a>
						</li>
						<li id="link-statistic" class="nav-item">
							<a href="index.php?p=statistic">
								<i class="fas fa-chart-area"></i>
								<p>Statistik</p>
							</a>
						</li>
						<li id="link-tnc" class="nav-item">
							<a href="index.php?p=tnc">
								<i class="fas fa-file-signature"></i>
								<p>Terma dan Syarat</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Pentadbir</h4>
						</li>
						<li id="link-member" class="nav-item">
							<a href="index.php?p=member">
								<i class="fas fa-users"></i>
								<p>Ahli Tabung Khairat</p>
							</a>
						</li>
						<li id="link-settings" class="nav-item">
							<a href="index.php?p=settings">
								<i class="fas fa-cog"></i>
								<p>Tetapan tabung</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->



		<script>
			var getUrlParameter = function getUrlParameter(sParam) {
			    var sPageURL = window.location.search.substring(1),
			        sURLVariables = sPageURL.split('&'),
			        sParameterName,
			        i;

			    for (i = 0; i < sURLVariables.length; i++) {
			        sParameterName = sURLVariables[i].split('=');

			        if (sParameterName[0] === sParam) {
			            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
			        }
			    }
			};

			p = getUrlParameter('p')

			if (typeof p == 'undefined'){p='dashboard'}


			$('#link-'+p).addClass('active')
		</script>