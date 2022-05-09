<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./Assets//nav3.css">

</head>

<body>


    <!-- header section starts  -->

    <header>

        <a href="#" class="logo">Click & Collect<span> groceries</span></a>

        <div class="header-search">
            <form>
                <select class="input-select">
                    <option value="0">All Categories</option>
                    <option value="1">Category 01</option>
                    <option value="1">Category 02</option>
                </select>
                <input class="input" placeholder="Search Here..." />
                <button class="search-btn">Search</button>
            </form>
        </div>

        <div class="icons">
            <div id="menu-bar" class="fas fa-bars"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>

    </header>

    <!-- header section ends -->

    <!-- navbar section  -->

    <nav class="navbar" style="position:absolute;">

        <div class="user">
            <img src="./Assets//click & clect groceries.png" alt="Click & Collect Groceries Logo">
            <h3>click & collect groceries</h3>
        </div>

        <div class="links">
            <a href="#home">home</a>
            <a href="#products">products</a>
            <a href="#featured">featured</a>
            <a href="#deal">deal</a>
            <a href="#review">review</a>
        </div>

        <div id="close" class="fas fa-times"></div>

    </nav>

    <!-- custom js file link -->
    <script src="./Assets//nav3.js"></script>

</body>

</html>