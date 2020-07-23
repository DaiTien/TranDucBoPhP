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
        $data = $this->introduceModel->GetAlldata();
        require_once SYSTEM_PATH. "/View/Admin/introduce/index.php";
    }
    function insert()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        require_once SYSTEM_PATH. "/View/Admin/introduce/insert.php";
    }
    function InsertSave()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $summary = $_POST['summary'];   
        $content = $_POST['content'];   
        $image = $_POST['image'];
        $dateup = $_POST['dateup'];
       
        $result = $this->introduceModel->InsertRecord(new Introduce($id,$title,$summary,$content,$image,$dateup));
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
        $id =$_GET['id'];
        $data = $this->introduceModel->GetRecordsById($id);
        require_once SYSTEM_PATH. "/View/Admin/introduce/upload.php";
    }
    function Save()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $summary = $_POST['summary'];   
        $content = $_POST['content'];   
        $image = $_POST['image'];
        $dateup = $_POST['dateup'];
        $result = $this->introduceModel->InsertRecord(new Introduce($id,$title,$summary,$content,$image,$dateup));
        if ($result == true)
        {
            header('location:index.php?c=Introduce&a=index&r=1&action=Update');
        }else {
            header('location:index.php?c=Introduce&a=index&r=0&action=Update');
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