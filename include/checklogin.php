<?php
	$errors = array();  
	$_SESSION['success'] = "";


	if (isset($_POST['login'])) 
	{
	$user = mysqli_real_escape_string($connect,$_POST['user']);
	$pass = mysqli_real_escape_string($connect,$_POST['pass']);
	if (empty($user)) 
	{
		echo "Vui lòng nhập tài khoản";
	}
	else
	{
		if (empty($pass)) 
		{
			echo "Vui lòng nhập mật khẩu";
		}
		else
		{
			if (count($errors) == 0) 
			{
				$sql= "SELECT * FROM username WHERE username='$user' ";
				$result = mysqli_query($connect,$sql);
				$resultCheck = mysqli_num_rows($result);
				if($resultCheck < 1)
				{ 
					echo '<h2 style="color: #000; text-align: center;">Tài khoản không tồn tại! </h2>';
				}
				else
				{
					if ($row=mysqli_fetch_assoc($result))
					{	$row['password'];
						$hashedPwdCheck = password_verify($pass,$row['password']);
						if($hashedPwdCheck == true)
						{
							echo '<h2 style="color: #000; text-align: center;">Mật khẩu không chính xác! </h2>';

						}
						else{
							if($hashedPwdCheck == false)
							{

								$_SESSION["username"] = $row['username'];
								header('Location:index.php?a=chonmon');
								
							}
						}
					}
				}
			}
		}
	}
}


?>