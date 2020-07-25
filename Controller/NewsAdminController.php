<?php
require_once SYSTEM_PATH. "/Model/NewsAdminModel.php";
class NewsAdminController
{   
    private $newsAdminModel;
    public function __construct()
    {
        $this->newsAdminModel=new NewsAdminModel();
    }
    function index()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $data = $this->newsAdminModel->GetAlldata();
        require_once SYSTEM_PATH. "/View/Admin/News/index.php";
    }
    function insert()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        require_once SYSTEM_PATH. "/View/Admin/News/insert.php";
    }
    function InsertSave()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $summary = $_POST['summary'];
        $content = $_POST['content'];

            move_uploaded_file($_FILES["file"]["tmp_name"],"UpLoadFile/News/".$_FILES["file"]["name"]);
            $image = "UpLoadFile/News/".$_FILES["file"]["name"];
            $result = $this->newsAdminModel->InsertRecord(new NewsAdmin(null,$title,$summary,$image,$content));
            if ($result == true)
            {
                header('location:index.php?c=NewsAdmin&a=index&r=1&action=Insert');
            }else{
                header('location:index.php?c=NewsAdmin&a=index&r=0&action=Insert');
            }
    }
    function Update()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $id =$_GET['id'];
        $data = $this->newsAdminModel->GetRecordsById($id);
        require_once SYSTEM_PATH. "/View/Admin/News/update.php";
    }
    function SaveUpdate()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $summary = $_POST['summary'];
        $content = $_POST['content'];
        if ($_FILES["file"]["tmp_name"] == null)
        {
            $image = $_POST['image'];
            $result = $this ->newsAdminModel->UpdateRecord(new NewsAdmin($id,$title,$summary,$image,$content));
            if ($result == true)
            {
                header('location:index.php?c=NewsAdmin&a=index&r=1&action=Update');
            }else {
                header('location:index.php?c=NewsAdmin&a=index&r=0&action=Update');
            }
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"UpLoadFile/News/".$_FILES["file"]["name"]);
            $image = "UpLoadFile/News/".$_FILES["file"]["name"];
            $result = $this->newsAdminModel->UpdateRecord(new NewsAdmin($id,$title,$summary,$image,$content));
            if ($result == true)
            {
                header('location:index.php?c=NewsAdmin&a=index&r=1&action=Update');
            }else {
                header('location:index.php?c=NewsAdmin&a=index&r=0&action=Update');
            }
        }
    }
    function Delete()
    {
        $id = $_GET['id'];
        $result = $this->newsAdminModel->DeleteRecord($id);
        if ($result == true)
        {
            header('location:index.php?c=NewsAdmin&a=index&r=1&action=Delete');
        }else {
            header('location:index.php?c=NewsAdmin&a=index&r=0&action=Delete');
        }
    }
}