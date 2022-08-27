<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>E-Shop Login</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name" required="uname"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" required="password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>