<?php include('../partial-font/header.php'); ?>
<div class="row"></div>
<div class="container-fluid " style="background-color: #ecf0f1; border-radius: 30px;">
    <div class="row g-1 p-5" style="margin-top: 20px;">
        <div class="col-1 p-3" style="display: flex; align-items: center ;">
            <img src="https://vietcodedi.com/theme/image.php/trema/core/1625239310/u/f1" style="border-radius: 40px;">
        </div>
        <div class="col-7 p-4">
            <h1>Admin</h1>
            <span>Admin</span>
        </div>
        <div class="col-4" style="display: flex; align-items: flex-end;justify-content: center;">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <a href="./dashboard.php"><button type="button" class="btn" style="color:black">Trang chủ</button></a>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                    <a href="./dashboard.php"><button type="button" class="btn " style="color:black">Gửi thông báo</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="background-color: #ecf0f1; border-radius: 30px; margin-top: 30px;">
    <div class="row">
        <!-- <div class="col-4 p-3" style="display: flex; align-items: flex-start;"> -->
        <h2 style="text-align: center; padding: 10px;">Chi tiết tài khoản</h2>
    </div>
    <!-- margin-left: 220px; -->
    <div class="container-fluid p-3">
        <div class="row align-items-start">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">Mã Tài khoản</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn " style="color:black" id="formButton">Sửa thông tin</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <form id="form1" style="display:none; margin-top: 10px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2">
                            <b>Mã Tài khoản: </b><br><br>
                            <b>Họ tên: </b><br><br>
                            <b>Địa chỉ: </b>
                        </div>
                        <div class="col-3">
                            <input type="text" name="firstName"><br><br>
                            <input type="text" name="lastName"><br><br>
                            <input type="text" name="lastName">&nbsp;
                            <button type="button" id="submit">Sửa</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>



    <?php include '../partial-font/footer.php' ?>