<?php
require_once SYSTEM_PATH. "/Model/SocialNetworkAdminModel.php";
class SocialNetworkAdminController
{
    private $socialModel;
    public function __construct()
    {
        $this->socialModel = new SocialNetworkAdminModel();
    }

    function index()
    {
        session_start();
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            $data = $this->socialModel->GetAllRecords();
            require_once SYSTEM_PATH. "/View/Admin/SocialNetwork/index.php";
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
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
            $socialNetworkAdmin = $this->socialModel->GetByID($id);
            require_once SYSTEM_PATH. '/View/Admin/SocialNetwork/update.php';
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }

    }
    function  LuuSua(){
        $id = $_POST['id'];
        $facebook = $_POST['facebook'];
        $twitter = $_POST['twitter'];
        $instagram = $_POST['instagram'];
        $google = $_POST['google'];
        $result = $this->socialModel->Update( new SocialNetworkAdmin($id, $facebook, $twitter, $instagram,$google));
        if($result == true){
            header('location:index.php?c=SocialNetworkAdmin&a=index&r=1&action=Update');
        }else{
            header('location:index.php?c=SocialNetworkAdmin&a=index&r=0&action=Update');
        }
    }
    function delete(){
        $id = $_GET['id'];
        $socialNetworkAdmin = $this->socialModel->delete($id);
        if($socialNetworkAdmin == true){
            header('location:index.php?c=SocialNetworkAdmin&a=index&r=1&action=Delete');
        }else{
            header('location:index.php?c=SocialNetworkAdmin&a=index&r=0&action=Delete');
        }
    }
}