<?php
require_once SYSTEM_PATH. "/Model/FeedBackAdminModel.php";
class FeedBackAdminController
{
    private $feedbackModel;

    public function __construct()
    {
        $this->feedbackModel = new FeedBackAdminModel();
    }

    function index()
    {
        session_start();
        if (isset($_SESSION['userAdmin']))
        {
            $user = $_SESSION['userAdmin'];
            $avatarUser = $_SESSION['avatarUser'];
            $data = $this->feedbackModel->GetAllRecords();
            require_once SYSTEM_PATH . "/View/Admin/FeedBack/index.php";
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }
    }

    function delete()
    {
        $id = $_GET['id'];
        $tdb_product = $this->feedbackModel->delete($id);
        if ($tdb_product == true) {
            header('location:index.php?c=FeedBackAdmin&a=index&r=1&action=Delete');
        } else {
            header('location:index.php?c=FeedBackAdmin&a=index&r=0&action=Delete');
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
            $tdb_product = $this->feedbackModel->GetByID($id);
            require_once SYSTEM_PATH. '/View/Admin/FeedBack/update.php';
        }
        else
        {
            require_once  SYSTEM_PATH. "/View/Admin/login.php";
        }
    }
}