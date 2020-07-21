<?php
class Product
{
    public $id;
    public $name;
    public $title;
    public $image;
    public $summary;
    public $price;

    public function __construct($id,$name,$title,$image,$summary,$price)
    {
        $this->id=$id;
        $this->name=$name;
        $this->title=$title;
        $this->image=$image;
        $this->summary=$summary;
        $this->price=$price;

    }
}
class ProductModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }
    function GetAllRecords()
    {
        $result = $this->mysqli->query("select * from tdb_product");
        $data =[];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data,new Product($value[0],$value[1],$value[2],$value[3],$value[4],$value[5]));
        }
        return $data;
    }

}