<div class="py-md-2 py-2"></div>
<div class="py-md-4"></div>
<div class="col-md-6 offset-md-3">
	<div class="card">
		<div class="card-header">
			<h5 class="card-title text-center">Daftar Pengguna</h5>
		</div>
		<div class="card-body">
			<form id="login-form" action="control-register.php" method="post">
				<div id="fullname-field" class="form-group">
					<label for="fullname">Nama penuh</label>
					<input id="fullname" class="form-control" type="text" name="fullname" autofocus>
				</div>
				<div id="no-ahli-field" class="form-group">
					<label for="no-ahli">No. ahli PAS</label>
					<input id="no-ahli" class="form-control" type="text" name="no-ahli">
				</div>
				<div id="mykad-field" class="form-group">
					<label for="mykad">No. MyKAD</label>
					<input id="mykad" class="form-control" type="text" name="mykad">
				</div>
				<div id="kawasan-field" class="form-group">
					<label for="kawasan">Kawasan keahlian</label>
					<select id="kawasan" class="form-control" type="text" name="kawasan">
						<option value="126">Jelebu</option>
						<option value="127">Jempol</option>
						<option value="128">Seremban</option>
						<option value="129">Kuala Pilah</option>
						<option value="130">Rasah</option>
						<option value="131">Rembau</option>
						<option value="132">Port Dickson</option>
						<option value="133">Tampin</option>
					</select>
				</div>
				<div id="email-field" class="form-group">
					<label for="email">Emel</label>
					<input id="email" class="form-control" type="email" name="email">
				</div>
				<div id="password-field" class="form-group">
					<label for="password">Cipta kata laluan</label>
					<input id="password" class="form-control" type="password" name="password">
				</div>
				<div id="repassword-field" class="form-group">
					<label for="repassword">Taip semula kata laluan</label>
					<input id="repassword" class="form-control" type="password" name="repassword">
				</div>
				<div class="text-center mt-2">
					<button type="submit" class="btn btn-primary">Daftar</button>
				</div>
			</form>
			<div class="mt-4 text-center">
				<a href="index.php" class="btn btn-light">Log masuk</a>
				<a href="index.php?p=forgot-password" class="btn btn-light">Lupa kata laluan</a>
				<a href="index.php?p=faq" class="btn btn-light">Soalan lazim</a>
			</div>
		</div>
		<div class="card-footer">
			<div class="text-center">Dibangunkan oleh <b><span class="fas fa-atom"></span> Jabatan IT PAS Negeri Sembilan</b></div>
		</div>
	</div>	
</div>
