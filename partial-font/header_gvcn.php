<?php session_start(); 
  if(!isset($_SESSION['username']))
  {
      header("Location: ../Log/login.php");
  }?>

<?php include '../sql/connect.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link rel="stylesheet" href="../assets/Css/style.css">

</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bi bi-list' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://w7.pngwing.com/pngs/518/320/png-transparent-computer-icons-mobile-app-development-android-my-account-icon-blue-text-logo.png" alt="avatar"> </div>

    <div class="action">
        <div class="menu" id="image">
            <h3><?php echo $_SESSION['username'] ?> <br><span>Giáo viên chủ nhiệm/ bộ môn</span> </h3>
            <ul>
                <il><i class="bi bi-person-lines-fill"></i>&nbsp;&nbsp;<a class="menu_icon" href="../gvcn/thongtin.php">Hồ sơ <br></a></il>
                <il><i class="fas fa-unlock-alt"></i>&nbsp;&nbsp;<a class="menu_icon" href="../Log/changepass.php">Đổi mật khẩu</a><br></il>
                <il><i class="bi bi-box-arrow-in-right"></i>&nbsp;&nbsp;<a class="menu_icon" href="../Log/logout.php">Đăng xuất</a></il>
            </ul>
        </div>
    </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class="bi bi-stack nav_logo-icon"></i> <span class="nav_logo-name">High School</span> </a>
                <div class="nav_list">
                    <a href="../gvcn/index.php" class="nav_link active">
                        <i class='bi bi-house-door nav_logo-icon'></i>
                        <span class="nav_name">Trang chủ</span> </a>
                    <a href="../gvcn/diem.php" class="nav_link">
                        <i class='bi bi-upload nav_logo-icon'></i>
                        <span class="nav_name">Cập nhật điểm của học sinh</span> </a>
                    <a href="../gvcn/lichday.php" class="nav_link">
                        <i class='bi bi-calendar3 nav_logo-icon'></i>
                        <span class="nav_name">Lịch giảng dạy</span> </a>
                    <a href="../gvcn/dshs.php" class="nav_link">
                        <i class='bi bi-menu-button nav_logo-icon'></i>
                        <span class="nav_name">Danh sách học sinh trong lớp</span> </a>
                    <a href="../gvcn/dsgv.php" class="nav_link">
                        <i class='bi bi-people nav_logo-icon'></i>
                        <span class="nav_name">Danh sách giáo viên dạy lớp</span> </a>
                    <a href="../gvcn/chat.php" class="nav_link">
                        <i class='bi bi-messenger nav_logo-icon'></i>
                        <span class="nav_name">Chat</span> </a>
                </div>
            </div>
        </nav>
    </div>