<?php
class Product
{
    public $id;
    public $name;
    public $image;
    public $summary;
    public $soLuong;
    public $price;
    public $type;

    public function __construct($id,$name,$image,$summary,$soLuong,$price,$type)
    {
        $this->id=$id;
        $this->name=$name;
        $this->image=$image;
        $this->summary=$summary;
        $this->soLuong=$soLuong;
        $this->price=$price;
        $this->type=$type;

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
            array_push($data,new Product($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6]));
        }
        return $data;
    }
    function insert(Product $product)
    {
        $query = "Insert Into tdb_product(name,image,summary,soluong,price,producttypeid) VALUE ('$product->name', '$product->image', '$product->summary',$product->soLuong, '$product->price',$product->type)";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function GetByID($id)
    {
        $query = "SELECT
                        * 
                    FROM
                        tdb_product
                    WHERE
                        Id = '$id' LIMIT 1";
        $result = $this->mysqli->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new Product($data[0][0], $data[0][1], $data[0][2], $data[0][3],$data[0][4], $data[0][5], $data[0][6]);
        }
        return null;
    }

    function Update(product $product)
    {
        $query = "UPDATE tdb_product SET Name = '$product->name', Image = '$product->image', Summary = '$product->summary',SoLuong =$product->soLuong,Price = '$product->price', producttypeid = $product->type
WHERE Id = '$product->id'";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function delete( $id)
    {
        $query = "DELETE from tdb_product WHERE Id = '$id'";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function CountProduct()
    {
        $result = $this->mysqli->query("select * from tdb_product");
        $data = [];
        foreach ( $result->fetch_all() as $value)
        {
            array_push($data , new Product($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6]));
        }
        $soluong = count($data);
        return $soluong;
    }
}