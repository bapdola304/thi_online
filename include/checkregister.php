
<?php
include('../connect/connect.php');
	$errors = array();
	$_SESSION['success'] = "";



	if (isset($_POST['registe'])) 
	{
	// lấy dữ liệu
		$hoten =$_POST['hoten'];
		$username =$_POST['username'];
		$password =$_POST['password'];
		$rppassword =$_POST['rppassword'];
		$ngaysinh=$_POST['ngaysinh'];
		$email=$_POST['email'];

	// check lỗi trống thông tin
	if (empty($username)) 
	{
		echo "<div class='alert alert-danger'>";
		 echo "Vui lòng nhập Tài khoản";
		 echo "</div>";
	}
	else
	{
		if (empty($password)) 
		{		
				echo "<div class='alert alert-danger'>";
				  echo "Vui lòng nhập mật khẩu"; 
				  echo "</div>"; 
		}		
		else
		{
			if (empty($rppassword)) 
			{ 
				echo "<div class='alert alert-danger'>";
				echo "Vui lòng nhâp mật khẩu xác minh";
				 echo "</div>"; 
			}
			else
			{
				if (empty($password) || empty($rppassword)) 
				{ 
					echo "<div class='alert alert-danger'>";
					echo "Vui lòng nhập lại mật khẩu";
					 echo "</div>";
				}
				// check lỗi kí tự đặc biệt
				else
					{
						if(!preg_match("/^[A-Za-z0-9_\.]{6,24}$/",$password))
						{
							echo '<h2 style="color: #fff; text-align: center;">Vui lòng nhập tài khoản từ 6 đến 24 kí tự </h2>';
						}
						else
						{
							if(!preg_match("/^[A-Za-z0-9_\.]{6,32}$/",$password))
								{
									echo '<h2 style="color: #fff; text-align: center;">Vui lòng nhập tài khoản từ 6 đến 24 kí tự </h2>';
								}
								else
								{
									$sql= "select * from username where username='$username'";
									$result=mysqli_query($connect,$sql);
									$resultCheck=mysqli_num_rows($result);
									if($resultCheck > 0)
									{
										echo '<h2 style="color: #000; text-align: center;">Tài khoản này đã tồn tại </h2>';
									}
									else
									{
										$hashedPwd = password_hash($password,PASSWORD_DEFAULT);
						
										if($password != $rppassword)
										{						
											echo '<h2 style="color: #000; text-align: center;">Vui lòng nhập lại mật khẩu! </h2>';
										}
										else
										{
										//nhập dữ liệu vào database
											$sql="INSERT INTO username(username,password,hoten,ngaysinh,email) VALUES('".$username."', '".$hashedPwd."', '".$hoten."','".$ngaysinh."','".$email."')";
											$query=mysqli_query($connect,$sql);
											echo '<div class="alert alert-success">';
											echo '<h3 style="color: #000; text-align: center;">ĐĂNG KÝ THÀNH CÔNG! Click Vào <a href="login.php" style="color: red">ĐĂNG NHẬP </h3>';
											echo '</div>';
										}
									}
								}
							
						}
					}
				}
			}
		}
	}

?>