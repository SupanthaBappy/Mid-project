<?php
	
	if (isset($_POST['Submit']))
	{
		$name=$_COOKIE['name'];
		$pass=$_COOKIE['pass'];
		$rPass=$_COOKIE['pass'];
		$email=$_POST['ne'];
		if($_POST['ce']===$_POST['ne'] || $_POST['ce']!=$_COOKIE['email'])
		{
			echo"something wrong";
			setcookie('email',$email,time()+3600,'/');
		}
		else{
		$userValidationInfo = [
										 'user' => $name,
										 'pass' => $pass,
										 'rPass' => $rPass,
										 'email' => $email,
				      				  ];
				$allData = json_encode($userValidationInfo);
				$userData = fopen("userValidationInfo.json", "w");
				fwrite($userData, $allData);
				fclose($userData);
				setcookie('email',$email,time()+3600,'/');
	}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<?php include'high.php';?>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td width="33%">
				<h4> &nbsp &nbsp &nbsp Account </h4>
				<hr width="90%">
				<?php include'featurprofile.php';?>
			</td>
			<td colspan="2" align="center">
				<br>
				<form method="POST" action="">
				<fieldset style="width: 50%">
					<legend> <b> CHANGE Email </b></legend>
						<table>
							<tr>
								<td> Current Email </td>
								<td>
									<input type="email" name="ce">
								</td>
							</tr>

							<tr>
								<td>
									New Email
								</td>
								<td>
									<input type="email" name="ne">
								</td>
							</tr>
						</table>
				</fieldset>
					<hr width="80%">
					<input type="submit" name="Submit" value="Submit">
				</fieldset>
				</form>
				<br> 
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="3">
				<center> Copyright &copy 2017 </center>
			</td>
		</tr>
	</table>
</body>
</html>
