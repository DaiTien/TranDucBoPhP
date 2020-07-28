<?php
require_once SYSTEM_PATH."/Model/WebModel.php";
require_once SYSTEM_PATH."/Model/SlideModel.php";
require_once SYSTEM_PATH. "/Model/LibraryImageModel.php";
require_once SYSTEM_PATH."/Model/IntroduceModel.php";
require_once SYSTEM_PATH."/Model/NewsAdminModel.php";
require_once SYSTEM_PATH."/Model/ProductTypeModel.php";
require_once SYSTEM_PATH."/Model/ProductModel.php";
require_once SYSTEM_PATH."/Model/ContactModel.php";
require_once SYSTEM_PATH."/Model/SocialNetworkAdminModel.php";
require_once SYSTEM_PATH."/Model/FeedBackAdminModel.php";
class IndexWebsiteController
{
    private $slideModel;
    private $libaryImageModel;
    private $introduceModel;
    private $newModel;
    private $productTypeModel;
    private $productModel;
    private $contactModel;
    private $mXh;
    private $feedBack;
    public function __construct()
    {
        $this->slideModel = new SlideImageModel();
        $this->libaryImageModel = new LibraryImageModel();
        $this->introduceModel = new IntroduceModel();
        $this->newModel=new NewsAdminModel();
        $this->productTypeModel=new ProductTypeModel();
        $this->productModel = new ProductModel();
        $this->contactModel = new ContactModel();
        $this->mXh = new SocialNetworkAdminModel();
        $this->feedBack= new FeedBackAdminModel();
    }

    function index()
    {
        $slide = $this ->slideModel->GetAllRecords();
        $image = $this->libaryImageModel->GetAllRecords();
        $introduce = $this ->introduceModel->GetAlldata();
        $news = $this->newModel->GetAlldata();
        $productType = $this->productTypeModel->GetAllRecords();
        $product = $this ->productModel->GetAllRecords();
        $contact = $this ->contactModel->GetAllRecords();
        $mxh = $this->mXh->GetByID(1);
        require_once SYSTEM_PATH. "/View/Web/index.php";
    }
    function sendFeedback()
    {
        $ho = $_POST['ho'];
        $ten = $_POST['ten'];
        $email = $_POST['email'];
        $fullName = $ho .' '.$ten;
        $title =$_POST['title'];
        $content = $_POST['content'];

        $result = $this->feedBack->InsertRecord(new FeedBackAdmin(null,$fullName,$title,$content,date("Y/m/d"),$email,null));
        if ($result == true)
        {
            header('location:index.php?c=IndexWebsite&a=index&r=1&action=SendMessage');

        }
    }

}