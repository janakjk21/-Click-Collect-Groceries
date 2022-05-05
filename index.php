<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <div> <?php include 'Nav.php'; ?></div>
        <div style="margin-left:10%;margin-top:3%;color:#FF0000;font-weight:900">
            <h1 style=" text-transform: uppercase;
    font-weight: 900;"> Hot Products </h1>
        </div>
        <div style=" margin-bottom: 200px;">
            <?php include 'Caresole.php'; ?>
        </div>
        <hr>
        </hr>

        <div style=" margin-bottom: 200px;">
            <h1 style=" text-transform: uppercase; font-weight: 900; color:#FF0000; margin-left:10%;"> New Products</h1>
            <?php include './Products.php'; ?>
        </div>
        <div>
            <?php include 'Footer.php'; ?>
        </div>
    </div>






</body>

</html>