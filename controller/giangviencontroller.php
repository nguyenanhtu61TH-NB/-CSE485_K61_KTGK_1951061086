<?php
require_once 'model/giangvien.php';
class giangvienController
{

    public function index()
    {

        $giangvien = new giangvien();
        $giangviens = $giangvien->index();
        require_once 'view/giangvien/index.php';
    }

    public function add()
    {
        $error = '';
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            $ngaysinh = $_POST['ngaysinh'];
            $gioitinh = $_POST['gioitinh'];
            $trinhdo = $_POST['trinhdo'];
            $chuyenmon = $_POST['chuyenmon'];
            $hocham = $_POST['hocham'];
            $hocvi = $_POST['hocvi'];
            $coquan = $_POST['coquan'];


            if (empty($hovaten) && empty($ngaysinh) && empty($gioitinh) && empty($trinhdo) && empty($chuyenmon) && empty($hocham) && empty($hocvi) && empty($coquan)) {
                $error = "Tên không được để trống";
            } else {

                $giangvien = new giangvien();
                $giangvienArr = [
                    'hovaten' => $hovaten,
                    'ngaysinh' => $ngaysinh,
                    'gioitinh' => $gioitinh,
                    'trinhdo' => $trinhdo,
                    'chuyenmon' => $chuyenmon,
                    'hocham' => $hocham,
                    'hocvi' => $hocvi,
                    'coquan' => $coquan

                ];
                $isInsert = $giangvien->insert($giangvienArr);
                if ($isInsert) {
                    $_SESSION['success'] = "Thêm mới thành công";
                } else {
                    $_SESSION['error'] = "Thêm mới thất bại";
                }
                header("Location: index.php?controller=giangvien&action=index");
                exit();
            }
        }
        require_once 'view/giangvien/add.php';
    }

    public function edit()
    {

        if (!isset($_GET['magv'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=giangvien&action=index");
            return;
        }
        if (!is_numeric($_GET['magv'])) {
            $_SESSION['error'] = "Id phải là số";
            header("Location: index.php?controller=giangvien&action=index");
            return;
        }
        $magv = $_GET['magv'];

        $giangvienModel = new giangvien();
        $giangvien = $giangvienModel->getgiangvienById($magv);

        $error = '';
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            $ngaysinh = $_POST['ngaysinh'];
            $gioitinh = $_POST['gioitinh'];
            $trinhdo = $_POST['trinhdo'];
            $chuyenmon = $_POST['chuyenmon'];
            $hocham = $_POST['hocham'];
            $hocvi = $_POST['hocvi'];
            $coquan = $_POST['coquan'];

            if (empty($hovaten) && empty($ngaysinh) && empty($gioitinh) && empty($trinhdo) && empty($chuyenmon) && empty($hocham) && empty($hocvi) && empty($coquan)) {
                $error = "Tên không được để trống";
            } else {

                $giangvien = new giangvien();

                $giangvienArr = [
                    'magv' => $magv,
                    'hovaten' => $hovaten,
                    'ngaysinh' => $ngaysinh,
                    'gioitinh' => $gioitinh,
                    'trinhdo' => $trinhdo,
                    'chuyenmon' => $chuyenmon,
                    'hocham' => $hocham,
                    'hocvi' => $hocvi,
                    'coquan' => $coquan

                ];
                $isUpdate = $giangvienModel->update($giangvienArr);
                if ($isUpdate) {
                    $_SESSION['success'] = "Update bản ghi #$magv thành công";
                } else {
                    $_SESSION['error'] = "Update bản ghi #$magv thất bại";
                }
                header("Location: index.php?controller=giangvien&action=index");
                exit();
            }
        }

        require_once 'view/giangvien/edit.php';
    }

    public function delete()
    {

        $magv = $_GET['magv'];
        if (!is_numeric($magv)) {
            header("Location: index.php?controller=giangvien&action=index");
            exit();
        }

        $giangvien = new giangvien();
        $isDelete = $giangvien->delete($magv);

        if ($isDelete) {

            $_SESSION['success'] = "Xóa #$magv thành công";
            header("Location: index.php?controller=giangvien&action=index");
        } else {

            $_SESSION['error'] = "Xóa #$magv thất bại";
        }

        exit();
    }
}
