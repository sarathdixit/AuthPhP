
<?php require 'server.php';  ?>
<?php require 'errors.php';  ?>

<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>

<form method="post" action="login.php" enctype="multipart/form-data">
<table>
	
<tr>
	<td>Email:</td>
	<td><input type="email" name="email"></td>
</tr>
<tr>
	<td>Password:</td>
	<td><input type="password" name="password"></td>
</tr>
<tr>
	<td><button type="submit" name="login">login</button></td>
	<td>already member?<a href="signup.php">signup</a></td>
</tr>

</table>



</body>
</html>