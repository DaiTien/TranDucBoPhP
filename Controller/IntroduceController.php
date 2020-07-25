<?php
require_once SYSTEM_PATH. "/Model/IntroduceModel.php";
class IntroduceController{
    private $introduceModel;
    public function __construct()
    {
        $this->introduceModel =new IntroduceModel();
    }
    function index()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $data = $this->introduceModel->GetAlldata();
        require_once SYSTEM_PATH. "/View/Admin/introduce/index.php";
    }
    function insert()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        require_once SYSTEM_PATH. "/View/Admin/introduce/insert.php";
    }
    function InsertSave()
    {
        $title = $_POST['title'];
        $summary = $_POST['summary'];   
        $content = $_POST['content'];   
        $dateup = $_POST['dateup'];

        move_uploaded_file($_FILES["file"]["tmp_name"],"UpLoadFile/Introduce/".$_FILES["file"]["name"]);
        $image = "UpLoadFile/Introduce/".$_FILES["file"]["name"];
        $result = $this->introduceModel->InsertRecord(new Introduce(null,$title,$summary,$content,$image,$dateup));
        if ($result == true)
        {
            header('location:index.php?c=Introduce&a=index&r=1&action=Insert');
        }else {
            header('location:index.php?c=Introduce&a=index&r=0&action=Insert');
        }

    }
    function Update()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $id =$_GET['id'];
        $data = $this->introduceModel->GetRecordsById($id);
        require_once SYSTEM_PATH. "/View/Admin/introduce/upload.php";
    }
    function SaveUpdate()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $summary = $_POST['summary'];   
        $content = $_POST['content'];
        $dateup = $_POST['date'];
        if ($_FILES["file"]["error"] > 0)
        {
            $image = $_POST['image'];
            $result = $this->introduceModel->UpdateRecord(new Introduce($id,$title,$summary,$content,$image,$dateup));
            if ($result == true)
            {
                header('location:index.php?c=Introduce&a=index&r=1&action=Update');
            }else {
                header('location:index.php?c=Introduce&a=index&r=0&action=Update');
            }
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],"UpLoadFile/Introduce/".$_FILES["file"]["name"]);
            $image = "UpLoadFile/Introduce/".$_FILES["file"]["name"];
            $result = $this->introduceModel->UpdateRecord(new Introduce($id,$title,$summary,$content,$image,$dateup));
            if ($result == true)
            {
                header('location:index.php?c=Introduce&a=index&r=1&action=Update');
            }else {
                header('location:index.php?c=Introduce&a=index&r=0&action=Update');
            }
        }



    }
    function Delete()
    {
        $id = $_GET['id'];
        $result = $this->introduceModel->DeleteRecord($id);
        if ($result == true)
        {
            header('location:index.php?c=Introduce&a=index&r=1&action=Delete');
        }else {
            header('location:index.php?c=Introduce&a=index&r=0&action=Delete');
        }
    }
}