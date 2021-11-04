<?php require_once '../config/dbcommand.php';

$id = '';
$s_mahs = $s_tenhs = $s_nsinh = $s_gtinh = $s_Sdtph = $s_Mal = $s_Hocky = $s_Namhoc = '';
if (isset($_GET['id'])) {
    $id          = $_GET['id'];
    $sql   = "select * from hoc_sinh where Mahs = '$id'";
    $studentList = getListOfObject($sql);
    if ($studentList != null && count($studentList) > 0) {
        $std        = $studentList[0];
        $s_mahs = $std['Mahs'];
        $s_tenhs  = $std['Hotenhs'];
        $s_nsinh  = $std['Ngaysinh'];
        $s_gtinh  = $std['Gioitinh'];
        $s_Sdtph  = $std['Sdtph'];
        $s_Mal  = $std['Mal'];
        $s_Hocky  = $std['Hocky'];
        $s_Namhoc  = $std['Namhoc'];
    } else {
        $id = '';
    }
}
if (isset($_POST['btnSubmitStd'])) {
    $s_mahs = $_POST['Mahs'];
    $s_tenhs = $_POST['Hotenhs'];
    $s_nsinh = $_POST['Ngaysinh'];
    $s_gtinh = $_POST['Gioitinh'];
    $s_Sdtph = $_POST['Sdtph'];
    $s_Mal  = $_POST['Mal'];
    $s_Hocky = $_POST['Hocky'];
    $s_Namhoc  = $_POST['Namhoc'];
    //chống sql inject
    //Xóa dấu '
    $s_mahs = str_replace('\'', '\\\'', $s_mahs);
    $s_tenhs  = str_replace('\'', '\\\'', $s_tenhs);
    $s_nsinh  = str_replace('\'', '\\\'', $s_nsinh);
    $s_gtinh   = str_replace('\'', '\\\'', $s_gtinh);
    $s_Sdtph   = str_replace('\'', '\\\'', $s_Sdtph);
    $s_Mal   = str_replace('\'', '\\\'', $s_Mal);
    $s_Hocky   = str_replace('\'', '\\\'', $s_Hocky);
    $s_Namhoc   = str_replace('\'', '\\\'', $s_Namhoc);

    if ($id != '') {
        // update
        $sql = "update hoc_sinh set Hotenhs = '$s_tenhs', Ngaysinh = '$s_nsinh', Gioitinh = '$s_gtinh', Sdtph = '$s_Sdtph', Mal = '$s_Mal',Hocky = '$s_Hocky',Namhoc = '$s_Namhoc' where Mahs = '$id'";
    } else
        $sql = "insert into hoc_sinh(Mahs, Hotenhs, Ngaysinh, Gioitinh, Sdtph, Mal, Hocky, Namhoc) value ('$s_mahs', '$s_tenhs', '$s_nsinh', '$s_gtinh', '$s_Sdtph', '$s_Mal', '$s_Hocky','$s_Namhoc')";

    try {
        if (execute($sql))
            echo '<script>location.replace("../admin/student.php")</script>';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


?>
<?php include '../partial-font/header_admin.php' ?>
<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Học sinh</h2>
        </div>
        <div class="panel-body">
            <form method="post">
                <div class="form-group">
                    <label>Mã học sinh</label>
                    <input required="true" type="text" class="form-control" name="Mahs" value="<?php echo $s_mahs ?>">
                </div>
                <div class="form-group">
                    <label>Tên học sinh</label>
                    <input required="true" type="text" class="form-control" name="Hotenhs" value="<?php echo $s_tenhs ?>">
                </div>
                <div class="form-group">
                    <label>Ngày sinh</label>
                    <input required="true" type="date" class="form-control" name="Ngaysinh" value="<?php echo $s_nsinh ?>">
                </div>
                <div class="form-group">
                    <label>Giới tính</label>
                    <input required="true" type="text" class="form-control" name="Gioitinh" value="<?php echo $s_gtinh ?>">
                </div>
                <div class="form-group">
                    <label>Số điện thoại phụ huynh</label>
                    <input required="true" type="number" class="form-control" name="Sdtph" value="<?php echo $s_Sdtph ?>">
                </div>
                <div class="form-group">
                    <label>Mã lớp</label>
                    <input required="true" type="text" class="form-control" name="Mal" value="<?php echo $s_Mal ?>">
                </div>
                <div class="form-group">
                    <label>Học kỳ</label>
                    <input required="true" type="number" class="form-control" name="Hocky" value="<?php echo $s_Hocky ?>">
                </div>
                <div class="form-group">
                    <label>Năm học</label>
                    <input required="true" type="text" class="form-control" name="Namhoc" value="<?php echo $s_Namhoc ?>">
                </div>
                <br>
                <button class="btn btn-success" type="submit" name="btnSubmitStd">Lưu Thông Tin</button>
            </form>
        </div>
    </div>
</div>
<?php include '../partial-font/footer_admin.php' ?>