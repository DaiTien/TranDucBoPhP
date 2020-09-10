<?php
include  "PHPMailer-master/src/PHPMailer.php";
include  "PHPMailer-master/src/Exception.php";
include  "PHPMailer-master/src/OAuth.php";
include  "PHPMailer-master/src/POP3.php";
include  "PHPMailer-master/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once SYSTEM_PATH."/Model/SlideModel.php";
require_once SYSTEM_PATH. "/Model/LibraryImageModel.php";
require_once SYSTEM_PATH."/Model/IntroduceModel.php";
require_once SYSTEM_PATH."/Model/NewsAdminModel.php";
require_once SYSTEM_PATH."/Model/ProductTypeModel.php";
require_once SYSTEM_PATH."/Model/ProductModel.php";
require_once SYSTEM_PATH."/Model/ContactModel.php";
require_once SYSTEM_PATH."/Model/SocialNetworkAdminModel.php";
require_once SYSTEM_PATH."/Model/FeedBackAdminModel.php";
require_once SYSTEM_PATH."/Model/OrderModel.php";
require_once SYSTEM_PATH."/Model/UserAdminModel.php";
class indexwebsiteController
{
    private $slideModel;
    private $libaryImageModel;
    private $introduceModel;
    private $newModel;
    private $productTypeModel;
    private $productModel;
    private $contactModel;
    private $mXh;
    private $feedBack;
    private $orderModel;
    private $userAdmin;
    public function __construct()
    {
        $this->slideModel = new SlideImageModel();
        $this->libaryImageModel = new LibraryImageModel();
        $this->introduceModel = new IntroduceModel();
        $this->newModel=new NewsAdminModel();
        $this->productTypeModel=new ProductTypeModel();
        $this->productModel = new ProductModel();
        $this->contactModel = new ContactModel();
        $this->mXh = new SocialNetworkAdminModel();
        $this->feedBack= new FeedBackAdminModel();
        $this->orderModel= new OrderModel();
        $this->userAdmin = new UserAdminModel();
    }

    function index()
    {
        session_start();
        if (isset($_SESSION['userWebsite']) && isset($_SESSION['login']))
        {
            if ($_SESSION['login'] == 1)
            {
                $user = $_SESSION['userWebsite'];
            }
        }
        $slide = $this ->slideModel->GetRecordsActive();
        $image = $this->libaryImageModel->GetRecordsByActive();
        $introduce = $this ->introduceModel->GetAlldata();
        $news = $this->newModel->GetRecordsByActive();
        $productType = $this->productTypeModel->GetAllRecords();
        $product = $this ->productModel->GetRecordsByActive();
        $contact = $this ->contactModel->GetAllRecords();
        $mxh = $this->mXh->GetByID(1);
        $feedBack = $this->feedBack->GetAllRecords();
        require_once SYSTEM_PATH. "/View/Web/index.php";
    }
    function sendFeedback()
    {
        $ho = $_POST['ho'];
        $ten = $_POST['ten'];
        $email = $_POST['email'];
        $fullName = $ho .' '.$ten;
        $title =$_POST['title'];
        $content = $_POST['content'];

        $result = $this->feedBack->InsertRecord(new FeedBackAdmin(null,$fullName,$title,$content,date("Y/m/d"),$email,null));
        if ($result == true)
        {
            header('location:index.php?c=indexwebsite&a=index&r=1&action=SendMessage');
        }
    }
    function about()
    {
        session_start();
        if (isset($_SESSION['userWebsite']) && isset($_SESSION['login']))
        {
            $user = $_SESSION['userWebsite'];
            $contact = $this ->contactModel->GetAllRecords();
            $mxh = $this->mXh->GetByID(1);
            $introduce = $this ->introduceModel->GetAlldata();
            require_once SYSTEM_PATH."/View/Web/about.php";
        }else{
            $contact = $this ->contactModel->GetAllRecords();
            $mxh = $this->mXh->GetByID(1);
            $introduce = $this ->introduceModel->GetAlldata();
            require_once SYSTEM_PATH."/View/Web/about.php";
        }

    }
    function news()
    {
        session_start();
        if (isset($_SESSION['userWebsite']) && isset($_SESSION['login']))
        {
            $user = $_SESSION['userWebsite'];
            $id = $_GET['id'];
            $contact = $this ->contactModel->GetAllRecords();
            $mxh = $this->mXh->GetByID(1);
            $news = $this->newModel->GetRecordsById($id);
            require_once SYSTEM_PATH."/View/Web/news.php";
        }else{
            $id = $_GET['id'];
            $contact = $this ->contactModel->GetAllRecords();
            $mxh = $this->mXh->GetByID(1);
            $news = $this->newModel->GetRecordsById($id);
            require_once SYSTEM_PATH."/View/Web/news.php";
        }

    }
    function forgotPassword()
    {
        $email = $_POST['email'];
        $user = $_POST['userName'];
        $role ='Member';
        //Random mật khẩu
        $randoom = rand(100000,999999);
        $password = 'abc'.$randoom;
        $passwordMD5 = md5($password);
        //Kiểm tra UserName vs email nhập có tồn tại hay không
        $result = $this->userAdmin->checkMember($user,$email,$role);
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
                $this ->userAdmin ->resetPassword($passwordMD5,$email,$role);
                header('location:index.php?c=indexwebsite&a=index&p=1');

            }catch (Exception $e)
            {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }
        }else
        {
            header('location:index.php?c=indexwebsite&a=index&p=0');
        }
    }
    function Register()
    {
        $userName = $_POST['userName'];
        $fullName = $_POST['fullName'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $role = 'Member';
        if ($password == $confirmPassword)
        {
            $passwordMD5 = md5($password);
            //$result = $this->customerModel->InsertRecord(new Customer(null,$userName,$passwordMD5,$phone,$email));
            $result = $this->userAdmin->InsertRecordWeb(new UserAdmin(null,$userName,$passwordMD5,$fullName,$gender,$phone,$email,$role));
            if ($result == true)
            {
                header('location:index.php?c=indexwebsite&a=index&g=1&action=Register');
            }else
            {
                //Email or user đã tồn tại
                header('location:index.php?c=indexwebsite&a=index&g=0&action=Register');
            }
        }else{
            header('location:index.php?c=indexwebsite&a=index&g=2&action=Register');
        }
    }
    function Login()
    {
        session_start();
        $user = $_POST['user'];
        $pass = md5($_POST['password']);
        $role = 'Member';
        $result = $this->userAdmin->LoginRecordWeb($user,$pass,$role);
        if ($result == 1)
        {
            header('location:index.php?c=indexwebsite&a=index&lg=1');
            $_SESSION['userWebsite'] = $user;
            $_SESSION['login'] = $result;

        }else{
            header('location:index.php?c=indexwebsite&a=index&lg=0&action=Register');
        }
    }
    function Logout()
    {
        session_start();
        unset($_SESSION['userWebsite']);
        unset($_SESSION['login']);
        unset($_SESSION['Cart']);
        unset($_SESSION['success']);
        unset($_SESSION['total']);
        session_destroy();
        $slide = $this ->slideModel->GetRecordsActive();
        $image = $this->libaryImageModel->GetRecordsByActive();
        $introduce = $this ->introduceModel->GetAlldata();
        $news = $this->newModel->GetRecordsByActive();
        $productType = $this->productTypeModel->GetAllRecords();
        $product = $this ->productModel->GetRecordsByActive();
        $contact = $this ->contactModel->GetAllRecords();
        $mxh = $this->mXh->GetByID(1);
        require_once SYSTEM_PATH. "/View/Web/index.php";
    }
    function addCart()
    {
        session_start();
        $id = $_GET['id'];
        $product = $this->productModel->GetByID($id);
        $name = $product ->name;
        $gia = $product->price;
        $img = $product->image;
        if (!isset($_SESSION['Cart'][$id]))
        {
            $_SESSION['Cart'][$id]['qty'] = 1;
            $_SESSION['Cart'][$id]['name'] = $name;
            $_SESSION['Cart'][$id]['gia'] = $gia;
            $_SESSION['Cart'][$id]['img'] = $img;
            $_SESSION['Cart'][$id]['tongTien'] = $gia;
            header('location:index.php?c=indexwebsite&a=index&action=SanPham');

        }else{
            if (isset($_SESSION['Cart'][$id]))
            {
                $_SESSION['Cart'][$id]['qty'] += 1;
            }else{
                $_SESSION['Cart'][$id]['qty'] = 1;
            }
            $_SESSION['Cart'][$id]['name'] = $name;
            $_SESSION['Cart'][$id]['gia'] = $gia;
            $_SESSION['Cart'][$id]['img'] = $img;
            $_SESSION['Cart'][$id]['tongTien'] = $gia * $_SESSION['Cart'][$id]['qty'];
            header('location:index.php?c=indexwebsite&a=index&action=SanPham');
        }
    }
    function OrderNow()
    {
        session_start();
        $id = $_GET['id'];
        $product = $this->productModel->GetByID($id);
        $name = $product ->name;
        $gia = $product->price;
        $img = $product->image;
        if (!isset($_SESSION['Cart'][$id]))
        {
            $_SESSION['Cart'][$id]['qty'] = 1;
            $_SESSION['Cart'][$id]['name'] = $name;
            $_SESSION['Cart'][$id]['gia'] = $gia;
            $_SESSION['Cart'][$id]['img'] = $img;
            $_SESSION['Cart'][$id]['tongTien'] = $gia;
            header('location:index.php?c=indexwebsite&a=Order');
        }
        else{
            if (isset($_SESSION['Cart'][$id]))
            {
                $_SESSION['Cart'][$id]['qty'] += 1;
            }else{
                $_SESSION['Cart'][$id]['qty'] = 1;
            }
            $_SESSION['Cart'][$id]['name'] = $name;
            $_SESSION['Cart'][$id]['gia'] = $gia;
            $_SESSION['Cart'][$id]['img'] = $img;
            $_SESSION['Cart'][$id]['tongTien'] = $gia * $_SESSION['Cart'][$id]['qty'];
            header('location:index.php?c=indexwebsite&a=Order');
        }
    }
    function Order()
    {
        session_start();
        if (isset($_SESSION['userWebsite']) && isset($_SESSION['login']))
        {
            $user = $_SESSION['userWebsite'];
            $contact = $this ->contactModel->GetAllRecords();
            $mxh = $this->mXh->GetByID(1);
            //Lấy thông tin của người order
            $profile = $this->userAdmin->GetProfileByUser($user);
            require_once SYSTEM_PATH."/View/Web/orther.php";
        }else{
            $contact = $this ->contactModel->GetAllRecords();
            $mxh = $this->mXh->GetByID(1);
            require_once SYSTEM_PATH."/View/Web/orther.php";
        }
    }
    function DeleteCart()
    {
        session_start();
        $id = $_GET['id'];
        unset($_SESSION['Cart'][$id]);
        header('location:index.php?c=indexwebsite&a=Order');
    }
    function ThanhToan()
    {
        session_start();

        if (isset($_SESSION['Cart']))
        {
            $cusId = $_POST['cusId'];
            $userName = $_POST['userName'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $totalProduct = $_POST['totalProduct'];
            $totalPrice = $_POST['totalPrice'];
            $content ='';
            foreach ($_SESSION['Cart'] as $value)
            {
                $content = $content .',' .$value['qty'] .' '.$value['name'];
            }
            $result = $this->orderModel->InsertRecords(new Order(null,$cusId,$userName,$phone,$address,$content,$totalProduct,$totalPrice,0,0));
            if ($result == true)
            {
                header('location:index.php?c=indexwebsite&a=Order&order=1');
                unset($_SESSION['Cart']);
            }else{
                header('location:index.php?c=indexwebsite&a=Order&order=0');
            }
        }else{
            echo 'Khong tồn tại';
        }

    }

}