<?php 
session_start() 
?>
<html>
<head>
	<title>Login</title>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/login.css"> 
</head>
<body>
	<?php
	$servername = 'mysql.hostinger.vn';
	$username = 'u971113108_admin';
	$password = 'iamaloner';
	$conn = new mysqli($servername, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	mysql_select_db("u971113108_admin",$conn);
	// if(!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['username'])){ 
	// 	echo "<p align='center' style='color: white;font-size: 23px'><b>ĐĂNG KÝ THÀNH CÔNG<b></p>"; 
	// } 
	if(isset($_POST["btn_submit"])){
//lay thong tin nguoi dung
		$username = $_POST["username"];
		$password = $_POST["password"];
	//lam sach thong tin
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "Ban can nhap day du ten dang nhap va mat khau";
		}else{
			$sql = "SELECT * FROM user WHERE username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "<p align='center' style='color: white'><b>Tên đăng nhập hoặc mật khẩu không đúng.</b></p>";
			}else{
			//lưu tên đăng nhập và password vào session
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header('Location: homepage.php');
			}
		}
	}
	?>
	<form method="POST" action="Login.php">
		<div class="login-block">
			<h1>Login</h1>
			<input type="text" value="" placeholder="Username" id="username" name="username" />
			<input type="password" value="" placeholder="Password" id="password" name="password" />
			<button name="btn_submit">Login</button>
			<p align="center">Create a new account? <a href="signup.php">Signup</a></p>
		</div>
	</form>
</body>
</html>