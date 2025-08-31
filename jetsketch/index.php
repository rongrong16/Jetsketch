<?php
session_start();
?>
<?php require './includes/head.php' ?>
<?php require './includes/conn.php';
	require './includes/is_added_to_cart.php'

?>

<section class="banner_part">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="banner_slider owl-carousel">
					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-5 col-md-8">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1>Buy art to save artists</h1>
										<p>
											Buy the best arts.
											We have a display arts.
										</p>
										<a href="category.php" class="btn_2">Buy now</a>
									</div>
								</div>
							</div>
							<div class="banner_img d-none d-lg-block">
								<img src="img/banner.png" alt="" />
							</div>
						</div>
					</div>
					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-5 col-md-8">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1>Art discovery</h1>
										<p>
											Choose among the best arts.
										</p>
										<a href="#" class="btn_2">Buy now</a>
									</div>
								</div>
							</div>
							<div class="banner_img d-none d-lg-block">
								<img src="img/banner.png" alt="" />
							</div>
						</div>
					</div>
					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-5 col-md-8">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1>Budget Friendly</h1>
										<p>
											We got you.
										</p>
										<a href="#" class="btn_2">Buy now</a>
									</div>
								</div>
							</div>
							<div class="banner_img d-none d-lg-block">
								<img src="img/banner.png" alt="" />
							</div>
						</div>
					</div>
				</div>
				<div class="slider-counter"></div>
			</div>
		</div>
	</div>
	
</section>


<section class="product_list section_padding" style="background-color:whitesmoke;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section_tittle text-center">
					<h2>Awesome <span>Shop</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="product_list_slider owl-carousel">
					<div class="single_product_list_slider">
						<div class="row align-items-stretch justify-content-start">
    <?php
        $query = "SELECT * from `products`";
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($result)) {
            echo '<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="single_product_item h-100 d-flex flex-column">
                        <div class="product_image_container" style="height: 250px; overflow: hidden;">
                            <img class="w-100 h-100" style="object-fit: cover;" src="img/product/'.$row['image'].'" alt="'.$row['title'].'" />
                        </div>
                        <div class="single_product_text flex-grow-1 d-flex flex-column justify-content-between p-3">
                            <div>
                                <h4 class="product-title mb-2" style="min-height: 50px; display: flex; align-items: center;">'. $row['title'] .'</h4>
                            </div>
                            <div class="product-footer">
                                <h3 class="price mb-2">₱ '. number_format($row['price']) .'</h3>';
                                if(!check_if_added_to_cart($row['id'])){
                                    echo '<a href="scripts/cart_add.php?id='.$row['id'].'&qty=1" class="add_cart btn btn-primary w-100">+ add to cart <i class="ti-heart"></i></a>';
                                } else {
                                    echo '<a href="#" class="add_cart btn btn-secondary w-100" style="opacity: 0.6; cursor: not-allowed;">Already in cart <i class="ti-heart"></i></a>';
                                }
                            echo '</div>
                        </div>
                    </div>
                </div>';
        }
    ?>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="subscribe_area section_padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="subscribe_area_text text-center">
					<h5>Join Our Newsletter</h5>
					<h2>Subscribe to get Updated with new offers</h2>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="enter email address" aria-label="Recipient's username" aria-describedby="basic-addon2" />
						<div class="input-group-append">
							<a href="#" class="input-group-text btn_2" id="basic-addon2">subscribe now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require "./includes/footer.php" ?>

<script src="js/jquery-1.12.1.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.js"></script>

<script src="js/swiper.min.js"></script>

<script src="js/masonry.pkgd.js"></script>

<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>

<script src="js/slick.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/custom.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721abfb4f723390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>
