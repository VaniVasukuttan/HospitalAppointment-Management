<!-----------------------------doctor approval by admin section starts---------------->
<?php
include('php_connection.php');
$var = $_GET['id'];
$sql="UPDATE doctors SET dstatus = 'approved' where d_regid = '".$var."'";
    if (mysqli_query($conn,$sql))
        {
            header('location:admin_home.php');
        }

mysqli_close($conn);
?>
<!----------------------------- section ends---------------->