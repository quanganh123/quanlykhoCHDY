<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 0.1">
    <link rel="stylesheet" href="QLkhoCHDT.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Quản Lý Kho Cửa Hàng Điện Thoại</title>
</head>

<body>
    <div class="row">
        <div class="col-sm-2 text-center pt-5">
            <h4 class="col-sm text-danger">Quản Lý Kho Cửa Hàng Điện Thoại</h4>
        </div>
        <div class="col-sm-10">
            <div class="menu">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="#">Quản Lý Kho Cửa Hàng Điện Thoại</a>
                    </li>
                    <li class="nav-item dropdown col-sm-1">
                        <a class="dropdown-toggle text-secondary btn btn-outline-secondary" data-toggle="dropdown" href="">Menu</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="http://localhost/code/QLkhoCHDT">Quản Lý Admin</a>
                            <a class="dropdown-item" href="http://localhost/code/QLkhoCHDT1">Quản Điện Thoại Ios</a>
                            <a class="dropdown-item" href="http://localhost/code/QLkhoCHDT2">Quản Lý Điện Thoại Android</a>
                        </div>
                    </li>
                    <li class="col-sm-7"></li>
                    <li class="nav-item">
                        <a class="btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn thoát!');" href="/code/index.php">Disabled</a>
                    </li>
                </ul>
            </div>
            <div class="text-center text-danger pt-5 my-4">
                <h4>Quản Lý Kho Cửa Hàng Điện Thoại</h4>
            </div>
            <div class="container">
                <div class="input-group mb-3 col-sm-3">
                    <input type="text" class="form-control" id="myInput" placeholder="Search">
                </div>
                <table class="table table-striped table-hover table-sm text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Họ và Tên</th>
                            <th>Mã Admin</th>
                            <th>User_name</th>
                            <th>Password</th>
                            <th></th>
                            <th><a class="btn btn-outline-success" href="FromAddmewAdmin.php">Thêm mới</a></th>
                        </tr>
                    </thead>
                    <tbody class="myTable">
                        <?php foreach ($ListAdmin as $Admin) { ?>
                            <tr>
                                <td><?php echo $Admin["Id"] ?></td>
                                <td><?php echo $Admin["HoVaTen"] ?></td>
                                <td><?php echo $Admin["MaAdmin"] ?></td>
                                <td><?php echo $Admin["User_name"] ?></td>
                                <td><?php echo $Admin["Password"] ?></td>
                                <td><a class="btn btn-outline-success" href="/code/QLkhoCHDT/index.php?action=update&Id=<?php echo $Admin["Id"] ?>">Sửa</a></td>
                                <td><a class="btn btn-outline-info" onclick="return confirm('Bạn có muốn xóa dữ liệu không!');" href="/code/QLkhoCHDT/index.php?action=delete&Id=<?php echo $Admin["Id"] ?> ">Xóa</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php
                include'./sotrang.php';
                ?>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>

</html>