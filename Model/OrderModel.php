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
    public $transport;
    public $active;

    public function __construct($id,$customerId,$name,$phone,$address,$content,$totalProduct,$totalPrice,$transport,$active)
    {
        $this->id=$id;
        $this->customerId=$customerId;
        $this->name=$name;
        $this->phone=$phone;
        $this->address=$address;
        $this->content=$content;
        $this->totalProduct=$totalProduct;
        $this->totalPrice=$totalPrice;
        $this->transport=$transport;
        $this->active=$active;
    }
}
class OrderModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }
    function InsertRecords(Order $order)
    {
        $query = "insert into tdb_order(CustomerId,Name,Phone,Address,Content,TotalProduct,TotalPrice,Transport,Active) value ( $order->customerId ,'$order->name','$order->phone','$order->address','$order->content', $order->totalProduct, $order->totalPrice, $order->transport, $order->active)";
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function GetAllRecords()
    {
        $query ="select * from tdb_order order by id DESC";
        $result = $this->mysqli->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data, new Order($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7],$value[8],$value[9]));
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
            return new Order($data[0][0], $data[0][1], $data[0][2], $data[0][3],$data[0][4], $data[0][5], $data[0][6],$data[0][7],$data[0][8],$data[0][9]);
        }
        return null;
    }
    function delete( $id)
    {
        $query = "DELETE from tdb_order WHERE Id = '$id'";
        $result = $this->mysqli->query($query);
        return $result;
    }
    //Update Transport
    function UpdateTransport($id)
    {
        $result = $this->mysqli->query("update tdb_order set transport = 1 where id = $id");
        return $result;
    }
    //Update Active
    function UpdateActive($id)
    {
        $result = $this->mysqli->query("update tdb_order set active = 1 where id = $id");
        return $result;
    }
}