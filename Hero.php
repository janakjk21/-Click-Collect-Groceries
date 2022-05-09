<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Swiper demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

	<!-- Demo styles -->
	<style>
		html,
		body {
			position: relative;
			height: 70%;
			width: 90%;
			margin-right: auto;
			margin-left: auto;
			/* padding: 4%; */
		}

		body {
			background: rgb(255, 255, 255);
			font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
			font-size: 14px;
			color: #000;
			margin: 0;
			padding: 0;
		}

		.swiper {
			width: 100%;
			height: 70%;
			box-shadow: 0 0 4px 0 rgba(1, 1, 1, 0.1);

			/* border-radius: 5%; */
		}

		.swiper-slide {
			background-position: center;
			background-size: cover;
			box-shadow: 0 0 4px 0 rgba(1, 1, 1, 0.1);
			border-radius: 5%;
		}

		.img1 {
			display: block;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
	</style>
</head>

<body>
	<!-- Swiper -->
	<div class="swiper mySwiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="./Assets/img/O1CN01t2uqDM1qRqLT6xhqx_!!6000000005493-0-tps-990-400.jpg" class="img1 " height="50%" />
			</div>
			<div class="swiper-slide">
				<img src="./Assets/img/product06.webp" class="img1 " height="50%" />
			</div>
			<div class="swiper-slide">
				<img src="./Assets/img/O1CN01t2uqDM1qRqLT6xhqx_!!6000000005493-0-tps-990-400.jpg" class="img1 " height="50%" />
			</div>
			<div class="swiper-slide">
				<img src="https://swiperjs.com/demos/images/nature-4.jpg" class="img1 " height="50%" />
			</div>
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-pagination"></div>
	</div>

	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper(".mySwiper", {
			spaceBetween: 30,
			effect: "fade",
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
		});
	</script>
</body>

</html>