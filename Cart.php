<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets//css/bootstrap-grid.css" type="text/css">
    <link rel="stylesheet" href="./Assets//css//bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="./Assets//Cart.css" type="text/css">
    <title>Document</title>
</head>

<body>

    <div class="grid_12 header">
        <div class="login">
            <a href="#">Login</a>
        </div>
        <div class="logo">
            <img src="https://www.cookfood.net/Content/images/Logo-full-black.png" />
        </div>
        <div class="basket">
            <a href="#"><img src="https://www.cookfood.net/Content/images/basket2.png" /></a>
        </div>
    </div <img src="https://assets.cookfood.net/product_916_2793.jpg" />
    <div class="cart">
        <div class="container">
            <div class="grid_12">
                <h1>Your Cart</h1>
            </div>
            <ul class="items">
                <li class="grid_4 item">
                    <a href="#" class="btn-remove">
                        <i class="far fa-trash-alt"></i>
                    </a>
                    <div class="preview">
                        <img src="https://assets.cookfood.net/product_916_2793.jpg" />
                    </div>
                    <div class="details" data-price="15.50">
                        <h3>
                            Lasagne Al Forno
                        </h3>
                        <p>Serves 4 (1480g)</p>

                    </div>
                    <div class="inner_container">

                        <div class="col_1of2 align-center picker">
                            <p>
                                <a href="#" class="btn-quantity plus">
                                    <i class="fas fa-plus"></i>
                                </a>
                            <div class="col_1of2 quantity-text">
                                <p><span class="current_quantity">1</span> @ £15.50</p>
                            </div>
                            <a href="#" class="btn-quantity minus">
                                <i class="fas fa-minus"></i>
                            </a>
                            </p>
                            <input type="hidden" class="quantity_field" name="quantity" data-price="15.50" value="1" />
                        </div>
                    </div>

                </li>
                <li class="grid_4 item">
                    <a href="#" class="btn-remove">
                        <i class="far fa-trash-alt"></i>
                    </a>
                    <div class="preview">
                        <img src="https://assets.cookfood.net/product_811.jpg" />
                    </div>
                    <div class="details" data-price="2.49">
                        <h3>
                            Garlic Ciabatta
                        </h3>
                        <p>Serves 4</p>

                    </div>
                    <div class="inner_container">

                        <div class="col_1of2 align-center picker">
                            <p>
                                <a href="#" class="btn-quantity plus">
                                    <i class="fas fa-plus"></i>
                                </a>
                            <div class="col_1of2 quantity-text">
                                <p><span class="current_quantity">1</span> @ £2.49</p>
                            </div>
                            <a href="#" class="btn-quantity minus">
                                <i class="fas fa-minus"></i>
                            </a>
                            </p>
                            <input type="hidden" class="quantity_field" name="quantity" data-price="2.49" value="1" />
                        </div>
                    </div>

                </li>
                <li class="grid_4 item">
                    <a href="#" class="btn-remove">
                        <i class="far fa-trash-alt"></i>
                    </a>
                    <div class="preview">
                        <img src="https://assets.cookfood.net/product_1504.jpg" />
                    </div>
                    <div class="details" data-price="8.50">
                        <h3>
                            White Chocolate & Raspberry Cheesecake
                        </h3>
                        <p>Serves 6 (550g)</p>

                    </div>
                    <div class="inner_container">

                        <div class="col_1of2 align-center picker">
                            <p>
                                <a href="#" class="btn-quantity plus">
                                    <i class="fas fa-plus"></i>
                                </a>
                            <div class="col_1of2 quantity-text">
                                <p><span class="current_quantity">1</span> @ £8.50</p>
                            </div>
                            <a href="#" class="btn-quantity minus">
                                <i class="fas fa-minus"></i>
                            </a>
                            </p>
                            <input type="hidden" class="quantity_field" name="quantity" data-price="8.50" value="1" />
                        </div>
                    </div>

                </li>
            </ul>
            <div class="grid_12 delivery-payment">
                <div class="grid_6 delivery-address">
                    <h3>Delivery Address</h3>
                    <p>46 Vale Road</br>
                        Ramsgate</p>
                </div>
                <div class="grid_6 payment-details">
                    <h3>Payment Card</h3>
                    <p> **** **** **** 8678</p>
                </div>
            </div>
            <div class="grid_12 coupon">
                <h3>Apply Coupon</h3>
                <input class="coupon-input" type="text">
            </div>

            <div class="grid_12 summary">
                <div class="inner_container">
                    <div class="summary-content">
                        <div class="col_1of2 meta-data">
                            <div class="sub-total">
                                <em>Sub Total: </em><span class="amount"></span>
                            </div>
                            <div class="taxes">
                                <em>Plus VAT: </em><span class="amount">@ 20%</span>
                            </div>

                        </div>
                        <div class="col_1of2">
                            <div class="total">
                                <span class="amount"></span>
                            </div>
                        </div>
                    </div>
                    <div class="btn-summary">

                        <a href="#" class="btn-checkout btn-reverse">Continue Shopping</a>

                        <a href="#" class="btn-checkout">Checkout</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>