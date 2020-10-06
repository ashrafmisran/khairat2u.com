<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Senarai Ahli</h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="index.php">
					<i class="flaticon-home"></i>
				</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="#">Senarai Ahli</a>
			</li>
		</ul>
	</div>
	<div>
		<button class="mb-1 btn btn-primary">Tambah ahli</button>
		<button class="mb-1 btn btn-outline-secondary">Tambah ahli secara pukal</button>
	</div>
	<div class="card p-md-4">
		<table id="member-list" class="table">
			<thead>
				<tr>
					<th class="d-md-none d-sm-table-cell"># Ahli<br>Nama</th>
					<th class="d-none d-md-table-cell"># Ahli</th>
					<th class="d-none d-md-table-cell">Nama</th>
					<th class="d-none d-md-table-cell">Tindakan</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="d-md-none d-sm-table-cell">
						<div class="row">
							<div class="col-10">
								<b>MY1040820</b><br>Muhammad Ashraf bin Misran
							</div>
							<div class="col">
								<div class=" text-center">
									<span class="fas fa-eye text-primary"></span><br>
									<span class="fas fa-trash text-danger"></span>
								</div>
							</div>
						</div>						
					</td>
					<td class="d-none d-md-table-cell">MY1040820</td>
					<td class="d-none d-md-table-cell">Muhammad Ashraf bin Misran</td>
					<td class="d-none d-md-table-cell">
						<div class="btn-group">
							<button class="btn btn-sm btn-primary"><span class="fas fa-eye"></span></button>
							<button class="btn btn-sm btn-danger"><span class="fas fa-trash"></span></button>
						</div>
					</td>
				</tr>
				<tr>
					<td class="d-md-none d-sm-table-cell">
						<div class="row">
							<div class="col-10">
								<b>MY1040833</b><br>Mohamad Nasiruddin bin Ramli
							</div>
							<div class="col">
								<div class=" text-center">
									<span class="fas fa-eye text-primary"></span><br>
									<span class="fas fa-trash text-danger"></span>
								</div>
							</div>
						</div>						
					</td>
					<td class="d-none d-md-table-cell">MY1040833</td>
					<td class="d-none d-md-table-cell">Mohamad Nasiruddin bin Ramli</td>
					<td class="d-none d-md-table-cell">
						<div class="btn-group">
							<button class="btn btn-sm btn-primary"><span class="fas fa-eye"></span></button>
							<button class="btn btn-sm btn-danger"><span class="fas fa-trash"></span></button>
						</div>
					</td>
				</tr>
			</tbody>
		</table>	
	</div>	
</div>



<script>
	$('#member-list').DataTable();
</script>