<?php
require_once SYSTEM_PATH."/Model/WebModel.php";
require_once SYSTEM_PATH."/Model/SlideModel.php";
require_once SYSTEM_PATH. "/Model/LibraryImageModel.php";
require_once SYSTEM_PATH."/Model/IntroduceModel.php";
require_once SYSTEM_PATH."/Model/NewsAdminModel.php";
class WebController
{
    private $slideModel;
    private $libaryImageModel;
    private $introduceModel;
    private $newModel;
    public function __construct()
    {
        $this->slideModel = new SlideImageModel();
        $this->libaryImageModel = new LibraryImageModel();
        $this->introduceModel = new IntroduceModel();
        $this->newModel=new NewsAdminModel();
    }

    function index()
    {
        $slide = $this ->slideModel->GetAllRecords();
        $image = $this->libaryImageModel->GetAllRecords();
        $introduce = $this ->introduceModel->GetAlldata();
        $news = $this->newModel->GetAlldata();
        require_once SYSTEM_PATH. "/View/Web/index.php";
    }

}