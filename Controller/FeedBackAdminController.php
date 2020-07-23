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
        $user = $_SESSION['userAdmin'];
        $data = $this->feedbackModel->GetAllRecords();
        require_once SYSTEM_PATH . "/View/Admin/FeedBack/index.php";
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
        $user = $_SESSION['userAdmin'];
        $id = $_GET['id'];
        $tdb_product = $this->feedbackModel->GetByID($id);
        require_once SYSTEM_PATH. '/View/Admin/FeedBack/update.php';
    }
}