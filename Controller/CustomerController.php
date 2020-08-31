<?php
require_once SYSTEM_PATH. "/Model/CustomerModel.php";
class CustomerController
{
    private $cusmoterModel;
    public function __construct()
    {
        $this->cusmoterModel = new CustomerModel();
    }

    function index()
    {
        session_start();
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            $data = $this->cusmoterModel->GetAllRecords();
            require_once SYSTEM_PATH. "/View/Admin/Customer/index.php";
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
    function insert(){
        session_start();
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            require_once SYSTEM_PATH."/View/Admin/Customer/insert.php";
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
    function Save(){
            $id = $_POST['id'];
            $userName = $_POST['userName'];
            $password = md5($_POST['password']);
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $result = $this->cusmoterModel->insert( new Customer($id, $userName, $password, $phone, $email));
            if($result == true){
                header('location:index.php?c=Customer&a=index&r=1&action=Insert');
            }else{
                header('location:index.php?c=Customer&a=index&r=0&action=Insert');
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
            $cus = $this->cusmoterModel->GetRecordById($id);
            require_once SYSTEM_PATH. '/View/Admin/Customer/update.php';
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }
    }
    function  LuuSua(){
        $id = $_POST['id'];
        $userName = $_POST['userName'];
        $password = md5($_POST['password']);
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $result = $this->cusmoterModel->Update( new Customer($id, $userName, $password, $phone, $email));
        if($result == true){
            header('location:index.php?c=Customer&a=index&r=1&action=Insert');
        }else{
            header('location:index.php?c=Customer&a=index&r=0&action=Insert');
        }
    }
    function delete(){
        $id = $_GET['id'];
        $cus = $this->cusmoterModel->delete($id);
        if($cus == true){
            header('location:index.php?c=Customer&a=index&r=1&action=Delete');
        }else{
            header('location:index.php?c=Customer&a=index&r=0&action=Delete');
        }
    }
}