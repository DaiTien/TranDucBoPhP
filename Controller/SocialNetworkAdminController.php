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
        $user = $_SESSION['userAdmin'];
        $data = $this->socialModel->GetAllRecords();
        require_once SYSTEM_PATH. "/View/Admin/SocialNetwork/index.php";
    }
}