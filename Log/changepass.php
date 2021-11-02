<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Change Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="post" action="../Log/login.php">
                    <span class="login100-form-title">
                        Hệ thống đăng nhập - Thay đổi mật khẩu
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="uPass" placeholder="Mật khẩu cũ" required oninvalid="this.setCustomValidity('Bạn cần điền tên đăng nhập')" oninput="this.setCustomValidity('')">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="uPass1" placeholder="Mật khẩu mới" required oninvalid="this.setCustomValidity('Bạn cần điền mật khẩu')" oninput="this.setCustomValidity('')">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="uPass2" placeholder="Nhập lại mật khẩu mới" required oninvalid="this.setCustomValidity('Bạn cần điền mật khẩu')" oninput="this.setCustomValidity('')">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <input class="login100-form-btn" type="submit" name="submit" value="Đổi mật khẩu">
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

                    <div class="text-center p-t-136">
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <!--===============================================================================================-->

</body>

</html>

<?php
//Gọi file kết nối cơ sở dữ liệu
require_once("../sql/connect.php");
// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["submit"])) {
    // lấy thông tin người dùng
    $username = $_SESSION['username'];
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

    $sql = "SELECT * from users where Accout = '$username' ";
    $query = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($query);

    if ($num_rows > 0) {
        $user = mysqli_fetch_assoc($query);
        if ($password == $user['Pass']) {
            if ($password1 != $password2) {
                echo "Mật khẩu bạn nhập lại chưa đúng";
            } else {
                if ($password1 == $password)
                {
                    $sql2 = "UPDATE users SET Pass = '$password1' Where Accout = '$username'";
                    $res2 = mysqli_query($conn, $sql2);
                    if($res2==true)
                    {
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                    }
                    else
                    {
                        echo "Chưa cập nhật thành công!";
                    }
                }
                else echo "Mật khẩu mới trùng mật khẩu cũ";
            }
        }
    }
}


?>