<?php
    session_start();
    //kết nối với mysql
    include('connect.php');
    $ten = $_SESSION['username'] ;
    $pas = $_SESSION['password'];
    $sql = "select * from hocsinh where Hotenhs = '$ten' and Mahs=(select ID from nguoidung where Pass= '$pas') ";
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
       $tenph = $row['TenPhuHuynh'];
       $sdtph = $row['sdt_phuhuynh'];
        }
}

?>
<?php include('hearder.php'); ?>
<main>
    <div class="container">
        <h2>Thông tin học sinh</h2>
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
                <label for="tenph" class="form-label">Tên phụ huynh</label>
                <input type="text" class="form-control" name="tenph" value="<?php echo  $tenph; ?>">
            </div>
            <div class="mb-3">
                <label for="sdtph" class="form-label">Số điện thoại phụ huynh</label>
                <input type="text" class="form-control" name="sdtph" value="<?php echo  $sdtph; ?>">
            </div>
           
        </form>
    </div>
</main>

<?php include('footer.php');
?>