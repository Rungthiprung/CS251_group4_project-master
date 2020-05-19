<?php require('connect.php');
session_start();
$password = mysqli_real_escape_string($conn,$_POST['password']);
$query = "UPDATE users SET password='$password' WHERE loginID='{$_SESSION['loginID']}'";
$result = mysqli_query($conn, $query) or die ("Error in query: $sql " . mysqli_error());
if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Successfully');";
	echo "window.location = 'login.php'";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error change password again');";
        echo "window.location = 'change password page.php' ";
	echo "</script>";
}
?>