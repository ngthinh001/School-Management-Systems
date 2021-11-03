<?php session_start(); ?>
<?php
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

<<<<<<< HEAD
    $sql = "SELECT * from users where ID = '$username' and Pass = '$password' ";
=======
    $sql = "SELECT * from users where Accout = '$username' and Pass = '$password' ";
>>>>>>> 05251f1b54c9d99ca39ac3dd8ca6e3d0719051a2
    $query = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($query);

    if ($num_rows > 0) {
        $user = mysqli_fetch_assoc($query);

        $_SESSION['username'] = $username;
        $_SESSION['level'] = $user['Level'];
        $_SESSION['id'] = $user['ID'];
        switch ($user['Level']) {
            case 1:
                header('Location: ../admin');
                break;
            case 2:
<<<<<<< HEAD
                header('Location: ../gvcn/index.php');
                break;
            case 3:
                header('Location: ../gvbm/index.php');
                break;
            case 4:
                header('Location: ../hocsinh/index.php');
=======
                header('Location: ../gvcn');
                break;
            case 3:
                header('Location: ../gvbm');
                break;
            case 4:
                header('Location: ../hocsinh');
>>>>>>> 05251f1b54c9d99ca39ac3dd8ca6e3d0719051a2
                break;
        }
    } else {  ?>
        <script type="text/javascript">    
            option = confirm('Mật khẩu hoặc tài khoản bị sai!');
            location.replace('../Log/login.php');
        </script>
<?php
    }
}
?>