<?php
    require_once __DIR__.'/model/DataBase.php';
    require_once __DIR__.'/model/genre.php';
    require_once __DIR__.'/model/author.php';
	require_once __DIR__.'/model/book.php';
	require_once __DIR__.'/Controller/HomeController.php';
	require_once __DIR__.'/Controller/CommentController.php';
	$books = book::all();
    $genres = Genre::all();
    $authors = Author::all();
	$pb = book::popular();
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<title>BookStore</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="view/interface/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="view/interface/icomoon/icomoon.css">
	<link rel="stylesheet" type="text/css" href="view/interface/css/vendor.css">
	<link rel="stylesheet" type="text/css" href="view/interface/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

	<div id="header-wrap">

		<div class="top-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div class="social-links">
							<ul>
								<li>
									<a href="#"><i class="icon icon-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-youtube-play"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-behance-square"></i></a>
								</li>
							</ul>
						</div><!--social-links-->
					</div>
					<div class="col-md-6">
						<div class="right-element">
							<a href="#" class="user-account for-buy"><i
									class="icon icon-user"></i><span>Account</span></a>
							<a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0
									$)</span></a>

							<div class="action-menu">

								<div class="search-bar">
									<a href="#" class="search-button search-toggle" data-selector="#header-wrap">
										<i class="icon icon-search"></i>
									</a>
									<form role="search" method="get" class="search-box">
										<input class="search-field text search-input" placeholder="Search"
											type="search">
									</form>
								</div>
							</div>

						</div><!--top-right-->
					</div>

				</div>
			</div>
		</div><!--top-content-->

		<header id="header">
			<div class="container-fluid">
				<div class="row">

					<div class="col-md-2">
						<div class="main-logo">
							<a href="index.php"><img src="view/interface/images/logo.png" alt="logo"></a>
						</div>

					</div>

					<div class="col-md-10">

						<nav id="navbar">
							<div class="main-menu stellarnav">
								<ul class="menu-list">
									<li class="menu-item active"><a href="index.php">Home</a></li>
									<li class="menu-item"><a href="#featured-books" class="nav-link">Featured</a></li>
									<li class="menu-item"><a href="#best-selling" class="nav-link">Best Selling</a></li>
									<li class="menu-item"><a href="#popular-books" class="nav-link">Popular</a></li>
								</ul>

								<div class="hamburger">
									<span class="bar"></span>
									<span class="bar"></span>
									<span class="bar"></span>
								</div>

							</div>
						</nav>

					</div>

				</div>
			</div>
		</header>

	</div><!--header-wrap-->

	<section id="billboard">

		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<button class="prev slick-arrow">
						<i class="icon icon-arrow-left"></i>
					</button>

					<div class="main-slider pattern-overlay">
						<div class="slider-item">
							<div class="banner-content">
								<h2 class="banner-title">harry potter and the philosopher's stone	</h2>
								<p>Harry Potter thinks he is an ordinary boy - until he is rescued by an owl, taken to Hogwarts School of Witchcraft and Wizardry, learns to play Quidditch and does battle in a deadly duel. The Reason ... HARRY POTTER IS A WIZARD! ""	</p>
								<div class="btn-wrap">
									<a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
											class="icon icon-ns-arrow-right"></i></a>
								</div>
							</div><!--banner-content-->
							<img src="Images/cover/harrypotter1.jpg" alt="banner" class="banner-image">
						</div><!--slider-item-->

						<div class="slider-item">
							<div class="banner-content">
								<h2 class="banner-title">harry potter and the chamber of secretsl</h2>
								<p>The Dursleys were so mean and hideous that summer that all Harry Potter wanted was to get back to the Hogwarts School for Witchcraft and Wizardry. But just as he's packing his bags, Harry receives a warning from a strange, impish creature named Dobby who says that if Harry Potter returns to Hogwarts, disaster will strike.</p>
								<div class="btn-wrap">
									<a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
											class="icon icon-ns-arrow-right"></i></a>
								</div>
							</div><!--banner-content-->
							<img src="images/cover/harrypotter2.jpg" alt="banner" class="banner-image">
						</div><!--slider-item-->

					</div><!--slider-->

					<button class="next slick-arrow">
						<i class="icon icon-arrow-right"></i>
					</button>

				</div>
			</div>
		</div>

	</section>

	<section id="client-holder" data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="inner-content">
					<div class="logo-wrap">
						<div class="grid">
							<a href="#"><img src="view/interface/images/client-image1.png" alt="client"></a>
							<a href="#"><img src="view/interface/images/client-image2.png" alt="client"></a>
							<a href="#"><img src="view/interface/images/client-image3.png" alt="client"></a>
							<a href="#"><img src="view/interface/images/client-image4.png" alt="client"></a>
							<a href="#"><img src="view/interface/images/client-image5.png" alt="client"></a>
						</div>
					</div><!--image-holder-->
				</div>
			</div>
		</div>
	</section>

	<section id="featured-books" class="py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header align-center">
                    <div class="title">
                        <span>Some quality items</span>
                    </div>
                    <h2 class="section-title">Featured Books</h2>
                </div>
                
                <?php if (isset($_GET['controller']) && $_GET['controller'] == 'HomeController' && isset($_GET['action']) && $_GET['action'] == 'indexAction') { ?>
                    <div class="product-list" data-aos="fade-up">
                        <div class="row">
                            <?php foreach($books as $b) { ?>
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/cover/<?= $b->get_image() ?>" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3><?= $b->get_title() ?></h3>
                                            <?php foreach($authors as $a) {
                                                if ($a->get_id_author() == $b->get_id_author()) {
                                                    ?><span><?= $a->get_name() ?></span><?php
                                                }
                                            } ?>
                                            <div class="item-price">DT <?= $b->get_price() ?></div>
                                        </figcaption>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="product-list" data-aos="fade-up">
                        <div class="row">
                            <?php
                            $counter = 0;
                            foreach($books as $b) {
                                if ($counter < 4) {
                                    ?>
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="images/cover/<?= $b->get_image() ?>" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3><?= $b->get_title() ?></h3>
                                                <?php foreach($authors as $a) {
                                                    if ($a->get_id_author() == $b->get_id_author()) {
                                                        ?><span><?= $a->get_name() ?></span><?php
                                                    }
                                                } ?>
                                                <div class="item-price">DT <?= $b->get_price() ?></div>
                                            </figcaption>
                                        </div>
                                    </div>
                                    <?php
                                    $counter++;
                                } else {
                                    break;
                                }
                            }
                            ?>
                        </div>
                    </div>
                <?php } ?>
            </div><!-- col-md-12 -->
        </div><!-- row -->

        <div class="row">
            <div class="col-md-12">
                <div class="btn-wrap align-right">
                    <a href="index.php?controller=HomeController&action=indexAction#featured-books" target="sect" class="btn-accent-arrow">View all Books <i class="icon icon-ns-arrow-right"></i></a>
                </div>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</section>
	<section id="best-selling" class="leaf-pattern-overlay">
		<div class="corner-pattern-overlay"></div>
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-md-8">

					<div class="row">
						<?php
							$b=Book::topsell();
						?>
						<div class="col-md-6">
							<figure class="products-thumb">
								<img src="images/cover/<?=$b[0]->get_image();?>" alt="book" class="single-image">
							</figure>
						</div>
						<div class="col-md-6">
							<div class="product-entry">
								<h2 class="section-title divider">Best Selling Book</h2>
								<div class="products-content">
									<div class="author-name"></div>
									<h3 class="item-title"><?=$b[0]->get_title();?></h3>
									<p><?=$b[0]->get_description();?></</p>
									<div class="item-price">DT <?=$b[0]->get_price();?></</div>
									<div class="btn-wrap">
										<a href="#" class="btn-accent-arrow">shop it now <i
												class="icon icon-ns-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- / row -->

				</div>

			</div>
		</div>
	</section>

	<section id="popular-books" class="bookshelf py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						<div class="title">
							<span>Some quality items</span>
						</div>
						<h2 class="section-title">Popular Books</h2>
					</div>

					<ul class="tabs">
						<?php
							foreach($genres as $g){
						?>
						<a href="index.php?id_genre=<?=$g->get_id_genre()?>#popular-books" class="tab"><?=$g->get_genre()?></a>
						<?php
							}
						?>
					</ul>
					
					<div class="tab-content">
						<div id="<?=$g->get_genre();?>" data-tab-content class="active">
							<div class="row">
							<?php
							if(isset($_GET["id_genre"])){
							foreach($pb as $b){
								if($b->get_id_genre()==$_GET["id_genre"]){
							?>
								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="images/cover/<?=$b->get_image()?>" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3><?=$b->get_title()?></h3>
											<span><?php foreach($authors as $a) {
                                                if ($a->get_id_author() == $b->get_id_author()) {
                                                    ?><span><?= $a->get_name() ?></span><?php
                                                }
                                            } ?></span>
											<div class="item-price">DT <?=$b->get_price()?></div>
										</figcaption>
									</div>
								</div>
							<?php
							}}}
							else{
								echo"<h2>Select a Genre</h2>";
							}
							?>
						</div>
					</div>
			</div>
		</div>
	</section>

	<section id="subscribe">
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-md-8">
					<div class="row">

						<div class="col-md-6">

							<div class="title-element">
								<h2 class="section-title divider">Send Us a Message</h2>
							</div>

						</div>
						<div class="col-md-6">
							<div class="subscribe-content" data-aos="fade-up">
								<p>Your Opinion Matters for our improvement</p>
								<form method="POST" action="index.php?controller=comment&action=store">
									<input type="text" name="fname" placeholder="First Name">
									<input type="text" name="lname" placeholder="Last Name">
									<input type="text" name="email" placeholder="email">
									<input type="text" name="message" placeholder="Your Opinion">
									<button type="submit" class="btn-subscribe">
										<span>Send</span>
										<i class="icon icon-send"></i>
									</button>
								</form>
							</div>
						</div>
						<?php
						if (isset($_GET['controller']) && $_GET['controller'] == 'comment' && isset($_GET['action']) && $_GET['action'] == 'store') {
							CommentController::storeAction($_POST);
						}
						?>
					</div>
				</div>

			</div>
		</div>
	</section>
	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="copyright">
						<div class="row">

							<div class="col-md-6">
								<p>© 2022 All rights reserved. Free HTML Template by <a
										href="https://www.templatesjungle.com/" target="_blank">TemplatesJungle</a></p>
							</div>

							<div class="col-md-6">
								<div class="social-links align-right">
									<ul>
										<li>
											<a href="#"><i class="icon icon-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-twitter"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-youtube-play"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-behance-square"></i></a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div><!--grid-->

				</div><!--footer-bottom-content-->
			</div>
		</div>
	</div>

	<script src="view/interface/js/jquery-1.11.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="view/interface/js/plugins.js"></script>
	<script src="view/interface/js/script.js"></script>

</body>

</html>