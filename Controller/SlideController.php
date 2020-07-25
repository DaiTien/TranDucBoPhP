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
    function Update()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $id =$_GET['id'];
        $data = $this->imageSlideModel->GetRecordById($id);
        require_once  SYSTEM_PATH. "/View/Admin/Slide/update.php";
    }
    function SaveUpdate()
    {
        $id = $_POST['id'];
        if ($_FILES["file"]["error"] > 0)
        {
            $image = $_POST['name'];
            $result = $this->imageSlideModel->UpdateRecord(new Slide($id,$image));
            if ($result == true)
            {
                header('location:index.php?c=Slide&a=index&r=1&action=Update');
            }else{
                header('location:index.php?c=Slide&a=index&r=0&action=Update');
            }
        }
        else
        {
                move_uploaded_file($_FILES["file"]["tmp_name"],"UpLoadFile/Slide/".$_FILES["file"]["name"]);
                $image = "UpLoadFile/Slide/".$_FILES["file"]["name"];
                $result = $this->imageSlideModel->UpdateRecord(new Slide($id,$image));
                if ($result == true)
                {
                    header('location:index.php?c=Slide&a=index&r=1&action=Update');
                }else{
                    header('location:index.php?c=Slide&a=index&r=0&action=Update');
                }
        }
    }
    function Delete()
    {
        $id = $_GET['id'];
        $result = $this->imageSlideModel->DeleteRecord($id);
        if ($result == true)
        {
            header('location:index.php?c=Slide&a=index&r=1&action=Delete');
        }else{
            header('location:index.php?c=Slide&a=index&r=0&action=Delete');
        }
    }

}
