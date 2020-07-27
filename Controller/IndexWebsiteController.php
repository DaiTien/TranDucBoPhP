<?php
require_once SYSTEM_PATH."/Model/WebModel.php";
require_once SYSTEM_PATH."/Model/SlideModel.php";
require_once SYSTEM_PATH. "/Model/LibraryImageModel.php";
require_once SYSTEM_PATH."/Model/IntroduceModel.php";
require_once SYSTEM_PATH."/Model/NewsAdminModel.php";
require_once SYSTEM_PATH."/Model/ProductTypeModel.php";
require_once SYSTEM_PATH."/Model/ProductModel.php";
class IndexWebsiteController
{
    private $slideModel;
    private $libaryImageModel;
    private $introduceModel;
    private $newModel;
    private $productTypeModel;
    private $productModel;
    public function __construct()
    {
        $this->slideModel = new SlideImageModel();
        $this->libaryImageModel = new LibraryImageModel();
        $this->introduceModel = new IntroduceModel();
        $this->newModel=new NewsAdminModel();
        $this->productTypeModel=new ProductTypeModel();
        $this->productModel = new ProductModel();
    }

    function index()
    {
        $slide = $this ->slideModel->GetAllRecords();
        $image = $this->libaryImageModel->GetAllRecords();
        $introduce = $this ->introduceModel->GetAlldata();
        $news = $this->newModel->GetAlldata();
        $productType = $this->productTypeModel->GetAllRecords();
        $product = $this ->productModel->GetAllRecords();
        require_once SYSTEM_PATH. "/View/Web/index.php";
    }
    function sendFeedback()
    {
        $ho = $_POST['ho'];
        $ten = $_POST['ten'];
        $fullName = $ho .' '.$ten;
        $title =$_POST['title'];
        $content = $_POST['content'];
    }

}