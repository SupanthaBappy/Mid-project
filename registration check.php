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
						$userValidationInfo = [
										 'user' => $name,
										 'pass' => $password,
										 'rPass' => $cp,
										 'email' => $email,
				      				  ];
				$allData = json_encode($userValidationInfo);
				$userData = fopen("userValidationInfo.json", "w");
				fwrite($userData, $allData);
				fclose($userData);
				//header('location: ../view/login.html');
						header('location: home.html');
					}
					else{
						echo"Password mismatch!!";
					}
			}
	}
?>
