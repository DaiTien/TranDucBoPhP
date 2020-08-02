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
    public function GetAllRecords()
    {
        $query ="select * from tdb_order";
        $result = $this->mysqli->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data, new Order($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7]));
        }
        return $data;
    }
    function GetByID($id)
    {
        $query = "SELECT
                        * 
                    FROM
                        tdb_order
                    WHERE
                        Id = '$id' LIMIT 1";
        $result = $this->mysqli->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new Order($data[0][0], $data[0][1], $data[0][2], $data[0][3],$data[0][4], $data[0][5], $data[0][6],$data[0][7]);
        }
        return null;
    }
    function delete( $id)
    {
        $query = "DELETE from tdb_order WHERE Id = '$id'";
        $result = $this->mysqli->query($query);
        return $result;
    }
}