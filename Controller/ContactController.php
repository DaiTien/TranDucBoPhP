<?php
require_once SYSTEM_PATH. "/Model/ContactModel.php";
class ContactController
{
    private $contactModel;
    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }

    function index()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $data = $this->contactModel->GetAllRecords();
        require_once SYSTEM_PATH. "/View/Admin/Contact/index.php";
    }
    function insert(){
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        require_once SYSTEM_PATH."/View/Admin/Contact/insert.php";
    }
    function Save(){
            $id = $_POST['id'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $result = $this->contactModel->insert( new Contact($id, $email, $phone, $address));
            if($result == true){
                header('location:index.php?c=Contact&a=index&r=1&action=Insert');
            }else{
                header('location:index.php?c=Contact&a=index&r=0&action=Insert');
            }

    }
    function Update()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $avatarUser = $_SESSION['avatarUser'];
        $id = $_GET['id'];
        $contact = $this->contactModel->GetByID($id);
        require_once SYSTEM_PATH. '/View/Admin/Contact/update.php';
    }
    function  LuuSua(){
        $id = $_POST['id'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $result = $this->contactModel->Update( new Contact($id, $email, $phone, $address));
        if($result == true){
            header('location:index.php?c=Contact&a=index&r=1&action=Update');
        }else{
            header('location:index.php?c=Contact&a=index&r=0&action=Update');
        }
    }
    function delete(){
        $id = $_GET['id'];
        $contact = $this->contactModel->delete($id);
        if($contact == true){
            header('location:index.php?c=Contact&a=index&r=1&action=Delete');
        }else{
            header('location:index.php?c=Contact&a=index&r=0&action=Delete');
        }
    }
}