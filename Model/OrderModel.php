<?php
class Order{
    public $id;
    public $customerId;
    public $name;
    public $phone;
    public $address;
    public $content;
    public $totalProduct;
    public $totalPrice;

    public function __construct($id,$customerId,$name,$phone,$address,$content,$totalProduct,$totalPrice)
    {
        $this->id=$id;
        $this->customerId=$customerId;
        $this->name=$name;
        $this->phone=$phone;
        $this->address=$address;
        $this->content=$content;
        $this->totalProduct=$totalProduct;
        $this->totalPrice=$totalPrice;
    }
}
class OrderModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }
    function InsertRecords(Order $order)
    {
        $query = "insert into tdb_order(CustomerId,Name,Phone,Address,Content,TotalProduct,TotalPrice) value ( $order->customerId ,'$order->name','$order->phone','$order->address','$order->content', $order->totalProduct, $order->totalPrice)";
        $result = $this->mysqli->query($query);
        return $result;
    }
}