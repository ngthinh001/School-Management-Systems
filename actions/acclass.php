<?php require_once '../config/dbcommand.php' ?>
<?php

if (!empty($_POST)) {
    $s_mal = $s_tenl = $s_sohs = $s_magv = '';

    if (isset($_POST['MaL'])) {
        $s_mal = $_POST['MaL'];
    }

    if (isset($_POST['TenL'])) {
        $s_tenl = $_POST['TenL'];
    }

    if (isset($_POST['SoHs'])) {
        $s_sohs = $_POST['SoHs'];
    }

    if (isset($_POST['Magv'])) {
        $s_magv = $_POST['Magv'];
    }

    //chống sql inject
    $s_mal = str_replace('\'', '\\\'', $s_mal);
    $s_tenl      = str_replace('\'', '\\\'', $s_tenl);
    $s_sohs  = str_replace('\'', '\\\'', $s_sohs);
    $s_magv       = str_replace('\'', '\\\'', $s_magv);
    //Xóa dấu '

    if ($s_mal != '' && $s_magv != '') {
        //insert
        $sql = "insert into lop(Mal, Ten_l, Sohs, Magv) value ('$s_mal', '$s_tenl', '$s_sohs', '$s_magv')";
    }

    if (execute($sql)) {
        header('Location: ../admin/class.php');
    } else
        die();
}
?>
<?php include '../partial-font/header.php' ?>
<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Lớp</h2>
        </div>
        <div class="panel-body">
            <form method="post">
                <div class="form-group">
                    <label>Mã lớp:</label>
                    <input required="true" type="text" class="form-control" name="MaL">
                </div>
                <div class="form-group">
                    <label>Tên lớp</label>
                    <input required="true" type="text" class="form-control" name="TenL">
                </div>
                <div class="form-group">
                    <label>Số học sinh</label>
                    <input required="true" type="number" class="form-control" name="SoHs">
                </div>
                <div class="form-group">
                    <label>Mã giáo viên</label>
                    <input required="true" type="text" class="form-control" name="Magv">
                </div>
                <br>
                <button class="btn btn-success">Thêm mới</button>
            </form>
        </div>
    </div>
</div>

<?php include '../partial-font/footer.php' ?>