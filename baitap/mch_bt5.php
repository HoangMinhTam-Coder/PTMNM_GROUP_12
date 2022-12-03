<?php
require '../include/db_conn.php';
page_protect();
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <title>BÀI TẬP</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/template/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .header {
            font-size: 20px;
            color: white;
            padding: 5px;
            font-weight: bold;
        }

        table {
            width: 500px;
            background-color: #fff5ff;
        }

        .a1,
        .a2 {
            padding-left: 10px;
        }

        .a,
        .a2 {
            background-color: #fedaf4;
        }

        .a3 {
            width: 250px;
        }

        .btn {
            background-color: #fffea9;
            width: 83px;
        }

        .a1 {
            width: 250px;
        }

        .b {
            background-color: #fba9a9;
            width: 250px;
        }

        b {
            color: red;
        }

        .a,
        .b {
            margin-right: 20px;
        }
    </style>
</head>

<body class="page-top">
    <?php
    if (isset($_POST["submit"])) {
        if (isset($_POST['arr'])) {
            $s = $_POST['arr'];
            $x = $_POST['x'];
            $y = $_POST['y'];
            tach_chuoi($s, $a);
            if (check($a, $dem) == 0)
                if (is_numeric($x))
                    if (is_numeric($y)) {
                        $mangcu = xuat_mang($a);
                        thay_the($a, $x, $y);
                        $mangmoi = xuat_mang($a);
                    } else $error3 = "Không hợp lệ! Vui lòng nhập số";
                else $error2 = "Không hợp lệ! Vui lòng nhập số";
            else $error1 = "Mảng không hợp lệ! Vui lòng nhập số";
        }
    } else if (isset($_POST["submit"])) $s = "";

    function tach_chuoi($s, &$a)
    {
        $a = explode(",", $s);
    }

    function check($a, &$dem)
    {
        $dem = 0;
        for ($i = 0; $i < count($a); $i++)
            if (!is_numeric($a[$i])) $dem++;
        return $dem;
    }

    function xuat_mang($a)
    {
        $mang = "";
        for ($i = 0; $i < count($a) - 1; $i++)
            $mang .= "$a[$i] ";
        $mang .= $a[count($a) - 1];
        return $mang;
    }

    function thay_the(&$a, $x, $y)
    {
        for ($i = 0; $i < count($a); $i++)
            if ($a[$i] == $x) $a[$i] = $y;
        return $a;
    }
    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("nav.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['full_name']; ?></span>
                                <i class="fas fa-user"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h4>BÀI 5: Thiết kế Form Thay thế, các số trong mảng ngăn cách nhau bởi dấu phầy (,).</h4>

                    <form action="" method="POST">
                        <table align="center" style="width: 500px;" bgcolor="#fff5ff">
                            <tr bgcolor="#a10971">
                                <td class="header" colspan="2" align="center">THAY THẾ</td>
                            </tr>
                            <tr>
                                <td class="a2">Nhập các phần tử:</td>
                                <td class="a"><input type="text" class="a3" name="arr" value="<?php if (isset($s)) echo $s; ?>" required></td>
                            </tr>
                            <?php if (isset($error1)) echo "<tr><td class='a'><td class='a'><b style='color: red;'>$error1</b></td></td></tr>" ?>
                            <tr>
                                <td class="a2">Giá trị cần thay thế:</td>
                                <td class="a"><input type="text" name="x" value="<?php if (isset($x)) echo $x; ?>" required></td>
                            </tr>
                            <?php if (isset($error2)) echo "<tr><td class='a'><td class='a'><b style='color: red;'>$error2</b></td></td></tr>" ?>
                            <tr>
                                <td class="a2">Giá trị thay thế:</td>
                                <td class="a"><input type="text" name="y" value="<?php if (isset($y)) echo $y; ?>" required></td>
                            </tr>
                            <?php if (isset($error3)) echo "<tr><td class='a'><td class='a'><b style='color: red;'>$error3</b></td></td></tr>" ?>
                            <tr>
                                <td class="a"></td>
                                <td class="a">
                                    <input class="btn" type="submit" name="submit" value="Thay thế">
                                    <?php if (isset($_POST['submit'])) echo "<input class='btn' type='submit' name='reset' value='Nhập lại'>" ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="a1">Mảng cũ:</td>
                                <td><input type="text" class="b" name="old" value="<?php if (isset($mangcu)) echo $mangcu; ?>"></td>
                            </tr>
                            <tr>
                                <td class="a1">Mãng sau khi thay thế:</td>
                                <td><input type="text" class="b" name="new" value="<?php if (isset($mangmoi)) echo $mangmoi; ?>"></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">(<b>Ghi chú: </b>Các phần tử trong mảng sẽ cách nhau bằng dấu *,*)</td>
                            </tr>
                        </table>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("footer.php") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/template/vendor/jquery/jquery.min.js"></script>
    <script src="/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/template/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/template/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/template/js/demo/chart-area-demo.js"></script>
    <script src="/template/js/demo/chart-pie-demo.js"></script>

</body>

</html>