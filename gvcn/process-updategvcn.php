<?php
   
    include('../sql/connect.php');

        $magv = $_POST['magv'];
        $tengv = $_POST['tengv'];
        $sdt = $_POST['sdt'];
        $ngaysinh = $_POST['ngaysinh'];
        $gt = $_POST['gioitinh'];
        $diachi = $_POST['diachi'];
        $chucvu = $_POST['chucvu'];
        $lopcn = $_POST['lopcn'];
        $monday = $_POST['mon'];
        
        $sql = "UPDATE giao_vien set Hotengv= '$tengv' , Sdt = '$sdt' ,Ngaysinh ='$ngaysinh', Gioitinh = '$gt' , Diachi = '$diachi' , 
        Chucvu = '$chucvu' where Magv = '$magv'";
        $result = mysqli_query($conn,$sql);
        
        if($result>0)
        {
            header('location:../gvcn/thongtin.php');
        }
    
?>