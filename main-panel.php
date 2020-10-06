<div class="main-panel">
	<div class="content" style="margin-top: 60px">
		<?php
			if (isset($_GET['p'])) {
				switch ($_GET['p']) {
					case 'search':
						include_once 'search.php';
						break;
					case 'profile':
						include_once 'profile.php';
						break;
					case 'fee':
						include_once 'fee.php';
						break;
					case 'receipt':
						include_once 'receipt.php';
						break;
					case 'message':
						include_once 'message.php';
						break;
					case 'announcement':
						include_once 'announcement.php';
						break;
					case 'financial-statement':
						include_once 'financial-statement.php';
						break;
					case 'statistic':
						include_once 'statistic.php';
						break;
					case 'tnc':
						include_once 'tnc.php';
						break;
					case 'member':
						include_once 'member.php';
						break;
					case 'settings':
						include_once 'settings.php';
						break;					
					default:
						include_once '404.php';
						break;
				}
			}else{
				include_once 'dashboard.php';
			}
		?>
	</div>
	<footer class="footer">
		<div class="container-fluid">
			<nav class="pull-left">
				<ul class="nav">
					<li class="nav-item">
					<li class="nav-item">
						<a class="nav-link" href="#">
							Cadangan / Laporan / Mohon Bantuan
						</a>
					</li>
				</ul>
			</nav>
			<div class="copyright ml-auto">
				2020 &copy; dibangunkan dengan <i class="fa fa-heart heart text-danger"></i> oleh <a href="https://www.khairat2u.com">KHAIRAT2U.COM</a>
			</div>				
		</div>
	</footer>
</div>