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
?>