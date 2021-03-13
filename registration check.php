<?php
	if(isset($_POST['submit']))
	{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$gender=$_POST['gender'];
				$password=$_POST['password'];
				$cp=$_POST['cp'];
				if($name == "" || $email == "" || $password == ""){
			echo "invalid information...please try again!";
				}
				else{
					if($password==$cp)
					{
						setcookie('name',$name,time()+3600,'/');
						setcookie('password',$password,time()+3600,'/');
						setcookie('email',$email,time()+3600,'/');
						header('location: home.html');
					}
					else{
						echo"Password mismatch!!";
					}
			}
	}
?>
