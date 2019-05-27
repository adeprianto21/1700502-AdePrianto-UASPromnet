<body class="bg-secondary">
	<div class="container col-5 bg-light" style="margin-top: 150px; border-radius: 5px;">
		<h3 class="text-center pt-3"><strong>Login Retail</strong></h3>

		<form class="pt-3 pb-4 px-5" method="post" action="<?= base_url() . 'Login'; ?>">
			<div class="form-group">
				<label><strong>NIM</strong></label>
				<input type="text" class="form-control" name="nim" placeholder="Masukkan NIM">
				<?= form_error('nim', '<div class="text-danger mt-2">', '</div>'); ?>
			</div>
			<div class="form-group text-center">
				<button class="btn btn-secondary w-75 mt-2">Login</button>
			</div>
		</form>
	</div>
</body>