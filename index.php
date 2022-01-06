<?php
session_start();

$controller = isset($_GET['controller'])
    ? $_GET['controller'] : 'giangvien';

$action = isset($_GET['action']) ? $_GET['action'] :
    'index';


//$controller = ucfirst($controller);

$fileController = $controller . "controller.php";



 $pathController = "controller/$fileController";



if (!file_exists($pathController)) {
    die("Trang bạn tìm không tồn tại");
}
require_once "$pathController";

$classController = $controller."Controller";
$object = new $classController();

if (!method_exists($object, $action)) {
    die("Phương thức $action
     không tồn tại trong class $classController");
}
$object->$action();
?>