<?php
require_once SYSTEM_PATH. "/Model/FeedBackAdminModel.php";
class FeedBackAdminController
{
    private $feedbackModel;
    public function __construct()
    {
        $this ->feedbackModel = new FeedBackAdminModel();
    }

    function index()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $data = $this ->feedbackModel->GetAllRecords();
        require_once SYSTEM_PATH. "/View/Admin/FeedBack/index.php";
    }

}