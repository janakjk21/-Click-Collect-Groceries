<!DOCTYPE html>
<html>

<head>
  <title>Responsive Ecommerce Product Cards In HTML/CSS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    .gallery {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      justify-content: center;
      align-items: center;
      margin: 50px 0;
    }

    .content {
      width: 24%;
      margin: 15px;
      box-sizing: border-box;
      float: left;
      text-align: center;
      border-radius: 10px;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      padding-top: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: .4s;
    }

    .content:hover {
      box-shadow: 0 0 11px rgba(33, 33, 33, .2);
      transform: translate(0px, -8px);
      transition: .6s;
    }

    .img1 {
      width: 50%;
      height: 50%;
      text-align: center;
      margin: 0 auto;
      display: block;
      padding: 10px;
    }

    .p1 {
      text-align: center;
      color: #b2bec3;
      padding: 88px;
    }

    .h61 {
      font-size: 26px;
      text-align: center;
      color: #222f3e;
      margin: 10px;
    }

    .ul1 {
      list-style-type: none;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .li1 {
      padding: 5px;
    }

    .fa {
      color: #ff9f43;
      font-size: 26px;
      transition: .4s;
    }

    .fa:hover {
      transform: scale(1.3);
      transition: .6s;
    }

    .button1 {
      text-align: center;
      font-size: 24px;
      color: #fff;
      width: 100%;
      padding: 15px;
      border: 0px;
      outline: none;
      cursor: pointer;
      margin-top: 5px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    .h31 {
      padding-top: 20px;
    }

    .buy-1 {
      background-color: #2183a2;
    }

    .buy-2 {
      background-color: #3b3e6e;
    }

    .buy-3 {
      background-color: #0b0b0b;
    }

    @media(max-width: 1000px) {
      .content {
        width: 46%;
      }
    }

    @media(max-width: 750px) {
      .content {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <div class="gallery">
    <div class="content">
      <img class="img1" src="./Assets/charlie-solorzano-utTJUcvNXXo-unsplash.jpg">
      <h3 class="h31">Ham</h3>
      <p class="p1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <h6 class="h61">$100.00</h6>
      <ul class="ul1">
        <li class="li1"><i class="fa fa-star" aria-hidden="true"></i></li>
        <li class="li1"><i class="fa fa-star" aria-hidden="true"></i></li>
        <li class="li1"><i class="fa fa-star" aria-hidden="true"></i></li>
        <li class="li1"><i class="fa fa-star" aria-hidden="true"></i></li>
        <li class="li1"><i class="fa fa-star" aria-hidden="true"></i></li>
      </ul>
      <button class="buy-1 button1">Buy Now</button>
    </div>
    <div class="content">
      <img class="img1" src="./Assets/annie-spratt-m1t-RJ1iCIU-unsplash.jpg">
      <h3 class="h31">Broccoli</h3>
      <p class="p1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <h6 class="h61">$100.00</h6>
      <ul class="ul1">
        <li class="li1"><i class="fa fa-star" aria-hidden="true"></i></li>
        <li class="li1"><i class="fa fa-star" aria-hidden="true"></i></li>
        <li class="li1"><i class="fa fa-star" aria-hidden="true"></i></li>
        <li class="li1"><i class="fa fa-star" aria-hidden="true"></i></li>

      </ul>
      <button class="buy-2 button1">Buy Now</button>
    </div>

    <div class="content">
      <img class="img1" src="./Assets/honza-vojtek-A39EqNtDpZs-unsplash.jpg">
      <h3 class="h31">Red Paper</h3>
      <p class="p1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <h6 class="h61">$100.00</h6>
      <ul class="ul1">
        <li class="li1"><i class="fa fa-star" aria-hidden="true"></i></li>
        <li class="li1"><i class="fa fa-star" aria-hidden="true"></i></li>
        <li class="li1"><i class="fa fa-star" aria-hidden="true"></i></li>
        <li class="li1"><i class="fa fa-star" aria-hidden="true"></i></li>

      </ul>
      <button class="buy-3 button1">Buy Now</button>
    </div>
  </div>
</body>

</html>