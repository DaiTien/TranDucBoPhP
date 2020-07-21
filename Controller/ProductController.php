<?php
require_once SYSTEM_PATH. "/Model/ProductModel.php";
class ProductController
{
    private $productModel;
    public function __construct()
    {
        $this->productModel=new ProductModel();
    }

    function index()
    {
        session_start();
        $user = $_SESSION['userAdmin'];
        $data = $this ->productModel ->GetAllRecords();
        require_once SYSTEM_PATH. "/View/Admin/Product/index.php";
    }
}