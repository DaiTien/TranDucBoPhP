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
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            $data = $this ->productModel ->GetAllRecords();
            require_once SYSTEM_PATH. "/View/Admin/Product/index.php";
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
    function insert(){
        session_start();
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            $productType = $this->productTypeModel->GetAllRecords();
            require_once SYSTEM_PATH."/View/Admin/Product/insert.php";
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
    function Save(){
        if ($_FILES["file"]["error"] > 0)
        {
            header('location:index.php?c=Product&a=Insert&r=2');
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],"UpLoadFile/Product/".$_FILES["file"]["name"]);
        $tenSan = $_POST['tenSan'];
        $soLuong = $_POST['total'];
        $type = $_POST['productType'];
        $image = "UpLoadFile/Product/".$_FILES["file"]["name"];
        $summary = $_POST['summary'];
        $content = $_POST['content'];
        $priceM = $_POST['priceM'];
        $priceL = $_POST['priceL'];
        $result = $this->productModel->insert( new Product(null,$tenSan,$image,$summary,$content,$soLuong,$priceM,$priceL,$type,null));
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
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            $id = $_GET['id'];
            $tdb_product = $this->productModel->GetByID($id);
            $productType = $this->productTypeModel->GetAllRecords();
            $productType2 = $this->productTypeModel->GetRecordById($tdb_product->type);
            require_once SYSTEM_PATH. '/View/Admin/Product/update.php';
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
    function  LuuSua()
    {
        $id = $_POST['id'];
        if ($_FILES["file"]["error"] > 0) {
            $name = $_POST['name'];
            $soLuong = $_POST['soLuong'];
            $type = $_POST['productType'];
            $image = $_POST['fileImg'];
            $title = $_POST['title'];
            $noiDung = $_POST['noiDung'];
            $sizeM = $_POST['sizeM'];
            $priceL = $_POST['priceL'];

            $result = $this->productModel->Update(new product($id, $name, $image, $title,$noiDung, $soLuong, $sizeM,$priceL,$type,null));
            if ($result == true) {
                header('location:index.php?c=Product&a=index&r=1&action=Update');
            } else {
                header('location:index.php?c=Product&a=index&r=0&action=Update');
            }
        } else {
            //if (file_exists("UpLoadFile/product/" . $_FILES["file"]["name"])) {
                //header('location:index.php?c=Product&a=Update&id=' . $id . '&r=2');
            //} else {
                move_uploaded_file($_FILES["file"]["tmp_name"], "UpLoadFile/product/" . $_FILES["file"]["name"]);
                $name = $_POST['name'];
                $soLuong = $_POST['soLuong'];
                $image = "UpLoadFile/product/" . $_FILES["file"]["name"];
                $type = $_POST['productType'];
                $title = $_POST['title'];
                $noiDung = $_POST['noiDung'];
                $sizeM = $_POST['sizeM'];
                $priceL = $_POST['priceL'];
                $result = $this->productModel->Update(new product($id, $name, $image, $title,$noiDung, $soLuong, $sizeM,$priceL,$type,null));
                if ($result == true) {
                    header('location:index.php?c=Product&a=index&r=1&action=Update');
                } else {
                    header('location:index.php?c=Product&a=index&r=0&action=Update');
                }
            //}
        }
    }
    function delete(){
        session_start();
        if (isset($_SESSION['userAdmin']))
        {
            $id = $_GET['id'];
            $tdb_product = $this->productModel->delete($id);
            if($tdb_product == true){
                header('location:index.php?c=Product&a=index&r=1&action=Delete');
            }else{
                header('location:index.php?c=Product&a=index&r=0&action=Delete');
            }
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
}