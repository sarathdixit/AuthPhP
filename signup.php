<?php require('server.php')?>

<?php require('errors.php')?>

<!DOCTYPE html>
<html>
<head>
	<title>signup page</title>
</head>
<body>
<form method="post" action="signup.php" enctype="multipart/form-data">
<table>
	
<tr>
	<td>USER NAME:</td>
	<td><input type="text" name="name"></td>
</tr>
<tr>
	<td>EMAIL:</td>
	<td><input type="email" name="email"></td>
</tr>
<tr>
	<td>ENTER PASSWORD:</td>
	<td><input type="password" name="password"></td>
</tr>
<tr>
	<td>RE-ENTER PASSWORD:</td>
	<td><input type="password" name="againpassword"></td>
</tr>
<tr>
	<td><button type="submit" name="submit"> signup</button></td>
	<td>not yet a member? <a href="login.php">login</a></td>
</tr>


</table>
</form>
</body>
</html>