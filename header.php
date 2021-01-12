<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<!-- Font CSS -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;0,500;0,600;0,800;1,400&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div id="page" class="site">
		<header class="site-header">
			<div class="topbar">
				<div class="wrapper">
					<div class="inner">
						<div class="newsletter">
							<a href="#" target="blank">
								<i class="far fa-envelope"></i>
								<span>Newsletter</span>
							</a>
						</div>

						<div class="search">
							<a href="/search">
								<i class="fas fa-search"></i>
								<span>Search</span>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="logo wrapper">
				<?php the_custom_logo(); ?>
			</div>

			<div class="menu wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="inner">
							<div class="col-md-3 social-links">
								<a href="#" target="_blank">
									<i class="fab fa-facebook-f"></i>
								</a>
								<a href="#" target="_blank">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="#" target="_blank">
									<i class="fab fa-instagram"></i>
								</a>
							</div>

							<div class="col-md-6 main-menu">
								<ul>
									<li>
										<a href="">Explore</a>
									</li>
									<li>
										<a href="">About Us</a>
									</li>
									<li>
										<a href="">Contact</a>
									</li>
								</ul>
							</div>

							<div class="col-md-3 merchant-link">
								<i class="far fa-user"></i>
								<a href="/merchant-signup">Merchant Signup</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
