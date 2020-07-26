<?php
require_once SYSTEM_PATH. "/Model/ProductModel.php";
require_once SYSTEM_PATH."/Model/ProductTypeModel.php";
class ProductController
{
    private $productModel;
    private $productTypeModel;
    public function __construct()
    {
        $this->productModel=new ProductModel();
        $this->productTypeModel=new ProductTypeModel();
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
        $productType = $this->productTypeModel->GetAllRecords();
        require_once SYSTEM_PATH."/View/Admin/Product/insert.php";
    }
    function Save(){
        if ($_FILES["file"]["error"] > 0)
        {
            header('location:index.php?c=Product&a=Insert&r=2');
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],"UpLoadFile/product/".$_FILES["file"]["name"]);

        $id = $_POST['id'];
        $name = $_POST['name'];
        $soLuong = $_POST['soLuong'];
        $type = $_POST['type'];
        $image = "UpLoadFile/product/".$_FILES["file"]["name"];
        $summary = $_POST['summary'];
        $price = $_POST['price'];
        $result = $this->productModel->insert( new Product($id, $name, $image, $summary,$soLuong, $price,$type));
        if($result == true){
            header('location:index.php?c=Product&a=index&r=1&action=Insert');
        }else{
            header('location:index.php?c=Product&a=index&r=0&action=Insert');
        }
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
    function  LuuSua()
    {
        $id = $_POST['id'];
        if ($_FILES["file"]["error"] > 0) {
            header('location:index.php?c=Product&a=Update&id=' . $id . '&r=3');
        } else {
            if (file_exists("UpLoadFile/" . $_FILES["file"]["name"])) {
                header('location:index.php?c=Product&a=Update&id=' . $id . '&r=2');
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], "UpLoadFile/product/" . $_FILES["file"]["name"]);
                $name = $_POST['name'];
                $soLuong = $_POST['soLuong'];
                $type = $_POST['type'];
                $image = "UpLoadFile/product/" . $_FILES["file"]["name"];
                $summary = $_POST['summary'];
                $price = $_POST['price'];
                $result = $this->productModel->Update(new product($id, $name, $image, $summary, $soLuong, $price,$type));
                if ($result == true) {
                    header('location:index.php?c=Product&a=index&r=1&action=Update');
                } else {
                    header('location:index.php?c=Product&a=index&r=0&action=Update');
                }
            }
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