<?php
require  'vendor/autoload.php'; // khai bao autoload
 // include class People
use Huuhuy\PhpDemo\People;
// \Models\ trùng với tên thư mục chứa StudentModel
use Huuhuy\PhpDemo\Models\StudentModel;
$people = new People();
$people->name = "HUY";
$people->address = "Binh nguyen vo tan";
$people->print();

// Khỏi tạo 1 instance của StudentModel
$sv = new StudentModel("Huy Nguyen",
    "34","0913360468","HN-NTL");

// 1 instance khác của StudentModel
$sv1 = new StudentModel("Huy Nguyen 1",
    "33","0913360468","HN-NTL");

// gọi class mà ko phân biệt chữ hoa thường (not recommended)
$sv2 = new StudentModel("Huy Nguyen 1",
    "33","0913360468","HN-NTL");

// truy cạp biến name của sv
echo $sv->name; // có thể truy cập do ở trạng thái public
//echo $sv->address; //lỗi truy cập do biến ở trạng thái private
//echo $sv->email; //lỗi truy cập do biến ở protected : khác thư mục

// gọi phương thức trong StudentModel
$sv->displayInfo();
$sv->find_id("HUY NGUYEN");

// so sánh 2 object !!!

if ($sv == $sv1){ // == nhau khi : sv va sv1 có cùng value và
    // cùng là instance StudentModel
    //????
    echo  "sv = sv1";
}else{
    echo  "sv != sv1";
}

if ($sv === $sv1){ // không bằng vì 2 thằng là 2 instance riêng
    //????
    echo  "sv === sv1";
}else {
    echo  "sv !== sv1";
}

// class ẩn danh - anonymous
// khi cần khai báo nhanh 1 lớp - 1 object

$sinhVienHocLai = new class('Anonymous Class'){
    public $x = 100;
    public function displayX(){
        echo $this->x;
    }
};
echo $sinhVienHocLai->displayX();


