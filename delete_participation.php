<?php
include('config.php');
$id =$_GET['id'];
$delete ="DELETE  FROM participation WHERE id='$id'";
$query_run =mysqli_query($con,$delete);
if($query_run == true){
    echo "deleted";
}
else{
    "failed";
}
?>