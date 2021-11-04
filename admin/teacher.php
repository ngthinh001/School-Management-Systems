<?php include '../partial-font/header_admin.php' ?>
<?php require_once '../config/dbcommand.php' ?>
<div class="row justify-content-center">
    <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section" style="margin-top: 30px;">Danh sách giáo viên</h2>
    </div>
</div>

<div class="row">
    <!-- <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section">Table #02</h2>
    </div> -->
</div>
<a href="../actions/accteacher.php"><button class="btn btn-success">Thêm giáo viên</button></a>
<div class="row">
    <div class="input-group" style="display:flex;justify-content: end;">
        <div class="form-outline">
            <input id="search-focus" type="search" id="form1" class="form-control" />
            <label class="form-label" for="form1">Tìm kiếm giáo viên</label>
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
                        <th>Mã giáo viên</th>
                        <th>Tên giáo viên</th>
                        <th>Ngày sinh </th>
                        <th>Giới tính</th>
                        <th>Địa chỉ</th>
                        <th>Chức vụ</th>
                        <th>Số điện thoại</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = 'select * from giao_vien';
                    $teacherList = getListOfObject($sql);
                    foreach ($teacherList as $teacher) {
                        echo '<tr class="alert" role="alert">
                        <th scope="row">' . $teacher['Magv'] . '</th>
                        <td>' . $teacher['Hotengv'] . '</td>
                        <td>' . $teacher['Ngaysinh'] . '</td>
                        <td>' . $teacher['Gioitinh'] . '</td>
                        <td>' . $teacher['Diachi'] . '</td>
                        <td>' . $teacher['Chucvu'] . '</td>
                        <td>' . $teacher['Sdt'] . '</td>                      
                        <td>
                        <a href="../actions/accteacher.php?id=' . $teacher['Magv'] . '" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" style="color: green"><i class="fas fa-user-edit"></i></span> 
                    </a>' ?>
                        <a onClick="return confirm('Bạn chắc chắn muốn xóa?');" href="../actions/delete.php?Magv=<?php echo $teacher['Magv'] ?>" class="close" data-dismiss="alert" aria-label="Close">
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