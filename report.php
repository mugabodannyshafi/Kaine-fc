<?php
include('config.php');

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
            width: 130px;
            border: none;
            outline: none;
            background-color: #122eaa;
            color: #fff;
            border-radius: 8px;
            font-size: 1rem;
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
                <a href="index.php">
                    <h2 class="kaine-title">KAINE FC</h2>
                </a>
                <a href="logout.php" class="logout">Logout</a>
            </div>
        </div>
        <div class="main">
            <div class="fans-section">
                <div class="section-title">
                    <h2>Report Section</h2>
                </div>

  
                <div class="search">
                    <form action="" method="POST">
                        <label for="">From</label>
                        <input type="date" name="from" value="<?php if(isset($_POST['search'])){ echo $from;}  ?>"> &nbsp; &nbsp;

                        <label for="">To</label>
                        <input type="date" name="to" value="<?php if(isset($_POST['search'])){ echo $to;}  ?>"">

                        <input type="submit" name="search" value="search">
                    </form>

                </div>



                <div class="add-fans">
                 
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Meeting Id</th>
                                <th>Fan Name</th>
                                <th>Purpose</th>
                                <th>Location</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                        $cid =1;
if(isset($_POST['search'])){
    $from =$_POST['from'];
    $to =$_POST['to'];

    $select_date ="SELECT M_id,username,purpose,location,date FROM participation INNER JOIN meetings ON meetings.id=participation.M_id INNER JOIN fans ON fans.id =participation.F_id WHERE date BETWEEN '$from' AND '$to'";

    $query_run =mysqli_query($con,$select_date);
    ?>

   <?php

    if(mysqli_num_rows($query_run)>0){
        while($row =mysqli_fetch_assoc($query_run)){
            ?>
        <tr>
        <td><?php echo $cid ?></td>
<td><?php echo $row['M_id'] ?></td>
<td><?php echo $row['username'] ?></td>
<td><?php echo $row['purpose'] ?></td>
<td><?php echo $row['location'] ?></td>
<td><?php echo $row['date'] ?></td>
</tr>
            <?php
            $cid++;
        }
    }
    else{
        ?>
        <td colspan="6" align="center">No Records Found</td>
        <?php
    }
}
                ?>
                           

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>