<?php
    
    require "header.php";
?>

<div class="container">
            <h5 class="text-center text-primary mt-5">Add</h5>
<div>
<div style="color: red">
    <?php echo $error; ?>
</div>
<div class="container" style="width:60%">
<form method="post" action="">
    <div class="form-group">
    Họ và tên:
    <input type="text" class="form-control" name="hovaten" value="" />
    </div>
    <br />
    Ngày sinh:
    <input type="text" class="form-control" name="ngaysinh" value="" />
    <br />
    Giới Tính:
    <input type="text" class="form-control" name="gioitinh" value="" />
    <br />
    Trình độ:
    <input type="text" class="form-control" name="trinhdo" value="" />
    <br />
    Chuyên môn:
    <input type="text" class="form-control" name="chuyenmon" value="" />
    <br />
    Học hàm:
    <input type="text" class="form-control" name="hocham" value="" />
    <br />
    Học vị:
    <input type="text" class="form-control" name="hocvi" value="" />
    <br />
    Cơ quan:
    <input type="text" class="form-control" name="coquan" value="" />
    <br />
    <input style="background-color: blue;
    color: white;
    padding: 10px;
    padding-left:20px;
    padding-right:20px;
    border: none;" type="submit" name="submit" value="Save" />
</form>
</div>
