<html lang="en">

<head>



    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">

    <title>

        ddat





    </title>



    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->



    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />





    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


</head>


<body class="g-sidenav-show  bg-gray-100">

    <?php
    include "./model/pdo.php";
    include "./model/danhmuc.php";
    include "./model/sanpham.php";
    include "./model/taikhoan.php";
    include "./model/binhluan.php";
    include "./model/cart.php";
    include "header.php";
    ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php

        //controller
        


        if (isset($_GET['act'])) {
            $act = $_GET['act'];
            switch ($act) {
                case 'thongke':
                    $listthongke = loadall_thongke();
                    include "thongke/list.php";
                    break;

                case 'bieudo':
                    $listthongke = loadall_thongke();
                    include "thongke/bieudo.php";
                    break;

                case 'adddm':
                    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                        $ten = $_POST['ten'];
                        //function
                        insert_danhmuc($ten);
                        $thongbao = "Thêm thành công";
                    }

                    include "danhmuc/add.php";
                    break;

                case 'listdm':
                    //function
                    $listdanhmuc = loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;



                case 'xoadm':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_danhmuc($_GET['id']);
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;

                case 'suadm';
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                        $dm = loadone_danhmuc($_GET['id']);
                    }

                    include "danhmuc/update.php";
                    break;

                case 'updatedm':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $ten = $_POST['ten'];
                        $id = $_POST['id'];
                        update_danhmuc($id, $ten);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;



                //Sản phẩm
                case 'addsp':
                    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                        $danhmuc_id = $_POST['danhmuc_id'];
                        $ten = $_POST['ten'];
                        $giaban = $_POST['giaban'];
                        $mota = $_POST['mota'];
                        $hinhanh = $_FILES['hinhanh']['name'];
                        // $soluong = $_POST['soluong'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                        if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                            //echo "The file". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }

                        //function
                        insert_sanpham($ten, $hinhanh, $giaban, $mota, $danhmuc_id);
                        $thongbao = "Thêm thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();

                    include "sanpham/add.php";
                    break;
                case 'listsp':
                    if (isset($_POST['listok']) && ($_POST['listok'])) {
                        $kyw = $_POST['kyw'];
                        $danhmuc_id = $_POST['danhmuc_id'];
                    } else {
                        $kyw = '';
                        $danhmuc_id = 0;
                    }
                    //function
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_sanpham($kyw, $danhmuc_id);
                    include "sanpham/list.php";
                    break;
                case 'xoasp':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham = loadall_sanpham("", 0);
                    include "sanpham/list.php";
                    break;
                case 'suasp';
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                        $sanpham = loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
                case 'updatesp':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $id = $_POST['id'];
                        $danhmuc_id = $_POST['danhmuc_id'];
                        $ten = $_POST['ten'];
                        $giaban = $_POST['giaban'];
                        $mota = $_POST['mota'];
                        $hinhanh = $_FILES['hinhanh']['name'];

                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                        if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                            //echo "The file". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        update_sanpham($id, $danhmuc_id, $ten, $hinhanh, $giaban, $mota);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_sanpham("", 0);
                    include "sanpham/list.php";
                    break;
                case 'listbill':
                    if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                        $kyw = $_POST['kyw'];
                    } else {
                        $kyw = "";
                    }

                    $listbill = loadall_bill($kyw, 0);
                    include "bill/listbill.php";
                    break;



                case 'dskh':

                    $listtaikhoan = loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;
                case 'dsbl':

                    $listbinhluan = loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;
                case 'xoabl':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_binhluan($_GET['id']);
                    }
                    $listbinhluan = loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;
                case 'xoatk':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_taikhoan($_GET['id']);
                    }
                    $listtaikhoan = loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;



                default:
                    include "home.php";
                    break;

            }
        } else {
            include "home.php";
        }

        include "footer.php";
        ?>
    </main>

</body>