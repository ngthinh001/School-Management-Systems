
<?php
session_start();

//Gọi file kết nối cơ sở dữ liệu
include("../sql/connect.php");
// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["submit1"])) {
    // lấy thông tin người dùng
    $password = $_POST["uPass"];
    $password1 = $_POST["uPass1"];
    $password2 = $_POST["uPass2"];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $password = strip_tags($password);
    $password = addslashes($password);
    $password1 = strip_tags($password1);
    $password1 = addslashes($password1);
    $password2 = strip_tags($password2);
    $password2 = addslashes($password2);
} 
$username = $_SESSION['username'];
$sql = "SELECT * from users where Accout like '$username' ";
$query = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($query);
if ($num_rows > 0) {
    $user = mysqli_fetch_assoc($query);
    if ($password == $user['Pass'] && $password1 == $password2) {
        if ($password1 == $password) {
            echo '<script type="text/javascript"> alert("Mật khẩu mới trùng mật khẩu cũ");</script>';
        } else {
            $sql2 = "UPDATE users SET Pass = '$password1' Where Accout = '$username'";
            $res2 = mysqli_query($conn, $sql2);
            if ($res2 == true) {
                header('Location: login.php');
            } else {
                echo '<script type="text/javascript"> alert("Chưa cập nhật thành công!");</script>';
            }
        }
    } else echo '<script type="text/javascript"> alert("Mật khẩu bạn nhập lại chưa đúng";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Passwword</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG">
                </div>
                <form class="login100-form validate-form" action="../Log/changepass.php" method="post">
                    <span class="login100-form-title">
                        Hệ thống đăng nhập - Thay đổi mật khẩu
                    </span>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="uPass" placeholder="Mật khẩu" required oninvalid="this.setCustomValidity('Bạn cần điền mật khẩu')" oninput="this.setCustomValidity('')">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="uPass1" placeholder="Mật khẩu" required oninvalid="this.setCustomValidity('Bạn cần điền mật khẩu')" oninput="this.setCustomValidity('')">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="uPass2" placeholder="Mật khẩu" required oninvalid="this.setCustomValidity('Bạn cần điền mật khẩu')" oninput="this.setCustomValidity('')">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <input class="login100-form-btn" type="submit" name="submit1" value="Đổi mật khẩu">
                    </div>
                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Quên mật khẩu liên hệ:
                        </span>

                        <p>
                            <i>(*) Điện thoại + zalo hỗ trợ:</i> <br>
                            <i><b>0367.282.676 - 0362.500.881</b></i>
                        </p>

                    </div>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <!--===============================================================================================-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <script src="vendor/tilt/tilt.jquery.min.js"></script>
</body>

</html>
