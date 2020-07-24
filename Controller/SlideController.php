<?php
require_once SYSTEM_PATH . "/Model/SlideModel.php";
class SlideController
{
    private $imageSlideModel;
    public function __construct()
    {
        $this->imageSlideModel = new SlideImageModel();
    }
    function index()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $data = $this->imageSlideModel->GetAllRecords();
        require_once SYSTEM_PATH . "/View/Admin/Slide/index.php";
    }
    function Insert()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        require_once SYSTEM_PATH . "/View/Admin/Slide/insert.php";
    }
    function SaveInsert()
    {
        if ($_FILES["file"]["error"] > 0) {
            header('location:index.php?c=Slide&a=Insert&r=2');
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], "UpLoadFile/Slide/" . $_FILES["file"]["name"]);
            $image = "UpLoadFile/Slide/" . $_FILES["file"]["name"];
            $result = $this->imageSlideModel->InsertRecord(new Slide(null, $image));
            if ($result == true) {
                header('location:index.php?c=Slide&a=index&r=1&action=Insert');
            } else {
                header('location:index.php?c=Slide&a=index&r=0&action=Insert');
            }
        }
    }
}
