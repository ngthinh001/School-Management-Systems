<?php require_once '../config/dbcommand.php';

$id = '';
$s_mal = $s_tenl = $s_sohs = $s_magv = '';
if (isset($_GET['id'])) {
    $id          = $_GET['id'];
    $sql   = "select * from lop where Mal = '$id'";
    $classList = getListOfObject($sql);
    if ($classList != null && count($classList) > 0) {
        $class        = $classList[0];
        $s_mal = $class['Mal'];
        $s_tenl  = $class['Ten_l'];
        $s_sohs  = $class['Sohs'];
        $s_magv  = $class['Magv'];
    } else {
        $id = '';
    }
}
if (isset($_POST['btnSubCl'])) {
    $s_mal = $_POST['MaL'];
    $s_tenl = $_POST['TenL'];
    $s_sohs = $_POST['SoHs'];
    $s_magv = $_POST['Magv'];
    //chống sql inject
    //Xóa dấu '
    $s_mal = str_replace('\'', '\\\'', $s_mal);
    $s_tenl  = str_replace('\'', '\\\'', $s_tenl);
    $s_sohs  = str_replace('\'', '\\\'', $s_sohs);
    $s_magv   = str_replace('\'', '\\\'', $s_magv);

    if ($id != '') {
        //update
        $sql = "update lop set Ten_l = '$s_tenl', Sohs = '$s_sohs', Magv = '$s_magv' where Mal = '$id'";
    } else
        $sql = "insert into lop(Mal, Ten_l, Sohs, Magv) value ('$s_mal', '$s_tenl', '$s_sohs', '$s_magv')";

    if (execute($sql)) {
        header('Location: ../admin/class.php');
    } else
        die();
}


?>
<?php include '../partial-font/header_admin.php' ?>
<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Lớp</h2>
        </div>
        <div class="panel-body">
            <form method="post">
                <div class="form-group">
                    <label>Mã lớp</label>
                    <input required="true" type="text" class="form-control" name="MaL" value="<?php echo $s_mal ?>">
                </div>
                <div class="form-group">
                    <label>Tên lớp</label>
                    <input required="true" type="text" class="form-control" name="TenL" value="<?php echo $s_tenl ?>">
                </div>
                <div class="form-group">
                    <label>Số học sinh</label>
                    <input required="true" type="number" class="form-control" name="SoHs" value="<?php echo $s_sohs ?>">
                </div>
                <div class="form-group">
                    <label>Mã giáo viên</label>
                    <input required="true" type="text" class="form-control" name="Magv" value="<?php echo $s_magv ?>">
                </div>
                <br>
                <button class="btn btn-success" type="submit" name="btnSubCl">Lưu Thông Tin</button>
            </form>
        </div>
    </div>
</div>

<?php include '../partial-font/footer_admin.php' ?>