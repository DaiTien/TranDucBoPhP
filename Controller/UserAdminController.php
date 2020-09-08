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
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            $role ='Admin';
            $data = $this ->useradminModel->GetAllRecords($user,$role);
            require_once SYSTEM_PATH. "/View/Admin/User/index.php";
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
    function Insert()
    {
        session_start();
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            require_once SYSTEM_PATH. "/View/Admin/User/insert.php";
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
    function InsertSave()
    {
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $passwordMD5 = md5($password);
        $fullName = $_POST['fullName'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $role = 'Admin';
        if ($userName == null || $password == null|| $email == null)
        {
            header('location:index.php?c=UserAdmin&a=Insert&r=3');
        }else{
            $result = $this ->useradminModel->InsertRecordAdmin(new UserAdmin(null,$userName,$passwordMD5,$fullName,$gender,$phone,$email,$role));
            if ($result == true)
            {
                header('location:index.php?c=UserAdmin&a=index&r=1&action=Insert');
            }
            if ($result == "user")
            {
                header('location:index.php?c=UserAdmin&a=Insert&r=2&n='.$userName.'&ht='.$fullName.'&p='.$phone.'&g='.$gender.'&pass='.$password.'&e='.$email);
            }
            if ($result == false)
            {
                header('location:index.php?c=UserAdmin&a=Insert&r=0&n='.$userName.'&ht='.$fullName.'&p='.$phone.'&g='.$gender.'&pass='.$password.'&e='.$email);
            }
        }
    }
    function Update()
    {
        session_start();
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            $id =$_GET['id'];
            $data = $this->useradminModel->GetRecordsById($id);
            require_once SYSTEM_PATH. "/View/Admin/User/profile.php";
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
    function Save()
    {
        $id = $_POST['id'];
        $password = $_POST['password'];
        $passwordMD5 = md5($password);
        $fullName = $_POST['fullName'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];
        $result = $this ->useradminModel->UpdateRecord(new UserAdmin($id,null,$passwordMD5,$fullName,$gender,$phone,null,$role));
        if ($result == true)
        {
            header('location:index.php?c=UserAdmin&a=index&r=1&action=Update');
        }else {
            header('location:index.php?c=UserAdmin&a=Update&id='.$id.'&r=0');
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