<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $judul; ?></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/javascript.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() . 'home/motor' ?>">Penjualan Motor</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link text-light" href="<?= base_url() . 'home/motor' ?>">Motor</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link text-light" href="<?= base_url() . 'home/cicil' ?>">Lama Cicilan</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="<?= base_url() . 'home/dp' ?>">Uang Muka</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="<?= base_url() . 'home/penjualan' ?>">Penjualan</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>