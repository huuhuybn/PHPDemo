<?php
// kiểm tra xem nếu có tham số Name trong url thì lấy ra
// nếu không có thì gán = ''
include '../Models/StudentModel.php';

$param = !empty($_GET['name']) ? $_GET['name'] : '';
$data = find_id($param);

include '../Views/StudentView.php';




