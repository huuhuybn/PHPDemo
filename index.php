<?php
namespace model\Models; // namespace rút gọn !!!
include './Models/StudentModel.php';
// Khỏi tạo 1 instance của StudentModel
$sv = new StudentModel("Huy Nguyen",
    "34","0913360468","HN-NTL");

// 1 instance khác của StudentModel
$sv1 = new StudentModel("Huy Nguyen 1",
    "33","0913360468","HN-NTL");

// gọi class mà ko phân biệt chữ hoa thường (not recommended)
$sv2 = new \model\Models\StudentModel("Huy Nguyen 1",
    "33","0913360468","HN-NTL");

// truy cạp biến name của sv
echo $sv->name; // có thể truy cập do ở trạng thái public
//echo $sv->address; lỗi truy cập do biến ở trạng thái private
//echo $sv->email; lỗi truy cập do biến ở protected : khác thư mục

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


