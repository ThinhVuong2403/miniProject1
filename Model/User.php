<?php
session_start();
require_once('DAO.php');
class User extends DAO{
    public $id;
    public $username;
    public $password;
    public $fullname;

    public function __construct(){
        parent::__construct();
    }

}

echo 'T cmt git';
echo 'xem có lỗi ko';
// m thấy chưa
//ai bảo ko được
//Nhưng m sửa code xong push lên nó sẽ báo lỗi
?>