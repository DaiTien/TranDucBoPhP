<?php
require_once SYSTEM_PATH. "/Model/UserAdminModel.php";
class CustomerController
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new UserAdminModel();
    }

    function index()
    {
        session_start();
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            $role = 'Member';
            $data = $this->userModel->GetAllRecords(null,$role);
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
            $userName = $_POST['userName'];
            $fullName = $_POST['fullName'];
            $password = $_POST['password'];
            $passwordMD5 = md5($password);
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $role = 'Member';
            $result = $this->userModel->InsertRecordWeb( new UserAdmin(null,$userName,$passwordMD5,$fullName,$gender,$phone,$email,$role));
            if($result == true){
                header('location:index.php?c=Customer&a=index&r=1&action=Insert');
            }else{
                header('location:index.php?c=Customer&a=insert&r=0&u='.$userName.'&pass='.$password.'&full='.$fullName.'&phone='.$phone.'&email='.$email.'&gender='.$gender);
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
            $cus = $this->userModel->GetRecordsById($id);
            require_once SYSTEM_PATH. '/View/Admin/Customer/update.php';
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }
    }
    function LuuSua(){
        $id = $_POST['id'];
        $phone = $_POST['phone'];
        $fullName = $_POST['fullName'];
        $gender = $_POST['gender'];
        $result = $this->userModel->UpdateRecord(new UserAdmin($id,null,null,$fullName,$gender,$phone,null,null));
        if($result == true){
            header('location:index.php?c=Customer&a=index&r=1&action=Update');
        }else{
            header('location:index.php?c=Customer&a=index&r=0&action=Update');
        }
    }
    function delete(){
        $id = $_GET['id'];
        $cus = $this->userModel->DeleteRecord($id);
        if($cus == true){
            header('location:index.php?c=Customer&a=index&r=1&action=Delete');
        }else{
            header('location:index.php?c=Customer&a=index&r=0&action=Delete');
        }
    }
}