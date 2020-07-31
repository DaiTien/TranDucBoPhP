<?php
require_once SYSTEM_PATH."/Model/WebModel.php";
require_once SYSTEM_PATH."/Model/SlideModel.php";
require_once SYSTEM_PATH. "/Model/LibraryImageModel.php";
require_once SYSTEM_PATH."/Model/IntroduceModel.php";
require_once SYSTEM_PATH."/Model/NewsAdminModel.php";
require_once SYSTEM_PATH."/Model/ProductTypeModel.php";
require_once SYSTEM_PATH."/Model/ProductModel.php";
require_once SYSTEM_PATH."/Model/ContactModel.php";
require_once SYSTEM_PATH."/Model/SocialNetworkAdminModel.php";
require_once SYSTEM_PATH."/Model/FeedBackAdminModel.php";
require_once SYSTEM_PATH."/Model/CustomerModel.php";
require_once SYSTEM_PATH."/Model/OrderModel.php";
class IndexWebsiteController
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
    private $customerModel;
    private $orderModel;
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
        $this->customerModel= new CustomerModel();
        $this->orderModel= new OrderModel();
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
        $slide = $this ->slideModel->GetAllRecords();
        $image = $this->libaryImageModel->GetAllRecords();
        $introduce = $this ->introduceModel->GetAlldata();
        $news = $this->newModel->GetAlldata();
        $productType = $this->productTypeModel->GetAllRecords();
        $product = $this ->productModel->GetAllRecords();
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
            header('location:index.php?c=IndexWebsite&a=index&r=1&action=SendMessage');
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
    function Register()
    {
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        if ($password == $confirmPassword)
        {
            $result = $this->customerModel->InsertRecord(new Customer(null,$userName,$password,$phone,$email));
            if ($result == true)
            {
                header('location:index.php?c=IndexWebsite&a=index&g=1&action=Register');
            }else
            {
                //Email or user đã tồn tại
                header('location:index.php?c=IndexWebsite&a=index&g=0&action=Register');
            }
        }else{
            header('location:index.php?c=IndexWebsite&a=index&g=2&action=Register');
        }
    }
    function Login()
    {
        session_start();
        $user = $_POST['user'];
        $pass = $_POST['password'];
        $result = $this->customerModel->LoginRecord($user,$pass);
        if ($result == 1)
        {
            header('location:index.php?c=IndexWebsite&a=index&lg=1');
            $_SESSION['userWebsite'] = $user;
            $_SESSION['login'] = $result;

        }else{
            header('location:index.php?c=IndexWebsite&a=index&lg=0&action=Register');
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
        $slide = $this ->slideModel->GetAllRecords();
        $image = $this->libaryImageModel->GetAllRecords();
        $introduce = $this ->introduceModel->GetAlldata();
        $news = $this->newModel->GetAlldata();
        $productType = $this->productTypeModel->GetAllRecords();
        $product = $this ->productModel->GetAllRecords();
        $contact = $this ->contactModel->GetAllRecords();
        $mxh = $this->mXh->GetByID(1);
        require_once SYSTEM_PATH. "/View/Web/index.php";
    }
    function productLike()
    {
        $id = $_GET['id'];
        //Mãng lưu trữ các sản phẩm yêu thích
        $array = [];
        if (in_array($id,$array))
        {

        }else{
            array_push($array,$id);
        }
        print_r($array);
    }
    function addCart()
    {
        session_start();
        $id = $_GET['id'];
        $product = $this->productModel->GetByID($id);
        $name = $product ->name;
        $gia = $product->priceM;
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
        $gia = $product->priceM;
        $img = $product->image;
        if (!isset($_SESSION['Cart'][$id]))
        {
            $_SESSION['Cart'][$id]['qty'] = 1;
            $_SESSION['Cart'][$id]['name'] = $name;
            $_SESSION['Cart'][$id]['gia'] = $gia;
            $_SESSION['Cart'][$id]['img'] = $img;
            $_SESSION['Cart'][$id]['tongTien'] = $gia;
            header('location:index.php?c=IndexWebsite&a=Order');
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
            header('location:index.php?c=IndexWebsite&a=Order');
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
            $profile = $this->customerModel->GetProfileByUser($user);
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
        header('location:index.php?c=IndexWebsite&a=Order');
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
            $result = $this->orderModel->InsertRecords(new Order(null,$cusId,$userName,$phone,$address,$content,$totalProduct,$totalPrice));
            if ($result == true)
            {
                header('location:index.php?c=IndexWebsite&a=Order&r=1');
                unset($_SESSION['Cart']);
            }else{
                header('location:index.php?c=IndexWebsite&a=Order&r=0');
            }
        }else{
            echo 'Khong tồn tại';
        }

    }

}