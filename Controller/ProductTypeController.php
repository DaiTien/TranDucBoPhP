<?php
require_once SYSTEM_PATH."/Model/ProductTypeModel.php";
class ProductTypeController
{
    private $producttypeModel;
    public function __construct()
    {
        $this->producttypeModel= new ProductTypeModel();
    }
    function index()
    {
        session_start();
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            $data = $this->producttypeModel->GetAllRecords();
            require_once SYSTEM_PATH . "/View/Admin/ProductType/index.php";
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
            require_once SYSTEM_PATH . "/View/Admin/ProductType/insert.php";
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
    function SaveInsert()
    {
        $name = $_POST['name'];
        if ($name != null)
        {
            $result = $this->producttypeModel->InsertRecord(new ProductType(null,$name));
            if ($result == true)
            {
                header('location:index.php?c=ProductType&a=index&r=1&action=Insert');
            }else{
                header('location:index.php?c=ProductType&a=index&r=0&action=Insert');
            }
        }else{
            header('location:index.php?c=ProductType&a=insert&r=2');
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
            $data = $this->producttypeModel->GetRecordById($id);
            require_once SYSTEM_PATH . "/View/Admin/ProductType/update.php";
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
    function SaveUpdate()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $result = $this->producttypeModel->UpdateRecord(new ProductType($id,$name));
        if ($result == true)
        {
            header('location:index.php?c=ProductType&a=index&r=1&action=Update');
        }else{
            header('location:index.php?c=ProductType&a=index&r=0&action=Update');
        }
    }
    function Delete()
    {
        $id=$_GET['id'];
        $result = $this->producttypeModel->DeleteRecord($id);
        if ($result == true)
        {
            header('location:index.php?c=ProductType&a=index&r=1&action=Delete');
        }else{
            header('location:index.php?c=ProductType&a=index&r=0&action=Delete');
        }
    }
}