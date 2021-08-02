<?php
require_once('DAO.php');
class Product extends DAO{
    public $id;
    public $name;
    public $price;
    public $image;
    public $des;


    public function __construct(){
        parent::__construct();
    }
 
}