<?php include '../partial-font/header_admin.php' ?>
<?php require_once '../config/dbcommand.php' ?>
<div class="row justify-content-center">
    <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section" style="margin-top: 30px;">Danh sách môn học</h2>
    </div>
</div>

<div class="row">
    <!-- <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section">Table #02</h2>
    </div> -->
</div>
<a href="../actions/accsubject.php"><button class="btn btn-success">Thêm môn học</button></a>
<div class="row">
    <div class="input-group" style="display:flex;justify-content: end;">
        <div class="form-outline">
            <input id="search-focus" type="search" id="form1" class="form-control" />
            <label class="form-label" for="form1">Tìm kiếm môn học</label>
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
                        <th>Mã môn</th>
                        <th>Tên môn</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = 'select * from monhoc';
                    $subjectList = getListOfObject($sql);
                    foreach ($subjectList as $subject) {
                        echo '<tr class="alert" role="alert">
                        <th scope="row">' . $subject['Mamh'] . '</th>
                        <td>' . $subject['Tenmh'] . '</td>                                          
                        <td>
                        <a href="../actions/accsubject.php?id=' . $subject['Mamh'] . '" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" style="color: green"><i class="fas fa-user-edit"></i></span> 
                    </a>' ?>
                        <a onClick="return confirm('Bạn chắc chắn muốn xóa?');" href="../actions/delete.php?Mamh=<?php echo $subject['Mamh'] ?>" class="close" data-dismiss="alert" aria-label="Close">
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