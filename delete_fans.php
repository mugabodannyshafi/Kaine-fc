<?php
include('config.php');
$id =$_GET['deleteid'];
$delete ="DELETE FROM fans WHERE id='$id'";
$query_delete =mysqli_query($con,$delete);
if($query_delete ==true){
    echo "<script>
    alert('fans Deleted')
    window.open('fans.php','_self')
    </script>";
}
else{
    echo "<script>alert('failed to delete')</script>";
}
?>