<?php 
require 'config.php';
if(!empty($_SESSION["id"])){
    $id =$_SESSION["id"];
    $select =mysqli_query($con,"SELECT * FROM users WHERE id='$id'");
    $row =mysqli_fetch_assoc($select);
}
else{
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'josefin Sans', sans-serif;
            text-decoration: none;
            -webkit-user-select: none;
        }
        
        body {
            background: #f3f5f9;
        }
        
        .home-content {
            height: 80px;
            width: 100%;
            background-color: #2763e6;
            position: relative;
        }
        
        .title {
            display: flex;
            justify-content: space-around;
        }
        
        .kaine-title {
            color: #fff;
            position: absolute;
            left: 80px;
            top: 18px;
        }
        
        .title .logout {
            position: absolute;
            right: 80px;
            top: 18px;
            color: #000;
            background: #f3f5f9;
            padding: 10px;
            text-decoration: none;
        }
        
        .title .profile {
            position: absolute;
            top: 18px;
            padding: 10px 10px;
            width: 10%;
            border: none;
            outline: none;
            border-radius: 10px;
            color: #0e4acc;
        }
        
        .welcome-text {
            margin-top: 90px;
            text-align: center;
        }
        
        .main {
            margin-top: 60px;
        }
        
        .flex {
            display: flex;
            justify-content: space-around;
        }
        
        .link-section {
            display: grid;
            place-items: center;
            margin: auto;
            margin-top: 90px;
        }
        
        .link-section ul li {
            display: inline-block;
            margin: 20px;
        }
        /* Modal design started here */
        
        
        .modal-content {
            outline: none;
            border: none;
            color: #0e4acc;
        }
        
        .modal-header {
            background-color: #648bdf;
            color: #fff;
        }
        
        .modal-body {
            font-size: 1.2rem;
        }
        
        .modal-footer .close-profile-modal-btn {
            padding: 10px;
            outline: none;
            border: none;
            background-color: #db105e;
            border-radius: 8px;
            color: #fff;
        }
        
        .modal-footer .edit-profile-btn {
            padding: 10px;
            outline: none;
            border: none;
            background-color: #0e4acc;
            border-radius: 8px;
            color: #fff;
        }
        
        .modal-footer .close-update-profile-btn {
            padding: 10px;
            outline: none;
            border: none;
            background-color: #db105e;
            border-radius: 8px;
            color: #fff;
        }
        
        .modal-footer .update-profile-btn {
            padding: 10px;
            outline: none;
            border: none;
            background-color: #0e4acc;
            border-radius: 8px;
            color: #fff;
        }
        
        .mb-3 .form-control {
            box-shadow: none;
            outline: none;
            border: 1px solid #0e4acc;
        }
        
        .mb-3 .form-control:focus {
            border: 1px solid #db105e
        }
        
        i {
            color: #2763e6;
        }
        .user-details{
            color:#db105e;
            font-style: italic;
            text-transform: uppercase;
        }
        .user-detail{
            color:#0e4acc;
        }
        li a{
            text-decoration: none;
        }
        li{
            list-style: none;
        }
    </style>
</head>

<body>
    <div class="home-content">
        <div class="header">
            <div class="title">
                <a href="index.php">
                    <h2 class="kaine-title">KAINE FC</h2>
                </a>
                <button type="submit" class="profile" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span class="icon-rel"><i class="fas fa-user"></i></span> Your Profile</button>
                <a href="logout.php" class="logout"><i class=""></i>Logout</a>
            </div>
        </div>
        <h2 class="welcome-text">Welcome Back
       <span class="user-detail">  <?php echo $row["username"]; ?></span>
        </h2>
        <div class="main">
            <div class="flex">

                <nav>
                    <ul>
                        <li><a href="https://ferwafa.com/" target="_blank">FERWAFA</a></li>
                        <li><a href="https://fifa.com/" target="_blank">FIFA</a></li>
                        <li><a href="https://minisante.com/" target="_blank">MINISANTE</a></li>
                    </ul>
                </nav>

                <nav>
                    <ul>
                        <li>President: <span>Jeff Muhinyuza</span></li>
                        <li>Manager: <span>Dreck Gato</span></li>
                        <li>Secretary: <span>Jeanne KAYITERA</span></li>
                        <li>Captain: <span>Rico Pie</span></li>
                        <li>Accountant: <span>Monday Chrito</span></li>
                    </ul>

                </nav>
                <nav>
                    <h2>Announcements</h2>
                    <p>CLUB Party at Muhazi beach <br>on 26<sup>th</sup>December 2022</p>
                </nav>
            </div>

            <div class="link-section">
                <ul>
                    <li><a href="fans.php">Fans</a></li>
                    <li><a href="meetings.php">Meetings</a></li>
                    <li><a href="participation.php">Participation</a></li>
                    <li><a href="report.php">Report</a></li>
                </ul>
            </div>


        </div>
    </div>

    <!-- Profile Modal Here -->

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Your Profile</h1>

                </div>
                <div class="modal-body">
                    <div class="username">
                        <span>Your Username: <span class="user-details"> <?= $row["username"]; ?></span></span> <br>
                    </div>
                    <div class="password mt-5">
                        <span>Your Password:  <span class="user-details"><?= $row["password"];?></span></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="close-profile-modal-btn" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="edit-profile-btn" data-bs-target="#edit-profile" data-bs-toggle="modal">Edit Profile</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Profile here -->

    <div class="modal fade" id="edit-profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Your Profile Here</h1>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Username:</label>
                            <input type="text" name="username" class="form-control" id="recipient-name" value="<?= $row['username'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Password:</label>
                            <input type="password" name="password" class="form-control" value="<?= $row['password'] ?>">
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="close-update-profile-btn" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="update-profile-btn" name="update">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['update'])){
        $username =$_POST['username'];
        $password =$_POST['password'];

        $update ="UPDATE `users` SET `username`='$username',`password`='$password' WHERE id='$id'";
        $query_run =mysqli_query($con,$update);

        if($query_run == true){
            echo "<script>alert('fan updated')
            window.open('index.php','_self')
            </script>";
        }
        else{
            echo "<script>alert('failed to update')</script>";
        }
    }
    
    ?>



    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>