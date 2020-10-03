<?php
session_start();
  		if (isset($_SESSION['uid']))
  		{
  			header('location:admin/admindash.php');
  		}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body> 
	<h1 align="center">Admin Login</h1>
	<form action="#" method ="post">
		
		<table align="center">
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="pass" required></td>
			</tr>
			<tr>
				<td coldspan="2" align="center"><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>

</body>
</html>
<?php
include ('connection.php');
  if(isset($_POST['login']))
  {
  	$username = $_POST['uname'];
  	$password=$_POST['pass'];

  	$qry ="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
  	$run=mysqli_query($con,$qry);
  	$row =mysqli_num_rows($run);
  	if($row<1)
  	{
?>
  		<script>
  			alert('username or Password not matched !!');
  			window.open('login.php','_self');
  		</script>
<?php
  	}
  	else{
  		$data=mysqli_fetch_assoc($run);


  		$id=$data['id'];


  		$_SESSION['uid']=$id;

  		header('location:admin/admindash.php');

  	}
  }
?>