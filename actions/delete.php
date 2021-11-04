<?php
require_once '../config/dbcommand.php';
if (isset($_GET['Mal'])) {
    $id = $_GET['Mal'];
    $sqlLop = "delete from lop where Mal='$id' ";
    try {
        if (execute($sqlLop))
            echo '<script>location.replace("../admin/class.php")</script>';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else if (isset($_GET['Magv'])) {
    $idGV = $_GET['Magv'];
    $sqlGV = "delete from giao_vien where Magv='$idGV' ";
    try {
        if (execute($sqlGV))
            echo '<script>location.replace("../admin/teacher.php")</script>';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else if (isset($_GET['Mahs'])) {
    $idhs = $_GET['Mahs'];
    $sqlHS = "delete from hoc_sinh where Mahs='$idhs' ";
    try {
        if (execute($sqlHS))
            echo '<script>location.replace("../admin/student.php")</script>';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else if (isset($_GET['Mamh'])) {
    $idmh = $_GET['Mamh'];
    $sqlMH = "delete from monhoc where Mamh='$idmh' ";
    try {
        if (execute($sqlMH))
            echo '<script>location.replace("../admin/subject.php")</script>';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else if (isset($_GET['Magvld']) && isset($_GET['Mamhld']) && isset($_GET['Malld'])) {
    $Magvld = $_GET['Magvld'];
    $Mamhld = $_GET['Mamhld'];
    $Malld = $_GET['Malld'];
    $sqlLD = "delete from lichday where Mamh='$Mamhld' and Magv='$Magvld' and Mal='$Malld'  ";
    try {
        if (execute($sqlLD))
            echo '<script>location.replace("../admin/schedule.php")</script>';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else if (isset($_GET['Mahst']) && isset($_GET['Mamht'])) {
    $Mahst = $_GET['Mahst'];
    $Mamht = $_GET['Mamht'];
    $sqlLD = "delete from thi where Mamh='$Mamht' and Mahs='$Mahst'";
    try {
        if (execute($sqlLD))
            echo '<script>location.replace("../admin/test.php")</script>';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
