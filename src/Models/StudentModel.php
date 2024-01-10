<?php
// là khái niệm đưa ra để quản lý mã nguồn
namespace model\Models;

class StudentModel { // StudentModel : tên của class - trùng với tên file
    // properties  : thuộc tính, biến
    public $name; // có thể được gọi hoặc truy cập từ bên ngoài
    public $age;
    public $numberPhone;
    private $address; // truy cập nội bộ

    protected $email = 'ddd@gmail.com'; // cho phép truy cập ở lớp con,
    // bên ngoài nhưng chỉ giới hạn trong thư mục
    // các từ khoá public, private thể hiện mức độ truy cập được phép từ lớp con hoặc từ
    // các class khác

    // contructor - hàm khởi tạo
    // cấp phát hoặc truyền dữ liệu cho class
    // chỉ có 1 hàm contstruct

    // methods : phương thức - hàm
    // file Model dùng để viết câu lệnh truy vấn vào csdl
    /**
     * @param $name
     * @param $age
     * @param $numberPhone
     * @param $address
     */
    public function __construct($name, $age = 10, $numberPhone, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->numberPhone = $numberPhone;
        $this->address = $address;
    }
    public function __destruct() // huy bo
    {
        // TODO: Implement __destruct() method.
        echo  'Detruct';
        // hàm được gọi khi không còn sử dụng đối tượng này nữa
        // gọi câu lệnh tên là : unset
        // GC - auto
    }

    public function __contruct2($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    function find_id($name){
        // từ khoá this giúp gọi các thuộc tính - biến của class
        $name = $this->name . ' --- ';
        return $name;
    }

    function displayInfo(){
        echo $this->name;
        echo $this->age;
    }
}



