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
		.swiper {
			width: 100%;
			height: 100%;
		}

		.swiper-slide {
			text-align: center;
			font-size: 18px;
			background: #fff;

			/* Center slide text vertically */
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
		}

		.swiper-slide img {
			display: block;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
	</style>
</head>

<body>
	<!-- Swiper -->
	<div class="swiper mySwiper-one">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<h1 style="color:black ;position:absolute"> jadjalsjflk</h1>
				<img src="./Assets/product06.webp" style="width:100% ;height:40%">
			</div>
			<div class="swiper-slide"><img src="./Assets/product06.webp" style="width:100% ;height:600px"></div>

			<div class="swiper-slide"><img src="./Assets/img/O1CN01t2uqDM1qRqLT6xhqx_!!6000000005493-0-tps-990-400.jpg" style="width:100% ;height:600px"></div>

			<div class="swiper-slide"><img src="./Assets/img/O1CN01t2uqDM1qRqLT6xhqx_!!6000000005493-0-tps-990-400.jpg" style="width:100% ;height:600px"></div>



		</div>
		<div class="swiper-pagination"></div>
	</div>

	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiperOne = new Swiper(".mySwiper-one", {
			pagination: {
				el: ".swiper-pagination",
			},
		});
	</script>
</body>

</html>