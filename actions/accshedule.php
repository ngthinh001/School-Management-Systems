<?php require_once '../config/dbcommand.php';

$id = '';
$s_magv = $s_mamh = $s_mal = $s_tiet = $s_ngay = $s_hocky = $s_namhoc = '';
if (isset($_GET['id']) || isset($_GET['Mal']) || isset($_GET['Mamh'])) {
    $id          = $_GET['id'];
    $s_mal          = $_GET['Mal'];
    $s_mamh          = $_GET['Mamh'];
    $sql   = "select * from lichday where Mamh = '$s_mamh' and Magv='$id' and Mal='$s_mal '";
    $scheduleList = getListOfObject($sql);
    if ($scheduleList != null && count($scheduleList) > 0) {
        $schedule        = $scheduleList[0];
        $s_mamh = $schedule['Mamh'];
        $s_magv  = $schedule['Magv'];
        $s_mal  = $schedule['Mal'];
        $s_tiet  = $schedule['Tiet'];
        $s_ngay  = $schedule['Ngay'];
        $s_hocky  = $schedule['Hocky'];
        $s_namhoc  = $schedule['Namhoc'];
    } else {
        $id = '';
    }
}
if (isset($_POST['btnSubmitSche'])) {
    $s_mamhP = $_POST['Mamh'];
    $s_magvP  = $_POST['Magv'];
    $s_malP  = $_POST['Mal'];
    $s_tiet  = $_POST['Tiet'];
    $s_ngay  = $_POST['Ngay'];
    $s_hocky  = $_POST['Hocky'];
    $s_namhoc  = $_POST['Namhoc'];
    //chống sql inject
    //Xóa dấu '
    $s_mamhP = str_replace('\'', '\\\'', $s_mamhP);
    $s_magvP  = str_replace('\'', '\\\'', $s_magvP);
    $s_malP = str_replace('\'', '\\\'', $s_malP);
    $s_tiet  = str_replace('\'', '\\\'', $s_tiet);
    $s_ngay = str_replace('\'', '\\\'', $s_ngay);
    $s_hocky  = str_replace('\'', '\\\'', $s_hocky);
    $s_namhoc = str_replace('\'', '\\\'', $s_namhoc);


    if ($id != '' && $s_mamh != '' && $s_mal != '') {
        // update
        $sql = "update lichday set Tiet = '$s_tiet', Ngay = '$s_ngay', Hocky = '$s_hocky', Namhoc = '$s_namhoc' where Mamh = '$s_mamh' and Magv = '$id' and Mal = '$s_mal'";
    } else
        $sql = "insert into lichday(Magv, Mamh, Mal, Tiet, Ngay, Hocky, Namhoc) value ('$s_magvP', '$s_mamhP', '$s_malP', '$s_tiet', '$s_ngay', '$s_hocky', '$s_namhoc')";

    try {
        if (execute($sql))
            echo '<script>location.replace("../admin/schedule.php")</script>';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>
<?php include '../partial-font/header_admin.php' ?>
<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Môn học</h2>
        </div>
        <div class="panel-body">
            <form method="post">
                <div class="form-group">
                    <label>Mã giảng viên</label>
                    <input required="true" type="text" class="form-control" name="Magv" value="<?php echo $s_magv ?>">
                </div>
                <div class="form-group">
                    <label>Mã môn học</label>
                    <input required="true" type="text" class="form-control" name="Mamh" value="<?php echo $s_mamh ?>">
                </div>
                <div class="form-group">
                    <label>Mã lớp</label>
                    <input required="true" type="text" class="form-control" name="Mal" value="<?php echo $s_mal ?>">
                </div>
                <div class="form-group">
                    <label>Tiết</label>
                    <input required="true" type="text" class="form-control" name="Tiet" value="<?php echo $s_tiet ?>">
                </div>
                <div class="form-group">
                    <label>Ngày </label>
                    <input required="true" type="date" class="form-control" name="Ngay" value="<?php echo $s_ngay ?>">
                </div>
                <div class="form-group">
                    <label>Học kỳ</label>
                    <input required="true" type="number" class="form-control" name="Hocky" value="<?php echo $s_hocky ?>">
                </div>
                <div class="form-group">
                    <label>Năm học</label>
                    <input required="true" type="text" class="form-control" name="Namhoc" value="<?php echo $s_namhoc ?>">
                </div>
                <br>
                <button class="btn btn-success" type="submit" name="btnSubmitSche">Lưu Thông Tin</button>
            </form>
        </div>
    </div>
</div>
<?php include '../partial-font/footer_admin.php' ?>