<?php
require_once SYSTEM_PATH. "/Model/AdminModel.php";
class IndexAdminController
{
    private $adminModel;
    public function __construct()
    {
        $this ->adminModel = new AdminModel();
    }

    function index(){
        require_once SYSTEM_PATH. "/View/Admin/index.php";
    }
    function register()
    {
        require_once SYSTEM_PATH. "/View/Admin/register.php";
    }
    function signUp()
    {
        $userName = $_POST['username'];
        $password = $_POST['password'];
        $role = 'Admin';
        $confirm_password = $_POST['confirm_password'];
        if ($password == $confirm_password)
        {
            $result = $this ->adminModel->registerRecord(new Admin($userName,$password,null,null,null,null,$role));
            if ($result == true)
            {
                header('location:index.php?c=indexadmin&a=register&r=1&action=Create');
            }else
            {
                header('location:index.php?c=indexadmin&a=register&r=0&action=Create');
            }
        }else
        {
            header('location:index.php?c=indexadmin&a=register&r=2&action=Create');
        }

    }
    function login()
    {
        session_start();
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $result = $this ->adminModel->loginRecord($user,$pass);
        if ($result == 0){
            header('location:index.php?c=indexadmin&a=index&r=0&action=login');
        }
        else{
            $_SESSION['userAdmin'] = $user;
            echo $_SESSION['userAdmin'];
        }
    }
}