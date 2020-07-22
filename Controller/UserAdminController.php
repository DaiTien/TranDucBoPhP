<?php
require_once SYSTEM_PATH."/Model/UserAdminModel.php";
class UserAdminController
{
    private $useradminModel;
    public function __construct()
    {
        $this ->useradminModel = new UserAdminModel();
    }

    function index()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $data = $this ->useradminModel->GetAllRecords();
        require_once SYSTEM_PATH. "/View/Admin/User/index.php";
    }
    function Insert()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        require_once SYSTEM_PATH. "/View/Admin/User/insert.php";
    }
    function InsertSave()
    {
        $id = $_POST['id'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $fullName = $_POST['fullName'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $result = $this ->useradminModel->InsertRecord(new UserAdmin($id,$userName,$password,$fullName,$gender,$phone,$email,$role));
        if ($result == true)
        {
            header('location:index.php?c=UserAdmin&a=index&r=1&action=Insert');
        }else {
            header('location:index.php?c=UserAdmin&a=index&r=0&action=Insert');
        }

    }
    function Update()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $id =$_GET['id'];
        $data = $this->useradminModel->GetRecordsById($id);
        require_once SYSTEM_PATH. "/View/Admin/User/profile.php";
    }
    function Save()
    {
        $id = $_POST['id'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $fullName = $_POST['fullName'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $result = $this ->useradminModel->UpdateRecord(new UserAdmin($id,$userName,$password,$fullName,$gender,$phone,$email,$role));
        if ($result == true)
        {
            header('location:index.php?c=UserAdmin&a=index&r=1&action=Update');
        }else {
            header('location:index.php?c=UserAdmin&a=index&r=0&action=Update');
        }
    }
    function Delete()
    {
        $id = $_GET['id'];
        $result = $this->useradminModel->DeleteRecord($id);
        if ($result == true)
        {
            header('location:index.php?c=UserAdmin&a=index&r=1&action=Delete');
        }else {
            header('location:index.php?c=UserAdmin&a=index&r=0&action=Delete');
        }
    }

}