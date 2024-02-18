<?php 
require 'config.php';
if(empty($_SESSION["id"])){
    header("Location:index.php");
}


?>

<?php
$id =$_GET['id'];

if(isset($_POST['update_fans'])){
    $username =$_POST['username'];
    $dob =$_POST['dob'];
    $gender =$_POST['gender'];
    $telephone =$_POST['telephone'];

    $update_fans ="UPDATE `fans` SET `username`='$username',`age`='$dob',`sex`='$gender',`telephone`='$telephone' WHERE id='$id'";

    $query_update =mysqli_query($con,$update_fans);
    if($query_update == true){
        echo "<script>
        alert('fans updated')
        window.open('fans.php','_self')
        </script>";
    }
    else{
        echo "<script>alert('failed to updated')</script>";
    }

}

$select_fans ="SELECT * FROM fans WHERE id='$id'";
$query_run =mysqli_query($con,$select_fans);
$row =mysqli_fetch_assoc($query_run);

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
        <div class="main">
      
            <div class="row justify-content-center">
                <div class="col-md-5 mb-3 mb-sm-0">
                    <div class="card mt-5">
                        <div class="card-header text-bg-info text-white">
                            <h5 class="text-center card-title">Update Fan</h5>
                        </div>
                        <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Username</label>
                                <input type="text" name="username" style="box-shadow:none;" class="form-control" required value="<?php echo $row['username'] ?>">
                            </div>

                            <div class="form-group mb-3">
                                <label for="" class="form-label">Date of Birth</label>
                                <input type="date" name="dob" style="box-shadow:none;" class="form-control" required value="<?php echo $row['age'] ?>">
                            </div>
                          
                            <div class="form-group mb-3">
                            <label for="message-text" class="col-form-label">Gender</label>
                            <select name="gender" class="form-select" style="box-shadow:none;" aria-label="Default select example" required value="<?php if(isset($row['male'])){echo "Male";}else{ echo "Female";} ?>">
                                <option value="" disabled selected>--Select your Gender--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="" class="form-label">Telephone</label>
                                <input type="number" name="telephone" style="box-shadow:none;" class="form-control" required value="<?php echo $row['telephone'] ?>">
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