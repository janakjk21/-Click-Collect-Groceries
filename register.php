<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/login_style.css">
</head>

<body>
    <div class="container">
        <form action="" name="myLogin" method="post">
            <h1 class="form__title">Register</h1>
            <input type="text" class="form__input" name="username" autofocus placeholder="Username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>">
            <input type="text" class="form__input" name="email" autofocus placeholder="Email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>">
            <input type="password" class="form__input" name="password" autofocus placeholder="Password">
            <input type="password" class="form__input" name="confirm_password" autofocus placeholder="Confirm Password">
            <label for="age"> Age Range</label>

            <select name="age">
                <option value="">Choose Age Range</option>
                <option value="0-20">0-20</option>
                <option value="20-40">20-40</option>
                <option value="40-60">40-60</option>
                <option value="60-80">60-80</option>
                <option value="80-100">80-100</option>
                <option value="100+">100+</option>
            </select><br><br>
            <label for="terms_and_condition">I have read and agreed to Terms and Conditions</label>
                <input type="checkbox" name="chkConfirm" value="agreed"><br />
            <br><button class="form__button" type="submit" name="register">Submit</button>  
            <p class="form__text">
                <a class="form__link" href="homepage.php" id="return">Return to Homepage</a>
            </p>        
        </form>
    </div>


    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST['register'])){
                if(!empty(trim($_POST['username']))){
                    if(strlen($_POST['username']) >= 6){
                        $userTxt = $_POST['username'];

                        if(!empty(trim($_POST['email'])) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                            $email = $_POST['email'];

                            if(!empty(trim($_POST['password'])) && !empty(trim($_POST['confirm_password']))){
                                $uppercase = preg_match('@[A-Z]@', $_POST['password']);
                                $lowercase = preg_match('@[a-z]@', $_POST['password']);
                                $number = preg_match('@[0-9]@', $_POST['password']);

                                if($uppercase && $lowercase && $number && strlen($_POST['password']) >= 8 && $_POST['password'] == $_POST['confirm_password']){
                                    $unencrypted_password = $_POST['password'];
                                    $encrypted_password = md5($unencrypted_password);

                                    if(!empty(trim($_POST['age']))){
                                        $age = $_POST['age'];

                                        if(isset($_POST['chkConfirm'])){
                                            include "connection.php";

                                            $sql = "INSERT INTO register(`Username`, `Email`, `Password`, `Age`) VALUES('$userTxt', '$email', '$encrypted_password', '$age')";
                                            
                                            $result = mysqli_query($connection, $sql);
                                            header('Location: homepage.php');
                                        }
                                        else{
                                            echo '<script>alert("You must agree to terms and conditions!")</script>';
                                        }
                                    }
                                    else{
                                        echo '<script>alert("Select your age group!")</script>';
                                    }
                                }
                                else{
                                    echo '<script>alert("Password must contain an uppercase, a lowercase and a number and minumum of eight characters and must be same.")</script>';   
                                }
                            }
                            else{
                                echo '<script>alert("Password cannot be empty !!!!")</script>';
                            }
                        }
                        else{
                            echo '<script>alert("Invalid Email !!!!")</script>';
                        }
                    }
                    else{
                        echo '<script>alert("Username must have a minimum of six characters!")</script>';
                    }
                }
                else{
                    echo '<script>alert("Username cannot be empty !!!!")</script>';
                }
            }
        }
    ?>
</body>

</html>