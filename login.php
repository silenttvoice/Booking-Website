<?php 
session_start();
?>

<html>
	<head>
		<title>Login Page</title>
	</head>

<body bgcolor="">
	
	<form method="post" action="login.php">
	
		<table width="400" border="10" align="center" bgcolor="">
			
			<tr>
				<td bgcolor="Hotpink" colspan="4" align="center"><h1>Login Form</h1></td>
			</tr>
		
			<tr>
				<td align="right">Name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			
			<tr>
				<td align="right">Date of Birth (DD/MM/YYYY):</td>
				<td><input type="text" name="date_of_birth"></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
			</tr>
		
		
		</table>
	</form>

</body>
</html>
<?php 
require 'connect.php';

if(isset($_POST['login'])){
	
	$name = mysql_real_escape_string($_POST['name']);
	$date_of_birth = mysql_real_escape_string($_POST['date_of_birth']);

	

	$admin_query = "select * from users where name='$name' AND date_of_birth='$date_of_birth'";

	$run = mysql_query($admin_query); 
	
	if(mysql_num_rows($run)>0){

	session_regenerate_id();
	$users = mysql_fetch_assoc($run);

	$_SESSION['name'] = $users['name'];
	
	$_SESSION['user_id'] = $users['user_id'];
	
	echo "<script>window.open('book1.php','_self')</script>";
	}
	else {
	
	echo "<script>alert('Name or Date of brith is incorrect')</script>";
	
	}
}


?>