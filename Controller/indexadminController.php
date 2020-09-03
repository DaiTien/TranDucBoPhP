<?php
include  "PHPMailer-master/src/PHPMailer.php";
include  "PHPMailer-master/src/Exception.php";
include  "PHPMailer-master/src/OAuth.php";
include  "PHPMailer-master/src/POP3.php";
include  "PHPMailer-master/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once SYSTEM_PATH. "/Model/AdminModel.php";
require_once SYSTEM_PATH. "/Model/FeedBackAdminModel.php";
require_once SYSTEM_PATH. "/Model/ProductModel.php";
class indexadminController
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
        $passwordMD5 = md5($password);
        $role = 'Admin';
        $confirm_password = $_POST['confirm_password'];
        $email = $_POST['email'];
        if($userName == null || $password == null  || $confirm_password ==null || $email==null)
        {
            header('location:index.php?c=indexadmin&a=register&r=3&action=Create');
        }
        else
        if ($password == $confirm_password)
        {
            $result = $this ->adminModel->registerRecord(new Admin(null,$userName,$passwordMD5,null,null,null,$email,$role,null));
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
        $pass = md5($_POST['pass']);
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
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            $totalMember = $this -> adminModel ->CountMember();
            $totalFeedBack = $this ->feedbackModel ->CountFeedBack();
            $totalProduct = $this ->productModel ->CountProduct();
            require_once SYSTEM_PATH."/View/Admin/dashboard.php";
        }
        else
        {
            require_once SYSTEM_PATH . "/View/Admin/login.php";
        }
    }
    function lockscreen()
    {
        session_start();
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            require_once SYSTEM_PATH."/View/Admin/lockscreen.php";
        }else{
            require_once SYSTEM_PATH . "/View/Admin/login.php";
        }
    }
    function openscreen()
    {
        session_start();
        $matkhau =md5($_POST['matkhau']);
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
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            $data = $this ->adminModel->getPassword($user);
            require_once SYSTEM_PATH."/View/Admin/profile.php";
        }else{
            require_once SYSTEM_PATH . "/View/Admin/login.php";
        }
    }
    function UpdateProfile()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $pass = $_POST['password'];
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $result = $this->adminModel->UpdateRecord(new Admin(null,$user,$pass,$fullName,null,$phone,$email,null,null));
        if ($result == true)
        {
            header('location:index.php?c=indexadmin&a=profile&r=1&action=Update');
        }else{
            header('location:index.php?c=indexadmin&a=profile&r=0&action=Update');
        }
    }
    function updateAvatar()
    {
        session_start();
        $user = $_SESSION['userAdmin'];

        if ($_FILES["file"]["error"] > 0)
        {
            header('location:index.php?c=indexadmin&a=profile&u=2');
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],"UpLoadFile/Avatars/".$_FILES["file"]["name"]);
            $image = "UpLoadFile/Avatars/".$_FILES["file"]["name"];
            $result = $this->adminModel->UpdateAvatar(new Admin(null,$user,null,null,null,null,null,null,$image));
            if ($result == true)
            {
                header('location:index.php?c=indexadmin&a=profile&u=1&action=UpdateAvatar');
                $_SESSION['avatarUser'] = $image;
                $avatarUser = $_SESSION['avatarUser'];
            }else{
                header('location:index.php?c=indexadmin&a=profile&u=0&action=UpdateAvatar');
            }
        }
    }
    function forgotPassword()
    {
        require_once SYSTEM_PATH ."/View/Admin/forgotPassword.php";
    }
    function requestPassword()
    {
        $email = $_POST['email'];
        //Random mật khẩu
        $randoom = rand(100,999);
        $password = 'abc'.$randoom;
        $passwordMD5 = md5($password);
        $result = $this->adminModel->forgotPassword($email);
        if ($result ==1)
        {
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->SMTPDebug = 2;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'tranducbo17a1.11@gmail.com';
                $mail->Password = 'Abc123#!';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->CharSet = 'UTF-8';
                $mail->setFrom('tranducbo17a1.11@gmail.com', 'Admin TRần Đức Bo');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = 'Trần Đức Bo Xác nhận lấy lại mật khẩu';
                $mail->Body    = 'Bạn đã yêu cầu mật khẩu mới, Mật khẩu mới của bạn là : '.$password;
                $mail->AltBody = '';

                $mail->send();
                $this ->adminModel ->updatePasswordByEmail($email,$passwordMD5);
                header('location:index.php?c=indexadmin&a=forgotPassword&r=1');

            }catch (Exception $e)
            {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }
        }else
        {
            header('location:index.php?c=indexadmin&a=forgotPassword&r=0');
        }
    }
}