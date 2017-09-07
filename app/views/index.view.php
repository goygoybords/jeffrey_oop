<?php //require('partials/head.php'); ?>

<h1>Login Page </h1>
	<form method="POST" action="/login">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Submit"></td>
			</tr>
		</table>
		
	</form>
<?php require('partials/footer.php'); ?>
	
	
	
