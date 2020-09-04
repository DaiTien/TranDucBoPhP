<?php
require_once SYSTEM_PATH. "/Model/OrderModel.php";
class OderController
{
    private $oderModel;

    public function __construct()
    {
        $this->oderModel = new OrderModel();
    }

    function index()
    {
        session_start();
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            $data = $this->oderModel->GetAllRecords();
            require_once SYSTEM_PATH . "/View/Admin/Oder/index.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/login.php";
        }

    }
    function delete(){
        $id = $_GET['id'];
        $oderModel = $this->oderModel->delete($id);
        if($oderModel == true){
            header('location:index.php?c=Oder&a=index&r=1&action=Delete');
        }else{
            header('location:index.php?c=Oder&a=index&r=0&action=Delete');
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
            $tdb_order = $this->oderModel->GetByID($id);
            $this->UpActive();
            require_once SYSTEM_PATH. '/View/Admin/Oder/update.php';
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }
    }
    //Func cập nhật tình trạng
    //---Hiển thị
    function UpTransport()
    {
        if (!empty($_POST['duyet']))
        {
            if(!empty($_POST['array'])) {
                foreach($_POST['array'] as $value){
                    $result = $this->oderModel->UpdateTransport($value);
                    if ($result == true)
                    {
                        header('location:index.php?c=Oder&a=index&r=1&action=Update Giao hàng');
                    }else{
                        header('location:index.php?c=Oder&a=index&r=0&action=Update Giao hàng');
                    }
                }
            }
            else{
                header('location:index.php?c=Oder&a=index&r=2');
            }
        }

    }
    function UpActive()
    {
        $id = $_GET['id'];
        $result = $this->oderModel->UpdateActive($id);
    }
}