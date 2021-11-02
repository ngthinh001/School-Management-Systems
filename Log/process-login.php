<?php
	session_start();
//Gọi file kết nối cơ sở dữ liệu
require_once("../sql/connect.php");
// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["submit"])) {
	// lấy thông tin người dùng
	$username = $_POST["uName"];
	$password = $_POST["uPass"];
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
		$_SESSION['password'] = $password;
		$_SESSION['level'] = $user['Level'];
		$_SESSION['id'] = $user['ID'];
		header('Location: ../hocsinh/index.php');
		
	} echo '<script type="text/javascript"> alert("Tên đăng nhập hoặc mật khẩu bị sai");</script>';
}


?>