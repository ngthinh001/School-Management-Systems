
<?php session_start(); ?>
<?php include('hearder.php') ?>
<main>
<div class="container">
        <h2>Lịch học chi tiết </h2>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Mã môn học</th>
                    <th scope="col">Tên môn học</th>
                    <th scope="col">Mã lớp</th>
                    <th scope="col">Tiết</th>
                    <th scope="col">Ngày học</th>
                    <th scope="col">Học kì</th>
                    <th scope="col">Năm học</th>
                   
                    </tr>
                </thead>
                <?php 
                     //kết nối với mysql
                    include('../sql/connect.php');
                    
                    $id = $_SESSION['id'];
                    $sql = "SELECT * FROM lichday, monhoc WHERE lichday.Mamh= monhoc.Mamh AND Mal = (SELECT Mal FROM hoc_sinh WHERE Mahs LIKE '%$id%' ORDER BY NGAY ASC)";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td ><?php echo $row['Mamh']; ?></td>
                                <td><?php echo $row['Tenmh']; ?></td>
                                <td><?php echo $row['Mal']; ?></td>
                                <td><?php echo $row['Tiet']; ?></td>
                                <td><?php echo $row['Ngay']; ?></td>
                                <td><?php echo $row['Hocky']; ?></td>
                                <td><?php echo $row['Namhoc']; ?></td>
                            </tr>  
            <?php    
                    }
                }
            ?>
            </table>
            <?php
            //Bước 4: Đóng kết nối
             mysqli_close($conn);
             ?>
    </div>
</main>

</main>
<?php include('footer.php') ?>