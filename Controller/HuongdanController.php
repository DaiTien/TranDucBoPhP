<?php
require_once SYSTEM_PATH."/Model/HuongdanModel.php";
class HuongdanController
{
    private $huongdanModel;
    public function __construct()
    {
        $this->huongdanModel= new HuongdanModel();
    }
    function index()
    {
        session_start();
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            $data = $this->huongdanModel->GetAlldata();
            require_once SYSTEM_PATH . "/View/Admin/Huongdan/index.php";
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
    function insert()
    {
        session_start();
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            require_once SYSTEM_PATH . "/View/Admin/Huongdan/insert.php";
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
    function SaveInsert()
    {
        $title = $_POST['title'];
        $content = $_POST['content'];      
        $dateup = $_POST['dateup'];
         $result = $this->huongdanModel->InsertRecord(new Huongdan(null,$title,$content,$dateup));
            if ($result == true)
            {
                header('location:index.php?c=Huongdan&a=index&r=1&action=Insert');
            }else{
                header('location:index.php?c=Huongdan&a=index&r=0&action=Insert');
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
            $data = $this->huongdanModel->GetRecordById($id);
            require_once SYSTEM_PATH . "/View/Admin/Huongdan/update.php";
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
    function SaveUpdate()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        if ($_FILES["file"]["tmp_name"] == null)
        {
           
            $result = $this ->huongdanModel->UpdateRecord(new Huongdan($id,$title,$content,null));
            if ($result == true)
            {
                header('location:index.php?c=Huongdan&a=index&r=1&action=Update');
            }else {
                header('location:index.php?c=Huongdan&a=index&r=0&action=Update');
            }
        
        }
    }
    function Delete()
    {
        $id=$_GET['id'];
        $result = $this->huongdanModel->DeleteRecord($id);
        if ($result == true)
        {
            header('location:index.php?c=Huongdan&a=index&r=1&action=Delete');
        }else{
            header('location:index.php?c=Huongdan&a=index&r=0&action=Delete');
        }
    }
    
}