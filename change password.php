<?php

if (isset($_POST['Submit']))
{
$name=$_COOKIE['name'];
$pass=$_POST['nPassword'];
$rPass=$_POST['nPassword'];
$email=$_COOKIE['email'];
if($_POST['cPassword']===$_POST['nPassword'])
{
echo"New & old password is same";
}
else if($_POST['rnPassword']!=$_POST['nPassword'])
{
echo"New & retype new password is not same";
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
setcookie('pass',$pass,time()+3600,'/');
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
<h4> </h4>
<hr width="90%">
<?php include'featurprofile.php';?>
</td>
<td colspan="2" align="center">
<br>
<form method="POST" action="">
<fieldset style="width: 50%">
<legend> <b> CHANGE PASSWORD</b></legend>
<table>
<tr>
<td> Current Password: </td>
<td>
<input type="password" name="cPassword">
</td>
</tr>



<tr>
<td>
New Password:
</td>
<td>
<input type="password" name="nPassword">
</td>
</tr>



<tr>
<td>
Retype New Password:
</td>
<td>
<input type="password" name="rnPassword" >
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
<center> Copyright &copy 2020 </center>
</td>
</tr>
</table>
</body>
</html>
