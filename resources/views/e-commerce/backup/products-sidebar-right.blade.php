<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en-US"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9 ie-lt10 no-js" lang="en-US"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en-US" dir="ltr"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sham - Creative Shopping Theme</title>

	<link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('/assets/dist/images/favicon/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('/assets/dist/images/favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('/assets/dist/images/favicon/favicon-16x16.png') }}">
	<meta name="theme-color" content="#9ed4d6">

	<!-- Load Fonts -->
	<link rel="stylesheet" type="text/css" media="all"
	      href="http://fonts.googleapis.com/css?family=Inconsolata:300,400,500,700|Unica+One:300,400,500,700">
	<!-- All theme style -->
	<link rel="stylesheet" type="text/css" media="all" href="{{ URL::asset('/assets/dist/css/app.css') }}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>
<body>

<div class="nav-container fixed-top nav-sticky">
	<nav class="sub-navbar bg-white d-flex">
		<div class="d-flex align-items-center mr-auto">
			<div class="list-select">
				<div class="inner-select">
					<div class="selected pt-1">
						<img src="{{ URL::asset('/assets/dist/images/flags/uk.svg') }}" width="18" alt="">
					</div>
					<ul>
						<li>
							<a href="index.html">
								<img src="{{ URL::asset('/assets/dist/images/flags/uk.svg') }}" width="18" alt="">
							</a>
						</li>
						<li>
							<a href="rtl/">
								<img src="{{ URL::asset('/assets/dist/images/flags/sa.svg') }}" width="18" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="list-select">
				<div class="inner-select">
					<div class="selected"><i class="bx bx-dollar"></i></div>
					<ul>
						<li><a href="#!"><i class="bx bx-dollar"></i></a></li>
						<li><a href="#!"><i class="bx bx-bitcoin"></i></a></li>
						<li><a href="#!"><i class="bx bx-euro"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<ul class="nav list-inline ml-auto">
			<li>
				<a href="#!" class="px-2">My account</a>
			</li>
			<li>
				<a href="wishlist.html" class="px-2">My Wishlist</a>
			</li>
		</ul>
	</nav><!-- /.sub-navbar -->

	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="{{ URL::asset('/assets/dist/images/logo.png') }}" alt="Sham Theme">
			</a>

			<ul class="nav navbar-icons ml-auto order-lg-2">
				<li class="nav-item mr-3 shopping-cart">
					<a href="#!" class="li-icon" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
						<i class="bx bx-shopping-bag"></i>
						<span class="badge badge-secondary rounded-circle">4</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right border-0 shadow">
						<ul class="dropdown-wrap position-relative" data-slimscroll="true">
							<li class="d-flex">
								<a href="product.html">
									<img src="{{ URL::asset('/assets/dist/images/products/2.jpg') }}" class="img-fluid product-img" alt="">
								</a>
								<div class="ml-3 product-details">
									<p class="product-title font-weight-bold text-uppercase mb-2">
										<a href="product.html">Bag Dark Beige</a>
									</p>
									<p class="product-price text-muted">
										<ins>
											<span class="amount">$66.50</span>
										</ins>
									</p>
								</div>
							</li>
							<li class="d-flex">
								<a href="product.html">
									<img src="{{ URL::asset('/assets/dist/images/products/24.jpg') }}" class="img-fluid product-img" alt="">
								</a>
								<div class="ml-3 product-details">
									<p class="product-title font-weight-bold text-uppercase mb-2">
										<a href="product.html">Shoes Maroon</a>
									</p>
									<div class="product-price text-muted">$80.99</div>
								</div>
							</li>
							<li class="d-flex">
								<a href="product.html">
									<img src="{{ URL::asset('/assets/dist/images/products/3.jpg') }}" class="img-fluid product-img" alt="">
								</a>
								<div class="ml-3 product-details">
									<p class="product-title font-weight-bold text-uppercase mb-2">
										<a href="product.html">Unisex Cap</a>
									</p>
									<div class="product-price text-muted">$99.99</div>
								</div>
							</li>
							<li class="d-flex">
								<a href="product.html">
									<img src="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" class="img-fluid product-img" alt="">
								</a>
								<div class="ml-3 product-details">
									<p class="product-title font-weight-bold text-uppercase mb-2">
										<a href="product.html">Twill Silk Scarf</a>
									</p>
									<div class="product-price text-muted">$49.99</div>
								</div>
							</li>

							<li class="dropdown-footer p-0 text-center text-uppercase font-weight-bold">
								<a href="cart.html" class="p-3 d-block">View Cart</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a href="#!" class="li-icon" id="trigger-overlay"><i class="bx bx-search"></i></a>
				</li>
			</ul>

			<button
					class="navbar-toggler ml-0 ml-sm-3 order-lg-3"
					type="button"
					data-toggle="collapse"
					data-target="#navbar"
					aria-controls="navbar"
					aria-expanded="false"
					aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navbar" class="collapse navbar-collapse mr-auto">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="index.html" role="button"
						   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
						>
							Home
						</a>
						<ul class="dropdown-menu">
							<li class="dropdown-item active"><a class="nav-link" href="#">Default</a></li>
							<li class="dropdown-item"><a class="nav-link" href="{{ route('index2') }}">Default Slider</a></li>
							<li class="dropdown-item"><a class="nav-link" href="{{ route('index3') }}">Overlay Products</a></li>
							<li class="dropdown-item"><a class="nav-link" href="{{ route('index4') }}">Instagram section</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button"
						   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Shop
						</a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="{{ route('products') }}">Full Width Shop</a></li>
							<li><a class="nav-link" href="{{ route('products-with-filter') }}">Shop With Filter</a></li>
							<li><a class="nav-link" href="{{ route('products-sidebar-left') }}">Sidebar Left</a></li>
							<li><a class="nav-link" href="{{ route('products-sidebar-right') }}">Sidebar Right</a></li>
							<li><a class="nav-link" href="product.html">Simple Product</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button"
						   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							eCommerce Pages
						</a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="wishlist.html">Wishlist</a></li>
							<li><a class="nav-link" href="cart.html">Cart</a></li>
							<li><a class="nav-link" href="checkout.html">Checkout</a></li>
							<li><a class="nav-link" href="order-received.html">Order Received</a></li>
							<li><a class="nav-link" href="order-tracking.html">Order Tracking</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button"
						   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pages
						</a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="page.html">Page Default</a></li>
							<li><a class="nav-link" href="login-register.html">Login / Register</a></li>
							<li><a class="nav-link" href="404.html">Not Found (404)</a></li>
							<li><a class="nav-link" href="faqs.html">FAQ'S</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container -->
	</nav>
</div><!-- /.nav-container -->

<div class="swiper-slider">
	<!-- Slider main container -->
	<div class="swiper-container" dir="ltr">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper text-center">
			<!-- Slides -->
			<div class="swiper-slide">
				<div class="d-flex align-items-center">
					<img src="{{ URL::asset('/assets/dist/images/slides/01.jpg') }}" class="img-fluid" alt="">
				</div>
			</div>
			<div class="swiper-slide">
				<div class="d-flex align-items-center">
					<img src="{{ URL::asset('/assets/dist/images/slides/02.jpg') }}" class="img-fluid" alt="">
				</div>
			</div>
			<div class="swiper-slide">
				<div class="d-flex align-items-center">
					<img src="{{ URL::asset('/assets/dist/images/slides/03.jpg') }}" class="img-fluid" alt="">
				</div>
			</div>
		</div>

		<!-- If we need pagination -->
		<div class="swiper-pagination swiper-pagination-white"></div>
		<!-- If we need navigation buttons -->
		<div class="d-none d-md-block"><!-- Remove this "div" to show the navigation on mobile -->
			<div class="swiper-button-prev swiper-button-white"><i class="bx bx-chevron-left"></i></div>
			<div class="swiper-button-next swiper-button-white"><i class="bx bx-chevron-right"></i></div>
		</div>
	</div>
</div><!-- /.swiper-slider -->

<section class="section products-grid second-style">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="masonry row">
					<div class="product col-lg-4 col-md-6" data-product-id="1">
						<div class="inner-product">
							<span class="onsale">Sale!</span>
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/2.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
											<a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="View">
											<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
										</span>
								</div>
							</div>
						</div>
						<h3 class="product-title"><a href="#!">Bag Dark Beige</a></h3>
						<div class="star-rating">
							<span style="width:90%"></span>
						</div>
						<p class="product-price">
							<ins>
								<span class="amount">$66.50</span>
							</ins>
							<del>
								<span class="amount">$150.00</span>
							</del>
						</p>
					</div><!-- /.product -->

					<div class="product col-lg-4 col-md-6" data-product-id="1">
						<div class="inner-product">
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/24.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
											<a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="View">
											<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
										</span>
								</div>
							</div>
						</div>
						<h3 class="product-title"><a href="#!">Shoes Maroon</a></h3>
						<div class="star-rating">
							<span style="width:20%"></span>
						</div>
						<p class="product-price">
							<ins>
								<span class="amount">$80.99</span>
							</ins>
						</p>
					</div><!-- /.product -->

					<div class="product col-lg-4 col-md-6" data-product-id="1">
						<div class="inner-product">
							<span class="onsale new">New!</span>
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/3.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
											<a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="View">
											<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
										</span>
								</div>
							</div>
						</div>
						<h3 class="product-title"><a href="#!">Unisex Cap</a></h3>
						<div class="star-rating">
							<span style="width:65%"></span>
						</div>
						<p class="product-price">
							<ins>
								<span class="amount">$99.99</span>
							</ins>
						</p>
					</div><!-- /.product -->

					<div class="product col-lg-4 col-md-6" data-product-id="1">
						<div class="inner-product">
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/4.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
											<a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="View">
											<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
										</span>
								</div>
							</div>
						</div>
						<h3 class="product-title"><a href="#!">Hands winter</a></h3>
						<div class="star-rating">
							<span style="width:50%"></span>
						</div>
						<p class="product-price">
							<ins>
								<span class="amount">$15.00</span>
							</ins>
						</p>
					</div><!-- /.product -->

					<div class="product col-lg-4 col-md-6" data-product-id="1">
						<div class="inner-product">
							<span class="onsale hot">Hot!</span>
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/1.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
											<a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="View">
											<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
										</span>
								</div>
							</div>
						</div>
						<h3 class="product-title"><a href="#!">Patterned Scarf</a></h3>
						<div class="star-rating">
							<span style="width:70%"></span>
						</div>
						<p class="product-price">
							<ins>
								<span class="amount">$39.99</span>
							</ins>
						</p>
					</div><!-- /.product -->

					<div class="product col-lg-4 col-md-6" data-product-id="1">
						<div class="inner-product">
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
											<a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="View">
											<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
										</span>
								</div>
							</div>
						</div>
						<h3 class="product-title"><a href="#!">Twill Silk Scarf</a></h3>
						<div class="star-rating">
							<span style="width:90%"></span>
						</div>
						<p class="product-price">
							<ins>
								<span class="amount">$49.99</span>
							</ins>
						</p>
					</div><!-- /.product -->

					<div class="product col-lg-4 col-md-6" data-product-id="1">
						<div class="inner-product">
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/20.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
											<a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="View">
											<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
										</span>
								</div>
							</div>
						</div>
						<h3 class="product-title"><a href="#!">Men Cap</a></h3>
						<div class="star-rating">
							<span style="width:90%"></span>
						</div>
						<p class="product-price">
							<ins>
								<span class="amount">$25.00</span>
							</ins>
						</p>
					</div><!-- /.product -->

					<div class="product col-lg-4 col-md-6" data-product-id="1">
						<div class="inner-product">
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/22.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
											<a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="View">
											<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
										</span>
								</div>
							</div>
						</div>
						<h3 class="product-title"><a href="#!">Bag Maroon</a></h3>
						<div class="star-rating">
							<span style="width:90%"></span>
						</div>
						<p class="product-price">
							<ins>
								<span class="amount">$75.99</span>
							</ins>
						</p>
					</div><!-- /.product -->

					<div class="product col-lg-4 col-md-6" data-product-id="1">
						<div class="inner-product">
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/23.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
											<a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
										</span>
									<span data-toggle="tooltip" data-placement="top" title="View">
											<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
										</span>
								</div>
							</div>
						</div>
						<h3 class="product-title"><a href="#!">Glasses Patterned</a></h3>
						<div class="star-rating">
							<span style="width:100%"></span>
						</div>
						<p class="product-price">
							<ins>
								<span class="amount">$149.99</span>
							</ins>
						</p>
					</div><!-- /.product -->
				</div><!-- /.masonry -->

				<div class="clearfix text-center">
					<a href="#!" class="btn btn-primary">Show More</a>
				</div>
			</div>

			<div class="col-md-3">
				<div class="shop-sidebar shop-sidebar-left">
					<div class="widgets">
						<div class="widget widget-search">
							<h3 class="widget-title">What's on your mind<span class="typed-cursor">?</span></h3>
							<form action="#!" method="GET" class="inputs-border inputs-bg">
								<input type="text" class="form-control" placeholder="Search Products..">
							</form>
						</div><!-- /.widget-search -->

						<div class="widget widget-price-filter">
							<h3 class="widget-title">Filter By Price</h3>
							<div class="price-slider-wrapper">
								<div id="filter-slider" class="filter-slider" data-min="10" data-max="1000" data-values="150,700"></div>
							</div>
							<form action="">
								<div id="amount-slider">
									<strong>Price: </strong><span>$150 — $700</span>
								</div>
								<input type="hidden" id="price" value="150,700">
								<button type="button" class="btn btn-primary">Filter</button>
							</form>
						</div><!-- /.widget-price-filter -->

						<div class="widget widget-sizes">
							<h3 class="widget-title">Sizes</h3>
							<ul>
								<li><a href="#!">XS</a></li>
								<li><a href="#!">S</a></li>
								<li><a href="#!">M</a></li>
								<li><a href="#!">L</a></li>
								<li><a href="#!">XL</a></li>
							</ul>
						</div><!-- /.widget-sizes -->

						<div class="widget widget-categories">
							<h3 class="widget-title">Categories</h3>
							<ul>
								<li>
									<a href="#!">Chairs <span class="count">(6)</span></a>
								</li>
								<li>
									<a href="#!">Tables <span class="count">(7)</span></a>
									<ul class="children">
										<li>
											<a href="#!">Side Tables <span class="count">(2)</span></a>
										</li>
										<li>
											<a href="#!">Lunch Tables <span class="count">(5)</span></a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#!">Couches <span class="count">(3)</span></a>
								</li>
								<li>
									<a href="#!">Lighting <span class="count">(4)</span></a>
								</li>
							</ul>
						</div><!-- /.widget-categories -->

						<div class="widget widget-top-seller">
							<h3 class="widget-title">Top Seller</h3>
							<ul>
								<li class="clearfix">
									<div class="media">
										<div class="media-left float-left">
											<a href="#">
												<img class="media-object img-fluid" src="{{ URL::asset('/assets/dist/images/products/20.jpg') }}" alt="">
											</a>
										</div>
										<div class="media-body">
											<h4 class="media-heading"><a href="product.html">Men Cap</a></h4>
											<div class="rating">
												<div class="star-rating">
													<span style="width:90%"></span>
												</div>
											</div>
											<p class="price">
												<del>
													<span class="amount">$200.00</span>
												</del>
												<ins>
													<span class="amount">$450.00</span>
												</ins>
											</p>
										</div>
									</div>
								</li>

								<li class="clearfix">
									<div class="media">
										<div class="media-left float-left">
											<a href="#">
												<img class="media-object img-fluid" src="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" alt="">
											</a>
										</div>
										<div class="media-body">
											<h4 class="media-heading"><a href="product.html">Twill Silk Scarf</a></h4>
											<div class="rating">
												<div class="star-rating">
													<span style="width:100%"></span>
												</div>
											</div>
											<p class="price">
												<ins>
													<span class="amount">$90.00</span>
												</ins>
											</p>
										</div>
									</div>
								</li>

								<li class="clearfix">
									<div class="media">
										<div class="media-left float-left">
											<a href="#">
												<img class="media-object img-fluid" src="{{ URL::asset('/assets/dist/images/products/23.jpg') }}" alt="">
											</a>
										</div>
										<div class="media-body">
											<h4 class="media-heading"><a href="product.html">Glasses Patterned</a></h4>
											<div class="rating">
												<div class="star-rating">
														<span style="width:99%">
													</span></div>
											</div>
											<p class="price">
												<del>
													<span class="amount">$25.00</span>
												</del>
												<ins>
													<span class="amount">$99.00</span>
												</ins>
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div><!-- /.widget-top-seller -->

						<div class="widget widget-instagram">
							<h3 class="widget-title">Instagram</h3>
							<ul class="row">
								<li class="col-sm-4">
									<a href="#!">
										<img src="{{ URL::asset('/assets/dist/images/products/23.jpg') }}" class="img-fluid" alt="">
									</a>
								</li>
								<li class="col-sm-4">
									<a href="#!">
										<img src="{{ URL::asset('/assets/dist/images/products/20.jpg') }}" class="img-fluid" alt="">
									</a>
								</li>
								<li class="col-sm-4">
									<a href="#!">
										<img src="{{ URL::asset('/assets/dist/images/products/18.jpg') }}" class="img-fluid" alt="">
									</a>
								</li>
								<li class="col-sm-4">
									<a href="#!">
										<img src="{{ URL::asset('/assets/dist/images/products/19.jpg') }}" class="img-fluid" alt="">
									</a>
								</li>
								<li class="col-sm-4">
									<a href="#!">
										<img src="{{ URL::asset('/assets/dist/images/products/24.jpg') }}" class="img-fluid" alt="">
									</a>
								</li>
								<li class="col-sm-4">
									<a href="#!">
										<img src="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" class="img-fluid" alt="">
									</a>
								</li>
							</ul>
						</div><!-- /.widget-instagram -->
					</div><!-- /.widgets -->
				</div><!-- /.shop-sidebar -->
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.products-grid -->

<footer class="footer">
	<div class="container">
		<div class="widgets">
			<div class="row">
				<div class="col-lg-3 col-md-6 widget widget-about">
					<h3 class="widget-title">Sham</h3>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					</p>
				</div><!-- ./widget -->
				<div class="col-lg-3 col-md-6 widget widget-links">
					<h3 class="widget-title">My Account</h3>
					<div class="row">
						<ul class="list-unstyled col-6">
							<li><a href="#!" class="effect">My Account</a></li>
							<li><a href="#!" class="effect">My Order</a></li>
							<li><a href="#!" class="effect">My Wiseliest</a></li>
							<li><a href="#!" class="effect">My Profile</a></li>
							<li><a href="#!" class="effect">My Address</a></li>
							<li><a href="#!" class="effect">My Products</a></li>
						</ul>
						<ul class="list-unstyled col-6">
							<li><a href="#!" class="effect">About Us</a></li>
							<li><a href="#!" class="effect">Contact</a></li>
							<li><a href="#!" class="effect">Payment</a></li>
							<li><a href="#!" class="effect">Blog</a></li>
							<li><a href="#!" class="effect">FAQ's</a></li>
							<li><a href="#!" class="effect">Order</a></li>
						</ul>
					</div>
				</div><!-- ./widget -->
				<div class="col-lg-3 col-md-6 widget widget-instagram">
					<h3 class="widget-title">Instagram</h3>
					<ul class="row">
						<li class="col-4">
							<a href="#!">
								<img src="{{ URL::asset('/assets/dist/images/products/23.jpg') }}" class="img-fluid" alt="">
							</a>
						</li>
						<li class="col-4">
							<a href="#!">
								<img src="{{ URL::asset('/assets/dist/images/products/20.jpg') }}" class="img-fluid" alt="">
							</a>
						</li>
						<li class="col-4">
							<a href="#!">
								<img src="{{ URL::asset('/assets/dist/images/products/18.jpg') }}" class="img-fluid" alt="">
							</a>
						</li>
						<li class="col-4">
							<a href="#!">
								<img src="{{ URL::asset('/assets/dist/images/products/19.jpg') }}" class="img-fluid" alt="">
							</a>
						</li>
						<li class="col-4">
							<a href="#!">
								<img src="{{ URL::asset('/assets/dist/images/products/24.jpg') }}" class="img-fluid" alt="">
							</a>
						</li>
						<li class="col-4">
							<a href="#!">
								<img src="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" class="img-fluid" alt="">
							</a>
						</li>
					</ul>
				</div><!-- /.widget -->
				<div class="col-lg-3 col-md-6 widget widget-newsletter">
					<h3 class="widget-title">Join our Newsletter</h3>
					<form action="#!" method="POST" class="inputs-border clearfix">
						<div class="form-group">
							<input type="email" name="email" placeholder="Your Email" class="form-control" autocomplete="off">
							<button type="submit" class="btn btn-primary">
								<i class="bx bx-right-arrow-alt"></i>
							</button>
						</div>
					</form>
					<ul class="social">
						<li><a href="#!" target="_blank"><i class="bx bxl-facebook"></i></a></li>
						<li><a href="#!" target="_blank"><i class="bx bxl-twitter"></i></a></li>
						<li><a href="#!" target="_blank"><i class="bx bxl-instagram"></i></a></li>
						<li><a href="#!" target="_blank"><i class="bx bxl-snapchat"></i></a></li>
					</ul>
				</div><!-- ./widget -->
			</div><!-- /.row -->
		</div><!-- /.widgets -->
	</div><!-- /.container -->
	<div class="copyright text-center">
		<p>
			© Copyright 2016-2020. All Rights Reserved.
			<br>
			Created by
			<a href="https://hussam3bd.com" class="effect">
				Hussam Abd
			</a>
		</p>
	</div>
</footer><!-- /.footer -->

<!-- open/close -->
<div class="overlay overlay-simplegenie">
	<i class="overlay-close bx bx-x"></i>
	<div class="container">
		<div class="row text-center position-relative">
			<div class="col-lg-7 m-auto col-height-center search-form">
				<form action="#!" method="POST" class="inputs-bg" id="searchform">
					<label>
						<strong>Type a sentence or word you want to search for, And press Enter.</strong>
						<input type="text" name="q" class="form-control" placeholder="Search..">
					</label>
				</form>
			</div>
		</div>
	</div>
</div><!-- /.overlay -->

<!-- Go to top -->
<a href="#" class="go-to-top">
	<i class="bx bx-chevrons-down"></i>
</a>

<!-- All Theme Scripts -->
<script type="text/javascript" src="{{ URL::asset('/assets/dist/js/app.js') }}"></script>
</body>
</html>