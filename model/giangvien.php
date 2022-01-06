<?php
require_once 'configs/database.php';
class giangvien
{
    public $magv;
    public $hovaten;
    public $ngaysinh;
    public $gioitinh;
    public $trinhdo;
    public $chuyenmon;
    public $hocham;
    public $hocvi;
    public $coquan;

    public function insert($param = [])
    {
        $connection = $this->connectDb();
        $queryInsert = "INSERT INTO giangvien('hovaten','ngaysinh','gioitinh','trinhdo','chuyenmon','hocham','hocvi','coquan') 
        VALUES ('{$param['hovaten']}','{$param['ngaysinh']}','{$param['gioitinh']}','{$param['trinhdo']}','{$param['chuyenmon']}','{$param['hocham']}','{$param['hocvi']}','{$param['coquan']}')";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);
        return $isInsert;
    }

    public function getgiangvienById($magv = null)
    {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM giangvien WHERE magv=$magv";
        $results = mysqli_query($connection, $querySelect);
        $giangvien = [];
        if (mysqli_num_rows($results) > 0) {
            $giangviens = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $giangvien = $giangviens[0];
        }
        $this->closeDb($connection);

        return $giangvien;
    }

    public function index()
    {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM giangvien";
        $results = mysqli_query($connection, $querySelect);
        $giangviens = [];
        if (mysqli_num_rows($results) > 0) {
            $giangviens = mysqli_fetch_all($results, MYSQLI_ASSOC);
        }
        $this->closeDb($connection);

        return $giangviens;
    }

    public function update($giangvien = [])
    {
        $connection = $this->connectDb();
        $queryUpdate = "UPDATE giangvien 
    SET `hovaten` = '{$giangvien['hovaten']}', `ngaysinh` = '{$giangvien['ngaysinh']}', `gioitinh` = '{$giangvien['gioitinh']}', `trinhdo` = '{$giangvien['trinhdo']}', `chuyenmon` = '{$giangvien['chuyenmon']}', `hocham` = '{$giangvien['hocham']}', `hocvi` = '{$giangvien['hocvi']}',`coquan` = '{$giangvien['coquan']}' WHERE `magv` = {$giangvien['magv']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);

        return $isUpdate;
    }

    public function delete($magv = null)
    {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM giangvien WHERE magv = $magv";
        $isDelete = mysqli_query($connection, $queryDelete);

        $this->closeDb($connection);

        return $isDelete;
    }

    public function connectDb()
    {
        $connection = mysqli_connect(
            DB_HOST,
            DB_USERNAME,
            DB_PASSWORD,
            DB_NAME
        );
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " . mysqli_connect_error());
        }

        return $connection;
    }

    public function closeDb($connection = null)
    {
        mysqli_close($connection);
    }
}
