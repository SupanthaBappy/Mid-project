<?php
	session_start();
	if(isset($_POST['submit'])){

		$name 	= $_POST['name'];
		$password 	= $_POST['password'];
		if($_COOKIE['name'] == "" || $_COOKIE['password'] == ""){
			echo "Null submission";
		}else{
			if($name == $_COOKIE['name'] && $password == $_COOKIE['password']){
				
				//$_SESSION['status'] = true;
				setcookie('status', 'true', time()+5000, '/');
				header('location: inter.php');

			}else{
				echo "invalid user...";
			}
		}
	}
?>
