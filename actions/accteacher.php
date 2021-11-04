<?php require_once '../config/dbcommand.php';

$id = '';
$s_magv = $s_tengv = $s_nsinh = $s_gtinh = $s_dchi = $s_chvu = $s_sdt = '';
if (isset($_GET['id'])) {
    $id          = $_GET['id'];
    $sql   = "select * from giao_vien where Magv = '$id'";
    $classList = getListOfObject($sql);
    if ($classList != null && count($classList) > 0) {
        $class        = $classList[0];
        $s_magv = $class['Magv'];
        $s_tengv  = $class['Hotengv'];
        $s_nsinh  = $class['Ngaysinh'];
        $s_gtinh  = $class['Gioitinh'];
        $s_dchi  = $class['Diachi'];
        $s_chvu  = $class['Chucvu'];
        $s_sdt  = $class['Sdt'];
    } else {
        $id = '';
    }
}
if (isset($_POST['btnSubmit'])) {
    $s_magv = $_POST['Magv'];
    $s_tengv = $_POST['Hotengv'];
    $s_nsinh = $_POST['Ngaysinh'];
    $s_gtinh = $_POST['Gioitinh'];
    $s_dchi = $_POST['Diachi'];
    $s_chvu = $_POST['Chucvu'];
    $s_sdt  = $_POST['Sdt'];
    //chống sql inject
    //Xóa dấu '
    $s_magv = str_replace('\'', '\\\'', $s_magv);
    $s_tengv  = str_replace('\'', '\\\'', $s_tengv);
    $s_nsinh  = str_replace('\'', '\\\'', $s_nsinh);
    $s_gtinh   = str_replace('\'', '\\\'', $s_gtinh);
    $s_dchi   = str_replace('\'', '\\\'', $s_dchi);
    $s_chvu   = str_replace('\'', '\\\'', $s_chvu);
    $s_sdt   = str_replace('\'', '\\\'', $s_sdt);

    if ($id != '') {
        // update
        $sql = "update giao_vien set Hotengv = '$s_tengv', Ngaysinh = '$s_nsinh', Gioitinh = '$s_gtinh', Diachi = '$s_dchi', Chucvu = '$s_chvu',Sdt = '$s_sdt' where Magv = '$id'";
    } else
        $sql = "insert into giao_vien(Magv, Hotengv, Ngaysinh, Gioitinh, Diachi, Chucvu, Sdt) value ('$s_magv', '$s_tengv', '$s_nsinh', '$s_gtinh', '$s_dchi', '$s_chvu', '$s_sdt')";

    try {
        if (execute($sql))
            echo '<script>location.replace("../admin/teacher.php")</script>';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


?>
<?php include '../partial-font/header_admin.php' ?>
<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Giáo Viên</h2>
        </div>
        <div class="panel-body">
            <form method="post">
                <div class="form-group">
                    <label>Mã giáo viên</label>
                    <input required="true" type="text" class="form-control" name="Magv" value="<?php echo $s_magv ?>">
                </div>
                <div class="form-group">
                    <label>Tên giáo viên</label>
                    <input required="true" type="text" class="form-control" name="Hotengv" value="<?php echo $s_tengv ?>">
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
                    <label>Địa chỉ</label>
                    <input required="true" type="text" class="form-control" name="Diachi" value="<?php echo $s_dchi ?>">
                </div>
                <div class="form-group">
                    <label>Chức vụ</label>
                    <input required="true" type="text" class="form-control" name="Chucvu" value="<?php echo $s_chvu ?>">
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input required="true" type="number" class="form-control" name="Sdt" value="<?php echo $s_sdt ?>">
                </div>
                <br>
                <button class="btn btn-success" type="submit" name="btnSubmit">Lưu Thông Tin</button>
            </form>
        </div>
    </div>
</div>
<?php include '../partial-font/footer_admin.php' ?>