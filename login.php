<?php 
require 'config.php';
if(!empty($_SESSION['id'])){
    header("Location:index.php");
}
if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $password =$_POST['password'];
    
    $select =mysqli_query($con,"SELECT * FROM users WHERE username='$username' OR password='$password'") or die('query failed');

    $row=mysqli_fetch_assoc($select);
    if(mysqli_num_rows($select)>0){
     if($password==$row['password']){
        $_SESSION["login"]=true;
        $_SESSION["id"]=$row["id"];
        header("Location: index.php");
     }
     else{
        header("Location:login.php?message=wrongpass");
     }
    }
    else{
        echo "<script>
        alert('Wrong Username or Password')
        window.open('login.php','_self')
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
        }
        
        body {
            background: url(images/bg-1.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .container {
            display: flex;
            justify-content: space-between;
        }
        
        .container h2 {
            visibility: hidden;
        }
        
        .login {
            width: 400px;
            height: min-content;
            background: #ffffff;
            padding: 20px;
            /* opacity: 85%; */
            border-radius: 12px;
        }
        
        .login h1 {
            font-size: 36px;
            margin-bottom: 25px;
            color: #6d28d9;
        }
        
        .login form {
            font-size: 20px;
        }
        
        .login form label {
            font-size: 15px;
            color: #4f46e5;
        }
        
        .login form .form-group {
            margin-bottom: 12px;
        }
        
        input:focus {
            box-shadow: none;
        }
        
        .login form input[type="submit"] {
            font-size: 20px;
            margin-top: 15px;
            background-color: #7c3aed;
            outline: none;
            border: none;
            padding: 12px;
            border-radius: 12px;
            color: #fff;
            font-weight: 600;
            transition: 0.5s;
        }
        
        .login form input[type="submit"]:hover {
            background-color: #6d28d9;
            transform: translateY(-3px);
        }
        
        .register-here {
            font-size: 16px;
            margin-top: 20px;
            margin-left: 20px;
        }
        
        .register-here a {
            color: #6d28d9;
        }
        /* .container {
            display: none;
        } */
        
        .loader {
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            background-color: #4f46e5;
            position: absolute;
        }
        
        .loader>div {
            height: 100px;
            width: 100px;
            border: 15px solid #45474b;
            border-top-color: #bdd0e4;
            position: absolute;
            margin: auto;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 50%;
            animation: spin 1.5s infinite linear;
        }
        
        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="loader">
        <div></div>
    </div>
    <div class="container">
        <h2 class="text-center">hello</h2>
        <div class="login shadow-lg">
            <h1 class="text-center">Login Here</h1>
            <form action="" method="POST" class="needs-validation">
                <?php if(isset($_GET['messgae'])):?>
                    <div class="alert" id="alert">
                        <?php if($_GET['message']=='wrongpass'){
                            echo "<strong>Wrong Password</strong>";
                            }elseif($_GET['message']=='notlogin'){
                                echo "<strong>Wrong username or password</strong>";
                            }
                            
                            ?>
                    </div>
                    <?php endif ?>
                <div class="form-group was-validated">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required style="box-shadow:none;">
                    <div class="invalid-feedback">
                        Please enter your email address
                    </div>
                </div>

                <div class="form-group was-validated">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required style="box-shadow: none;">
                    <div class="invalid-feedback">
                        Please enter your password
                    </div>
                </div>

                <div class="form-group form-check d-flex">
                    <input type="checkbox" class="form-check-input">
                    <label for="check" class="form-check-label">Remember me</label>

                </div>

                <input class="w-100" type="submit" value="Login Here" name="submit">

                <div class="register-here">
                    <span class="">Do you need account? <a href="register.php">register</a></span>
                </div>
            </form>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
        $(window).on('load', function() {
            $(".loader").fadeOut(2500);
            $(".container").fadIn(2500);
        })
        $(login).on('click', function() {
            $(".loader").fadeOut(2500);
            $(".container").fadIn(2500);
        })
    </script>
</body>

</html>