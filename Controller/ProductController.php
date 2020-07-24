<?php
require_once SYSTEM_PATH. "/Model/ProductModel.php";
class ProductController
{
    private $productModel;
    public function __construct()
    {
        $this->productModel=new ProductModel();
    }

    function index()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $data = $this ->productModel ->GetAllRecords();
        require_once SYSTEM_PATH. "/View/Admin/Product/index.php";
    }
    function insert(){
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        require_once SYSTEM_PATH."/View/Admin/Product/insert.php";
    }
    function Save(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $soLuong = $_POST['soLuong'];
        $image = $_POST['image'];
        $summary = $_POST['summary'];
        $price = $_POST['price'];
        $result = $this->productModel->insert( new Product($id, $name, $image, $summary,$soLuong, $price));
        if($result == true){
            header('location:index.php?c=Product&a=index&r=1&action=Insert');
        }else{
            header('location:index.php?c=Product&a=index&r=0&action=Insert');
        }
    }
    function Update()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $id = $_GET['id'];
        $tdb_product = $this->productModel->GetByID($id);
        require_once SYSTEM_PATH. '/View/Admin/Product/update.php';
    }
    function  LuuSua(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $soLuong = $_POST['soLuong'];
        $image = $_POST['image'];
        $summary = $_POST['summary'];
        $price = $_POST['price'];
        $result = $this->productModel->Update( new product($id, $name, $image, $summary,$soLuong,$price));
        if($result == true){
            header('location:index.php?c=Product&a=index&r=1&action=Update');
        }else{
            header('location:index.php?c=Product&a=index&r=0&action=Update');
        }
    }
    function delete(){
        $id = $_GET['id'];
        $tdb_product = $this->productModel->delete($id);
        if($tdb_product == true){
            header('location:index.php?c=Product&a=index&r=1&action=Delete');
        }else{
            header('location:index.php?c=Product&a=index&r=0&action=Delete');
        }
    }



}