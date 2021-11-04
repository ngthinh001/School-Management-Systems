<?php require_once '../config/dbcommand.php';

$id = '';
$s_mamh = $s_tenmh = '';
if (isset($_GET['id'])) {
    $id          = $_GET['id'];
    $sql   = "select * from monhoc where Mamh = '$id'";
    $subjectList = getListOfObject($sql);
    if ($subjectList != null && count($subjectList) > 0) {
        $sub        = $subjectList[0];
        $s_mamh = $sub['Mamh'];
        $s_tenmh  = $sub['Tenmh'];       
    } else {
        $id = '';
    }
}
if (isset($_POST['btnSubmitSub'])) {
    $s_mamh = $_POST['Mamh'];
    $s_tenmh = $_POST['Tenmh'];  
    //chống sql inject
    //Xóa dấu '
    $s_mamh = str_replace('\'', '\\\'', $s_mamh);
    $s_tenmh  = str_replace('\'', '\\\'', $s_tenmh);

    if ($id != '') {
        // update
        $sql = "update monhoc set Tenmh = '$s_tenmh' where Mamh = '$id'";
    } else
        $sql = "insert into monhoc(Mamh, Tenmh) value ('$s_mamh', '$s_tenmh')";

    try {
        if (execute($sql))
            echo '<script>location.replace("../admin/subject.php")</script>';
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
                    <label>Mã môn học</label>
                    <input required="true" type="text" class="form-control" name="Mamh" value="<?php echo $s_mamh ?>">
                </div>
                <div class="form-group">
                    <label>Tên môn học</label>
                    <input required="true" type="text" class="form-control" name="Tenmh" value="<?php echo $s_tenmh ?>">
                </div>                
                <br>
                <button class="btn btn-success" type="submit" name="btnSubmitSub">Lưu Thông Tin</button>
            </form>
        </div>
    </div>
</div>
<?php include '../partial-font/footer_admin.php' ?>