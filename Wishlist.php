<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Document</title>
	<link href="./bootstrap.min.css" rel="stylesheet" />

	<link href="./Wishlist.css" rel="stylesheet" />
</head>

<body>
	<div style="margin: 20px;"><?php include './nav3.php'; ?></div>


	<div class="page-section section mb-50">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<form action="#">
						<!--=======  cart table  =======-->

						<div class="cart-table table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th class="pro-thumbnail">Image</th>
										<th class="pro-title">Product</th>
										<th class="pro-price">Price</th>
										<th class="pro-quantity">Quantity</th>
										<th class="pro-subtotal">Total</th>
										<th class="pro-remove">Remove</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="pro-thumbnail">
											<a href="#"><img width="350" height="350" src="assets/images/products/product01.webp" class="img-fluid" alt="Product" /></a>
										</td>
										<td class="pro-title">
											<a href="#">Cillum dolore tortor nisl fermentum</a>
										</td>
										<td class="pro-price"><span>$29.00</span></td>
										<td class="pro-quantity">
											<div class="pro-qty">
												<input type="text" value="1" />
											</div>
										</td>
										<td class="pro-subtotal"><span>$29.00</span></td>
										<td class="pro-remove">
											<a href="#"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
									<tr>
										<td class="pro-thumbnail">
											<a href="#"><img width="350" height="350" src="assets/images/products/product02.webp" class="img-fluid" alt="Product" /></a>
										</td>
										<td class="pro-title">
											<a href="#">Auctor gravida pellentesque</a>
										</td>
										<td class="pro-price"><span>$30.00</span></td>
										<td class="pro-quantity">
											<div class="pro-qty">
												<input type="text" value="2" />
											</div>
										</td>
										<td class="pro-subtotal"><span>$60.00</span></td>
										<td class="pro-remove">
											<a href="#"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
									<tr>
										<td class="pro-thumbnail">
											<a href="#"><img width="350" height="350" src="assets/images/products/product03.webp" class="img-fluid" alt="Product" /></a>
										</td>
										<td class="pro-title">
											<a href="#">Condimentum posuere consectetur</a>
										</td>
										<td class="pro-price"><span>$25.00</span></td>
										<td class="pro-quantity">
											<div class="pro-qty">
												<input type="text" value="1" />
											</div>
										</td>
										<td class="pro-subtotal"><span>$25.00</span></td>
										<td class="pro-remove">
											<a href="#"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
									<tr>
										<td class="pro-thumbnail">
											<a href="#"><img width="350" height="350" src="assets/images/products/product04.webp" class="img-fluid" alt="Product" /></a>
										</td>
										<td class="pro-title">
											<a href="#">Habitasse dictumst elementum</a>
										</td>
										<td class="pro-price"><span>$11.00</span></td>
										<td class="pro-quantity">
											<div class="pro-qty">
												<input type="text" value="1" />
											</div>
										</td>
										<td class="pro-subtotal"><span>$11.00</span></td>
										<td class="pro-remove">
											<a href="#"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!--=======  End of cart table  =======-->
					</form>
				</div>
			</div>
		</div>
	</div>
	<div><?php include './footer.php'; ?></div>
</body>

</html>