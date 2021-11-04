<?php require_once '../config/dbcommand.php';

$id = '';
$s_mamht = $s_sbd = $s_ngaythi = $s_phongthi = $s_giothi = '';
if (isset($_GET['id']) && isset($_GET['Mamht'])) {
    $id          = $_GET['id'];
    $s_mamht          = $_GET['Mamht'];
    $sql   = "select * from thi where Mamh = '$s_mamht' and Mahs='$id'";
    $testList = getListOfObject($sql);
    if ($testList != null && count($testList) > 0) {
        $test        = $testList[0];    
        $s_sbd  = $test['Sbd'];
        $s_ngaythi  = $test['Ngaythi'];
        $s_phongthi  = $test['Phongthi'];
        $s_giothi  = $test['Giothi'];
    } else {
        $id = '';
    }
}
if (isset($_POST['btnSubmitTest'])) {
    $s_mahsP = $_POST['Mahs'];
    $s_mamhP = $_POST['Mamh'];
    $s_sbd  = $_POST['Sbd'];
    $s_ngaythi  = $_POST['Ngaythi'];
    $s_phongthi  = $_POST['Phongthi'];
    $s_giothi  = $_POST['Giothi'];
    //chống sql inject
    //Xóa dấu '
    $s_mahsP = str_replace('\'', '\\\'', $s_mahsP);
    $s_mamhP  = str_replace('\'', '\\\'', $s_mamhP);
    $s_sbd = str_replace('\'', '\\\'', $s_sbd);
    $s_ngaythi  = str_replace('\'', '\\\'', $s_ngaythi);
    $s_phongthi = str_replace('\'', '\\\'', $s_phongthi);
    $s_giothi  = str_replace('\'', '\\\'', $s_giothi);


    if ($id != '' && $s_mamht != '') {
        // update
        $sql = "update thi set Sbd = '$s_sbd', Ngaythi = '$s_ngaythi', Phongthi = '$s_phongthi', Giothi = '$s_giothi' where Mahs = '$s_mahsP' and Mamh = '$s_mamhP'";
    } else
        $sql = "insert into thi(Mahs, Mamh, Sbd, Ngaythi, Phongthi, Giothi) value ('$s_mahsP', '$s_mamhP', '$s_sbd', '$s_ngaythi', '$s_phongthi', '$s_giothi')";

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
            <h2 class="text-center">Thi</h2>
        </div>
        <div class="panel-body">
            <form method="post">
                <div class="form-group">
                    <label>Mã học sinh</label>
                    <input required="true" type="text" class="form-control" name="Mahs" value="<?php echo $id ?>">
                </div>
                <div class="form-group">
                    <label>Mã môn học</label>
                    <input required="true" type="text" class="form-control" name="Mamh" value="<?php echo $s_mamht ?>">
                </div>
                <div class="form-group">
                    <label>Số báo danh</label>
                    <input required="true" type="text" class="form-control" name="Sbd" value="<?php echo $s_sbd ?>">
                </div>
                <div class="form-group">
                    <label>Ngày thi</label>
                    <input required="true" type="date" class="form-control" name="Ngaythi" value="<?php echo $s_ngaythi ?>">
                </div>
                <div class="form-group">
                    <label>Phòng thi </label>
                    <input required="true" type="text" class="form-control" name="Phongthi" value="<?php echo $s_phongthi ?>">
                </div>
                <div class="form-group">
                    <label>Giờ thi</label>
                    <input required="time" type="time" class="form-control" name="Giothi" value="<?php echo $s_giothi ?>">
                </div>                
                <br>
                <button class="btn btn-success" type="submit" name="btnSubmitTest">Lưu Thông Tin</button>
            </form>
        </div>
    </div>
</div>
<?php include '../partial-font/footer_admin.php' ?>