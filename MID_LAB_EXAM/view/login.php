<?php
	if(isset($_GET['error']))
	{
		if($_GET['error'] == "invalid_user")
		{
			echo "userid/password not valid";
		}
			if($_GET['error'] == "null_userid")
		{
			echo "userid field is empty";
		}
			if($_GET['error'] == "null_password")
		{
			echo "password field is empty";
		}

	}
?>
<center>
<form method="post" action="logincheck.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text"><br/>                               
					Password<br/>
					<input type="password">
					<br /><hr/>
					<input type="button" value="Login">
					<a href="registration.html">Register</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>