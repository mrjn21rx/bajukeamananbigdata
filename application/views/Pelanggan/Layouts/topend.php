<body>
	<!-- Topbar Start -->
	<div class="container-fluid">
		<div class="row bg-secondary py-2 px-xl-5">
			<div class="col-lg-6 d-none d-lg-block">
				<div class="d-inline-flex align-items-center">
					<a class="text-dark" href="">FAQs</a>
					<span class="text-muted px-2">|</span>
					<a class="text-dark" href="">Help</a>
					<span class="text-muted px-2">|</span>
					<a class="text-dark" href="">Support</a>
					<span class="text-muted px-2">|</span>
					<a class="text-dark" href="">Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a>
					</a>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-right">
				<div class="d-inline-flex align-items-center">
					<a class="text-dark px-2" href="">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a class="text-dark px-2" href="">
						<i class="fab fa-twitter"></i>
					</a>
					<a class="text-dark px-2" href="">
						<i class="fab fa-linkedin-in"></i>
					</a>
					<a class="text-dark px-2" href="">
						<i class="fab fa-instagram"></i>
					</a>
					<a class="text-dark pl-2" href="">
						<i class="fab fa-youtube"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="row align-items-center py-3 px-xl-5">
			<div class="col-lg-3 d-none d-lg-block">
				<a href="<?= base_url('pelanggan/katalog') ?>" class="text-decoration-none">
					<h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">R.J</span>PUMIRA</h1>
				</a>
			</div>
			<div class="col-lg-6 col-6 text-left">
				<form action="">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for products">
						<div class="input-group-append">
							<span class="input-group-text bg-transparent text-primary">
								<i class="fa fa-search"></i>
							</span>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-3 col-6 text-right">
				<a href="" class="btn border">
					<i class="fas fa-heart text-primary"></i>
					<span class="badge">0</span>
				</a>
				<?php
				$cart = $this->cart->contents();
				$qty = 0;
				foreach ($cart as $key => $value) {
					$qty = $value['qty'] + $qty;
				}
				?>
				<?php if ($this->session->userdata('id') != '') { ?>
					<a href="<?= base_url('Pelanggan/Katalog/cart') ?>" class="btn border">
						<i class="fas fa-shopping-cart text-primary"></i>
						<span class="badge"><?= $qty ?></span>
					</a>
				<?php }
				?>

			</div>
		</div>
	</div>
	<!-- Topbar End -->
