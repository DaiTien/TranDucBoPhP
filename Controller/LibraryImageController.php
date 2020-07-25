<?php
require_once SYSTEM_PATH."/Model/LibraryImageModel.php";
class LibraryImageController
{
    private $imageModel;
    public function __construct()
    {
        $this->imageModel= new LibraryImageModel();
    }

    function index()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $data = $this->imageModel->GetAllRecords();
        require_once SYSTEM_PATH. "/View/Admin/LibraryImage/index.php";
    }
    function Insert()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        require_once SYSTEM_PATH. "/View/Admin/LibraryImage/insert.php";
    }
    function SaveInsert()
    {
        if ($_FILES["file"]["error"] > 0)
        {
            header('location:index.php?c=LibraryImage&a=Insert&r=2');
        }
        else
        {
                move_uploaded_file($_FILES["file"]["tmp_name"],"UpLoadFile/".$_FILES["file"]["name"]);
                $name = $_POST['name'];
                $image = "UpLoadFile/".$_FILES["file"]["name"];
                $result = $this->imageModel->InsertRecord(new LibraryImage(null,$image,$name));
                if ($result == true)
                {
                    header('location:index.php?c=LibraryImage&a=index&r=1&action=Insert');
                }else{
                    header('location:index.php?c=LibraryImage&a=index&r=0&action=Insert');
                }
        }
    }
    function Update()
    {
        $id =$_GET['id'];
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $data = $this->imageModel->GetRecordById($id);
        require_once  SYSTEM_PATH. "/View/Admin/LibraryImage/update.php";
    }
    function SaveUpdate()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        if ($_FILES["file"]["error"] > 0)
        {
            $image = $_POST['image'];
            $result = $this->imageModel->UpdateRecord(new LibraryImage($id,$image,$name));
            if ($result == true)
            {
                header('location:index.php?c=LibraryImage&a=index&r=1&action=Update');
            }else{
                header('location:index.php?c=LibraryImage&a=index&r=0&action=Update');
            }
        }
        else
        {
            if (file_exists("UpLoadFile/".$_FILES["file"]["name"]))
            {
                header('location:index.php?c=LibraryImage&a=Update&id='.$id.'&r=2');
            }
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"],"UpLoadFile/".$_FILES["file"]["name"]);
                $image = "UpLoadFile/".$_FILES["file"]["name"];
                $result = $this->imageModel->UpdateRecord(new LibraryImage($id,$image,$name));
                if ($result == true)
                {
                    header('location:index.php?c=LibraryImage&a=index&r=1&action=Update');
                }else{
                    header('location:index.php?c=LibraryImage&a=index&r=0&action=Update');
                }
            }
        }
    }
    function Delete()
    {
        $id = $_GET['id'];
        $result = $this->imageModel->DeleteRecord($id);
        if ($result == true)
        {
            header('location:index.php?c=LibraryImage&a=index&r=1&action=Delete');
        }else{
            header('location:index.php?c=LibraryImage&a=index&r=0&action=Delete');
        }
    }

}