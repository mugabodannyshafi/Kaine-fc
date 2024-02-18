<?php
require 'config.php';

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
            margin-top: 40px;
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
        
        table thead tr th {
            padding: 10px;
        }
        
        table thead {
            background-color: #3a6fe2;
            padding: 10px;
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
                <button type="submit" class="profile" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Your Profile</button>
                <a href="logout.php" class="logout">Logout</a>
            </div>
        </div>
        <div class="main">
            <div class="fans-section">
                <div class="section-title">
                    <h2>Meeting Section</h2>
                </div>
                <div class="add-fans">
                    <button class="btn btn-info btn-block" style="border-radius:0%; color:#fff;"  data-bs-target="#view-meeting" data-bs-toggle="modal"><i class="fa fa-eye"></i> View Meeting</button>
                    <button class="btn btn-danger btn-block" style="border-radius:0%"   data-bs-target="#adds-fans" data-bs-toggle="modal"><i class="fa fa-plus"></i> Add Meeting</button>
                </div>
            </div>
        </div>
    </div>

    <!-- add meetings modal -->

    <div class="modal fade" id="adds-fans" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Meeting</h1>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Purpose</label>
                            <input type="text" name="purpose" class="form-control" id="recipient-name" require>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Location</label>
                            <input type="text" name="location" class="form-control" require>
                        </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="close-update-profile-btn" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="update-profile-btn" name="add_meeting">Add Meeting</button>
                </div>
                </form>
            </div>
        </div>
    </div>


      <!-- view Meetings modal -->

    
      <div class="modal fade" id="view-meeting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-static">
                <div class="modal-header">
                    <div class="modal-title">
                        <h5>Meetings List</h5>
                    </div>
                    <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Add Fans</h1> -->
                </div>
                <div class="modal-body">
                   <table class="table table-hover table-striped table-bordered">
                   <thead>
								<th>#</th>
								<th>Purpose</th>
								<th>Location</th>
                                <th>Action</th>
							</thead>
                            <tbody>
                            <tr>
                                <?php
                                $id =1;
                                $select ="SELECT * FROM meetings";
                                $query =mysqli_query($con,$select);
                               
                                if(mysqli_num_rows($query)>0){
                                    while($row =mysqli_fetch_assoc($query)){
                                        ?>
 <td><?= $id ?></td>           
                                <td><?php echo $row["purpose"]; ?></td>
                                <td><?php echo $row["location"]; ?></td>
                                
                                <td>
                                    <a href="update_fans.php?id=<?php echo $row['id'] ?>" title="update" data-bs-target="#update_fans" data-bs-toggle="modal"><i class="fa fa-edit text-info"></i></a>
                                    <a href="#" title="delete"><i class="fa fa-trash text-danger"></i></a>
                                </td>
                                </tr>
                                        <?php
                                        $id++;
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

<?php
if(isset($_POST['add_meeting'])){
    $purpose =$_POST['purpose'];
    $location =$_POST['location'];

    $insert ="INSERT INTO `meetings`(`purpose`, `location`) VALUES ('$purpose','$location')";
    $query_run =mysqli_query($con,$insert);
    if($query_run == true){
        echo "<script>alert('meeting added')
        window.open('meetings.php','_self')
        </script>";
    }
    else{
        echo "<script>alert('failed to add meetings')
        </script>";
    }
}
?>