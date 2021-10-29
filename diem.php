<?php include 'gv/gvcn.php' ?>
<br>
<div class="text-center">
    <div class="container">
        <h1><b>Danh sách điểm của học sinh</b></h1>
        <br><br>
    </div>
</div>
<div class="container text-center">
    <form action="diem.php" method="POST" style="float:center">
        <i class="bi bi-search"></i>
        Theo môn học: <input type="search" name="mon">
        <a href="#" class="btn btn-primary">Tìm kiếm</a>
    </form>
</div>
<br><br>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Họ tên học sinh</th>
                <th scope="col">Điểm số</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>...</td>
             <td>...</td>
             <td>
             <a href="#" class="btn btn-success">Cập nhật điểm</a>
             </td>
            </tr>
        </tbody>
    </table>
</div>


<?php include 'gv/footer.php' ?>