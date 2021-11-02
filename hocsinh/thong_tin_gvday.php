
<?php
    session_start();
?>

<?php include('hearder.php'); ?>
<main>
    <div class="container">
        <h2>Danh sách giáo viên dạy lớp </h2>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Mã giáo viên</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Địa Chỉ</th>
                    <th scope="col">Dạy môn</th>
                    
                   
                    </tr>
                </thead>
                <?php 
                     //kết nối với mysql
                    include('../sql/connect.php');
                    $ten = $_SESSION['username'] ;
                    $pas = $_SESSION['password'];
                    $id = $_SESSION['id'];
                    $sql = "SELECT * FROM giao_vien, monhoc, lichday WHERE  giao_vien.Magv = lichday.Magv AND monhoc.Mamh=lichday.Mamh AND
                             Mal= (SELECT Mal FROM hoc_sinh WHERE Mahs LIKE '%$id%')";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $magv = $row['Magv'];  
                            $hoten = $row['Hotengv'];
                            $gioitinh= $row['Gioitinh'];
                            $ngaysinh = $row['Ngaysinh'];
                            $Diachi = $row['Diachi'];
                            $Tenmon = $row['Tenmh'];
                            }
                    }
                ?>
                <tbody>
                    <tr>
                    <th ><?php echo $magv; ?></th>
                    <td><?php echo $hoten; ?></td>
                    <td><?php echo $gioitinh; ?></td>
                    <td><?php echo $ngaysinh; ?></td>
                    <td><?php echo $Diachi; ?></td>
                    <td><?php echo $Tenmon; ?></td>
                    
                    </tr>
                    
                </tbody>
            </table>
            <?php
            //Bước 4: Đóng kết nối
             mysqli_close($conn);
             ?>
    </div>
</main>

<?php include('footer.php');

?>