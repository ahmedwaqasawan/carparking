<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" href="global.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LoginForm</h2>
		<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="text" name="uname"  placeholder="User Name" require><br>
     	<input type="password" name="password" placeholder="Password" require><br>
     	<button type="submit">Login</button>
     </form>
</body>
</html>