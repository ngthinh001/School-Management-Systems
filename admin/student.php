<?php include '../partial-font/header_admin.php';
?>
<?php require_once '../config/dbcommand.php' ?>

<div class="row justify-content-center">
    <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section" style="margin-top: 30px;">Danh sách học sinh</h2>
    </div>
</div>
<a href="../actions/accstudent.php"><button class="btn btn-success">Thêm học sinh</button></a>
<div class="row">
    <!-- <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section">Table #02</h2>
    </div> -->
</div>
<div class="row">
    <div class="input-group" style="display:flex;justify-content: end;">
        <div class="form-outline">
            <input id="search-focus" type="search" id="form1" class="form-control" />
            <label class="form-label" for="form1">Tìm kiếm học sinh</label>
        </div>
        <button type="button" class="btn btn-primary">
            <i class="fas fa-search"></i>
        </button>
    </div>
    <br>
    <div class="col-md-12">
        <div class="table-wrap">
            <table class="table" style="border-style: dashed double solid; border-width: 8px">
                <thead class="thead-dark">
                    <tr>
                        <th>Mã học sinh</th>
                        <th>Tên học sinh</th>
                        <th>Ngày sinh </th>
                        <th>Giới tính</th>
                        <th>Số điện thoại</th>
                        <th>Mã lớp</th>
                        <th>Học kỳ</th>
                        <th>Năm học</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = 'select * from hoc_sinh';
                    $studentList = getListOfObject($sql);
                    foreach ($studentList as $std) {
                        echo '<tr class="alert" role="alert">
                        <th scope="row">' . $std['Mahs'] . '</th>
                        <td>' . $std['Hotenhs'] . '</td>
                        <td>' . $std['Ngaysinh'] . '</td>
                        <td>' . $std['Gioitinh'] . '</td>
                        <td>' . $std['Sdtph'] . '</td>
                        <td>' . $std['Mal'] . '</td>
                        <td>' . $std['Hocky'] . '</td>
                        <td>' . $std['Namhoc'] . '</td>                        
                        <td>
                        <a href="../actions/accstudent.php?id=' . $std['Mahs'] . '" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" style="color: green"><i class="fas fa-user-edit"></i></span> 
                    </a>' ?>
                        <a onClick="return confirm('Bạn chắc chắn muốn xóa?');" href="../actions/delete.php?Mahs=<?php echo $std['Mahs'] ?>" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="color: red"><i class="fas fa-user-times"></i></span>
                        </a>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<?php include '../partial-font/footer_admin.php' ?>