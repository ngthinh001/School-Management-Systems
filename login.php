<?php
session_start();
?>

<html>

<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<div class="login ">
		<div class="container login-form bg-light mt-4 p-4 col-md-4 offset-md-4">
			<br>
			<h1 class="text-center">Login</h1>
			<br>

			<form action="login.php" method="POST">
				<div class="col-12">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="Username" required>
				</div>
				<div class="col-12">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password" required>
				</div>
				<div class="modal-footer pt-4">
					<button type="submit" name="submit" class="btn btn-success gradient-custom-4 mx-auto w-100">Login</button>
				</div>
				<hr class="mt-4">
				<div class="col-12">
					<p class="text-center mb-0">Have not account yet? <a href="dangky.php">Signup</a></p>
				</div>
				<br><br>
			</form>
		</div>
	</div>

</body>

</html>

<?php

//Gọi file connection.php ở bài trước
require_once("sql/connect.php");
// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["submit"])) {
	// lấy thông tin người dùng
	$username = $_POST["username"];
	$password = $_POST["password"];
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);


	$sql = "SELECT * from users where Accout = '$username' and Pass = '$password' ";
	$query = mysqli_query($conn, $sql);
	$num_rows = mysqli_num_rows($query);

	if ($num_rows > 0) {
		$user = mysqli_fetch_assoc($query);

		$_SESSION['username'] = $username;
		$_SESSION['level'] = $user['Level'];
		$_SESSION['id'] = $user['ID'];
		header('Location: gvcn/index.php');
	}
}


?>