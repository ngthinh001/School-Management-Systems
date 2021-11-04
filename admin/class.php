<?php include '../partial-font/header_admin.php' ?>
<?php require_once '../config/dbcommand.php' ?>
<div class="row justify-content-center">
    <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section" style="margin-top: 30px;">Danh sách lớp</h2>
    </div>
</div>

<div class="row">
    <!-- <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section">Table #02</h2>
    </div> -->
</div>
<a href="../actions/acclass.php"><button class="btn btn-success">Thêm lớp</button></a>
<div class="row">
    <div class="input-group" style="display:flex;justify-content: end;">
        <div class="form-outline">
            <input id="search-focus" type="search" id="form1" class="form-control" />
            <label class="form-label" for="form1">Tìm kiếm lớp</label>
        </div>
        <button type="button" class="btn btn-primary">
            <i class="fas fa-search"></i>
        </button>
    </div>
</div>
<div class="row " style="margin-top: 20px;">
    <div class="col-md-12">
        <div class="table-wrap">
            <table class="table" style="border-style: dashed double solid; border-width: 8px">
                <thead class="thead-dark">
                    <tr>
                        <th>Mã lớp</th>
                        <th>Tên Lớp</th>
                        <th>Sĩ số </th>
                        <th>Giáo viên chủ nhiệm</th>
                        <th>Thao tác</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = 'select * from lop';
                    $classList = getListOfObject($sql);
                    foreach ($classList as $class) {
                        echo '<tr class="alert" role="alert">
                        <th scope="row">' . $class['Mal'] . '</th>
                        <td>' . $class['Ten_l'] . '</td>
                        <td>' . $class['Sohs'] . '</td>
                        <td>' . $class['Magv'] . '</td>                                              
                        <td>
                            <a href="../actions/acclass.php?id=' . $class['Mal'] . '" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" style="color: green"><i class="fas fa-user-edit"></i></span> 
                            </a>' ?>
                        <a onClick="return confirm('Bạn chắc chắn muốn xóa?');" href="../actions/delete.php?Mal=<?php echo $class['Mal']?>" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="color: red"><i class="fas fa-user-times"></i></span>
                        </a>
                        </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include '../partial-font/footer_admin.php' ?>