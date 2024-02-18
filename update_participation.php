<?php
include('config.php');
 $id =$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="font-awesome/css/all.css">
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
            /* background: linear-gradient(rgba(16, 144, 194, 0.9), #123834), url(images/bg-4.jpg);
            background-position: center;
            background-size: cover;
            height: 100vh;
             backdrop-filter: blur(10px); */
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
            color: #fff;
            background: #fff;
        }
        
        .title .profile {
            position: absolute;
            top: 18px;
            padding: 10px 10px;
            width: 10%;
            border: none;
            outline: none;
            border-radius: 10px;
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
        /* table design started here */
        
        .section-title h2 {
            background-color: #3a6fe2;
            width: 25%;
            padding: 12px;
            text-align: center;
            color: #fff;
            margin: auto;
            border-radius: 20px;
            margin-top: 8%;
        }
        
        .add-fans {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        
        .add-fans-btn {
            padding: 10px;
            width: 150px;
            border: none;
            outline: none;
            background-color: #122eaa;
            color: #fff;
            border-radius: 8px;
            font-size: 1rem;
        }
        /* modal design started here */
        
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
        
        .mb-3 .form-select {
            box-shadow: none;
            outline: none;
            border: 1px solid #0e4acc;
        }
        
        .form-select:focus {
            border: 1px solid #453c94;
        }
        
        .mb-3 .form-control:focus {
            border: 1px solid #453c94;
        }
        
        table {
            width: 50%;
            padding: 15px;
        }
        
        table thead {
            background-color: #3a6fe2;
            padding: 10px;
            color: #fff;
        }
        
        table thead tr th {
            padding: 10px;
        }
        /* search start here */
        
        .search {
            margin-left: 35%;
            margin-top: 4%;
            margin-bottom: 3%;
        }
        
        form input {
            outline: none;
            padding: 10px;
            border: 1px solid #3a6fe2;
        }
        
        form input[type="submit"] {
            background: #32549e;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="home-content">
        <div class="header">
            <div class="title">
                <a href="participation.php">
                    <h2 class="kaine-title">KAINE FC</h2>
                </a>
                <a href="logout.php" class="logout">Logout</a>
            </div>
        </div>
        <div class="main">
            <div class="row justify-content-center">
                <div class="col-md-5 mb-3 mb-sm-0">
                    <div class="card mt-5">
                        <div class="card-header text-bg-info text-white">
                            <h5 class="text-center card-title">Update Participation</h5>
                        </div>
                        <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Meeting Id</label>
                                <input type="text" name="username" style="box-shadow:none;" class="form-control" required value="<?php echo $row['username'] ?>">
                            </div>

                            <div class="form-group mb-3">
                                <label for="" class="form-label">Fan Id</label>
                                <input type="text" name="dob" style="box-shadow:none;" class="form-control" required value="<?php echo $row['age'] ?>">
                            </div>
                          
                            <div class="form-group mb-3">
                            <label for="" class="form-label">Date</label>
                                <input type="date" name="dob" style="box-shadow:none;" class="form-control" required value="<?php echo $row['age'] ?>">
                            </div>
                        </div>

                        <div class="card-footer ">
                            <button type="submit" class="btn btn-danger btn-block" onclick="window.open('fans.php','_self')">Cancel</button>
                            <button type="submit" class="btn btn-info text-white btn-block" name="update_fans">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>

    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>

<?php 

?>
