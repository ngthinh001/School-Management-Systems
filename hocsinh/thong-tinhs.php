<?php include('../partial-font/hearder_hs.php'); ?>
<br>
<div class="text-center">
    <div class="container">
        <h1><b>Thông tin  học sinh</b></h1>
        <br><br>
    </div>
</div>
<br>
<?php
    //kết nối với mysql
    include('../sql/connect.php');
    $ten = $_SESSION['username'] ;
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM hoc_sinh WHERE Hotenhs LIKE '%$ten%' AND Mahs LIKE '%$id%' ";
	$result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
        $mahs = $row['Mahs'];  
        $hoten = $row['Hotenhs'];
        $gioitinh= $row['Gioitinh'];
        $ngaysinh = $row['Ngaysinh'];
        $mal = $row['Mal'];
        $Hocki = $row['Hocky'];
       $namhoc = $row['Namhoc'];
       $sdtph = $row['Sdtph'];
        }
}
?>
<main>
    <div class="container">
        <form >
            <div class="mb-3">
                <label for="mahs" class="form-label">Mã học sinh</label>

                <input type="text" class="form-control" name="mahs" value="<?php echo $mahs; ?>">  
            </div> 
            <div class="mb-3">
                <label for="hoten" class="form-label">Họ và tên</label>
                
                <input type="text" class="form-control" name="hoten" value="<?php echo $hoten; ?>">
            </div>
            <div class="mb-3">
                <label for="gioitinh" class="form-label">Giới tính</label>
                <input type="text" class="form-control" name="gioitinh" value="<?php echo $gioitinh; ?>">
            </div>
            <div class="mb-3">
                <label for="ngaysinh" class="form-label"> Ngày sinh</label>
                <input type="text" class="form-control" name="ngaysinh" value="<?php echo $ngaysinh; ?>">
            </div>
            <div class="mb-3">
                <label for="mal" class="form-label">Mã lớp</label>
                <input type="text" class="form-control" name="mal" value="<?php echo $mal; ?>">
            </div>
            <div class="mb-3">
                <label for="hocki" class="form-label"> Học kì</label>
                <input type="text" class="form-control" name="hocki" value="<?php echo $Hocki; ?>">
            </div>
            <div class="mb-3">
                <label for="namhoc" class="form-label">Năm học</label>
                <input type="text" class="form-control" name="namhoc" value="<?php echo  $namhoc; ?>">
            </div>
            
            <div class="mb-3">
                <label for="sdtph" class="form-label">Số điện thoại phụ huynh</label>
                <input type="text" class="form-control" name="sdtph" value="<?php echo  $sdtph; ?>">
            </div>
           
        </form>
    </div>
</main>
<br><br>
<?php include('../partial-font/footer_hs.php');?>
