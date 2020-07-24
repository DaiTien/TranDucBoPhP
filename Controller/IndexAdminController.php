<?php
require_once SYSTEM_PATH. "/Model/AdminModel.php";
require_once SYSTEM_PATH. "/Model/FeedBackAdminModel.php";
require_once SYSTEM_PATH. "/Model/ProductModel.php";
class IndexAdminController
{
    private $adminModel;
    private $feedbackModel;
    private $productModel;
    public function __construct()
    {
        $this ->adminModel = new AdminModel();
        $this ->feedbackModel = new FeedBackAdminModel();
        $this->productModel=new ProductModel();
    }

    function index(){
        require_once SYSTEM_PATH. "/View/Admin/login.php";
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
        if($userName == null || $password == null  || $confirm_password ==null)
        {
            header('location:index.php?c=indexadmin&a=register&r=3&action=Create');
        }
        else
        if ($password == $confirm_password)
        {
            $result = $this ->adminModel->registerRecord(new Admin(null,$userName,$password,null,null,null,null,$role));
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
        $avatar = $this ->adminModel->getPassword($user);
        $avatarUser = $avatar ->avatar;
        if($user == null || $pass == null){
            header('location:index.php?c=indexadmin&a=index&r=1&action=login');
        }else
        if ($result == 0){
            header('location:index.php?c=indexadmin&a=index&r=0&action=login');
        }
        else{
            header('location:index.php?c=indexadmin&a=trangchu');
            $_SESSION['userAdmin'] = $user;
            $_SESSION['avatarUser'] = $avatarUser;
        }
    }
    function logout()
    {
        session_start();
        unset($_SESSION['userAdmin']);
        unset($_SESSION['avatarUser']);
        session_destroy();
        require_once SYSTEM_PATH . "/View/Admin/login.php";
    }
    function trangchu()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $totalMember = $this -> adminModel ->CountMember();
        $totalFeedBack = $this ->feedbackModel ->CountFeedBack();
        $totalProduct = $this ->productModel ->CountProduct();
        require_once SYSTEM_PATH."/View/Admin/dashboard.php";
    }
    function lockscreen()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        require_once SYSTEM_PATH."/View/Admin/lockscreen.php";
    }
    function openscreen()
    {
        session_start();
        $matkhau =$_POST['matkhau'];
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $result = $this ->adminModel ->getPassword($user);
        $matkhauuser = $result->passWord;
        if ($matkhau == $matkhauuser)
        {
            header('location:index.php?c=indexadmin&a=trangchu');
        }else{
            header('location:index.php?c=indexadmin&a=lockscreen&r=0');
        }
    }
    function profile()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $data = $this ->adminModel->getPassword($user);
        require_once SYSTEM_PATH."/View/Admin/profile.php";
    }
}