<div class="panel-header bg-danger-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Statistik</h2>
				<h5 class="text-white op-7 mb-2">Ringkasan data dan nombor berkaitan tabung khairat</h5>
			</div>
			<div class="ml-md-auto py-2 py-md-0">
				<a href="index.php?p=profile" class="btn btn-white btn-border btn-round mr-2">Kemaskini profil</a>
			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row mt--2">
		<div class="col-md-6">
			<div class="card full-height">
				<div class="card-body">
					<div class="card-title">Statistik keseluruhan</div>
					<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
						<div class="px-2 pb-2 pb-md-0 text-center">
							<div id="circles-3"></div>
							<h6 class="fw-bold mt-3 mb-0">Kematian bulan ini</h6>
						</div>
						<div class="px-2 pb-2 pb-md-0 text-center">
							<div id="circles-2"></div>
							<h6 class="fw-bold mt-3 mb-0">Bilangan ahli semasa</h6>
						</div>
						<div class="px-2 pb-2 pb-md-0 text-center">
							<div id="circles-1"></div>
							<h6 class="fw-bold mt-3 mb-0">Program</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card full-height">
				<div class="card-body">
					<div class="card-title">Kematian mengikut bulan</div>
					<div class="row py-3">
						<div class="col-md-4 d-flex flex-column justify-content-around">
							<div>
								<h6 class="fw-bold text-uppercase text-success op-8">Minggu ini</h6>
								<h3 class="fw-bold">13 jam</h3>
							</div>
							<div>
								<h6 class="fw-bold text-uppercase text-danger op-8">Bulan ini</h6>
								<h3 class="fw-bold">54 jam</h3>
							</div>
						</div>
						<div class="col-md-8">
							<div id="chart-container">
								<canvas id="totalIncomeChart"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Senarai kematian</div>
						<div class="card-tools">
							<a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
								<span class="btn-label">
									<i class="fa fa-pencil"></i>
								</span>
								Muat turun
							</a>
							<a href="#" class="btn btn-info btn-border btn-round btn-sm">
								<span class="btn-label">
									<i class="fa fa-print"></i>
								</span>
								Cetak
							</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>#</th>
								<th>Mesyuarat / Aktiviti</th>
								<th>Anjuran</th>
								<th>Tarikh</th>
								<th>Tempat</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>1.</th>
								<td>Himpunan Jentera PRU N9</td>
								<td>Jabatan Pilihanraya Negeri</td>
								<td>30 Oktober 2020</td>
								<td>KOMPAS, Kampung Ismail</td>
								<td><span class="badge badge-warning"><span class="fas fa-calendar-check"></span> Dijangka hadir</span></td>
							</tr>
							<tr>
								<th>2.</th>
								<td>Permukiman DPPNS</td>
								<td>Dewan Pemuda PAS Negeri Sembilan</td>
								<td>24-25 Oktober 2020</td>
								<td>Kem D'Agroloka, Jelebu</td>
								<td><span class="badge badge-warning"><span class="fas fa-calendar-times"></span> Dijangka tidak hadir</span></td>
							</tr>
							<tr>
								<th>3.</th>
								<td>Mesyuarat JK Harian DPPNS</td>
								<td>Dewan Pemuda PAS Negeri Sembilan</td>
								<td>1 Oktober 2020</td>
								<td>Online</td>
								<td><span class="badge badge-count"><span class="fas fa-question"></span> Belum respon</span></td>
							</tr>
							<tr>
								<th>4.</th>
								<td>Mesyuarat BPPNS</td>
								<td>Badan Perhubungan PAS Negeri Sembilan</td>
								<td>26 September 2020</td>
								<td>KOMPAS, Kampung Ismail</td>
								<td><span class="badge badge-success"><span class="fas fa-check-double"></span> Hadir</span></td>
							</tr>
							<tr>
								<th>5.</th>
								<td>Munaqasyah Ucaptama KP DPPNS</td>
								<td>Dewan Pemuda PAS Kawasan Seremban</td>
								<td>20 September 2020</td>
								<td>Markaz PAS Kawasan Seremban</td>
								<td><span class="badge badge-danger"><span class="fas fa-times"></span> Tidak hadir</span></td>
							</tr>
							<tr>
								<th>6.</th>
								<td>Usrah Pemuda Nilai</td>
								<td>UKJ Nilai, Dewan Pemuda PAS Kawasan Seremban</td>
								<td>9 September 2020</td>
								<td>SRITI Ar-Rayyan, Nilai</td>
								<td><span class="badge badge-danger"><span class="fas fa-ban"></span> Dibatalkan</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Mesej / Pertanyaan / Idea</div>
						<div class="card-tools">
							<ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link" id="pills-today" data-toggle="pill" href="#pills-today" role="tab" aria-selected="true">Today</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" id="pills-week" data-toggle="pill" href="#pills-week" role="tab" aria-selected="false">Week</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-month" data-toggle="pill" href="#pills-month" role="tab" aria-selected="false">Month</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="d-flex">
						<div class="avatar avatar-online">
							<span class="avatar-title rounded-circle border border-white bg-info">J</span>
						</div>
						<div class="flex-1 ml-3 pt-1">
							<h6 class="text-uppercase fw-bold mb-1">Joko Subianto <span class="text-warning pl-3">pending</span></h6>
							<span class="text-muted">I am facing some trouble with my viewport. When i start my</span>
						</div>
						<div class="float-right pt-1">
							<small class="text-muted">8:40 PM</small>
						</div>
					</div>
					<div class="separator-dashed"></div>
					<div class="d-flex">
						<div class="avatar avatar-offline">
							<span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
						</div>
						<div class="flex-1 ml-3 pt-1">
							<h6 class="text-uppercase fw-bold mb-1">Prabowo Widodo <span class="text-success pl-3">open</span></h6>
							<span class="text-muted">I have some query regarding the license issue.</span>
						</div>
						<div class="float-right pt-1">
							<small class="text-muted">1 Day Ago</small>
						</div>
					</div>
					<div class="separator-dashed"></div>
					<div class="d-flex">
						<div class="avatar avatar-away">
							<span class="avatar-title rounded-circle border border-white bg-danger">L</span>
						</div>
						<div class="flex-1 ml-3 pt-1">
							<h6 class="text-uppercase fw-bold mb-1">Lee Chong Wei <span class="text-muted pl-3">closed</span></h6>
							<span class="text-muted">Is there any update plan for RTL version near future?</span>
						</div>
						<div class="float-right pt-1">
							<small class="text-muted">2 Days Ago</small>
						</div>
					</div>
					<div class="separator-dashed"></div>
					<div class="d-flex">
						<div class="avatar avatar-offline">
							<span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
						</div>
						<div class="flex-1 ml-3 pt-1">
							<h6 class="text-uppercase fw-bold mb-1">Peter Parker <span class="text-success pl-3">open</span></h6>
							<span class="text-muted">I have some query regarding the license issue.</span>
						</div>
						<div class="float-right pt-1">
							<small class="text-muted">2 Day Ago</small>
						</div>
					</div>
					<div class="separator-dashed"></div>
					<div class="d-flex">
						<div class="avatar avatar-away">
							<span class="avatar-title rounded-circle border border-white bg-danger">L</span>
						</div>
						<div class="flex-1 ml-3 pt-1">
							<h6 class="text-uppercase fw-bold mb-1">Logan Paul <span class="text-muted pl-3">closed</span></h6>
							<span class="text-muted">Is there any update plan for RTL version near future?</span>
						</div>
						<div class="float-right pt-1">
							<small class="text-muted">2 Days Ago</small>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-title">Log Aktiviti</div>
				</div>
				<div class="card-body">
					<ol class="activity-feed">
						<li class="feed-item feed-item-secondary">
							<time class="date" datetime="9-25">Sep 25</time>
							<span class="text">Responded to need <a href="#">"Volunteer opportunity"</a></span>
						</li>
						<li class="feed-item feed-item-success">
							<time class="date" datetime="9-24">Sep 24</time>
							<span class="text">Added an interest <a href="#">"Volunteer Activities"</a></span>
						</li>
						<li class="feed-item feed-item-info">
							<time class="date" datetime="9-23">Sep 23</time>
							<span class="text">Joined the group <a href="single-group.php">"Boardsmanship Forum"</a></span>
						</li>
						<li class="feed-item feed-item-warning">
							<time class="date" datetime="9-21">Sep 21</time>
							<span class="text">Responded to need <a href="#">"In-Kind Opportunity"</a></span>
						</li>
						<li class="feed-item feed-item-danger">
							<time class="date" datetime="9-18">Sep 18</time>
							<span class="text">Created need <a href="#">"Volunteer Opportunity"</a></span>
						</li>
						<li class="feed-item">
							<time class="date" datetime="9-17">Sep 17</time>
							<span class="text">Attending the event <a href="single-event.php">"Some New Event"</a></span>
						</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>