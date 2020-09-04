<?php
class Product
{
    public $id;
    public $name;
    public $image;
    public $summary;
    public $content;
    public $price;
    public $type;
    public $active;

    public function __construct($id,$name,$image,$summary,$content,$price,$type,$active)
    {
        $this->id=$id;
        $this->name=$name;
        $this->image=$image;
        $this->summary=$summary;
        $this->content=$content;
        $this->price=$price;
        $this->type=$type;
        $this->active=$active;

    }
}
class ProductModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }
    function GetAllRecords()
    {
        $result = $this->mysqli->query(" select * from tdb_product ");
        $data = [];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data,new Product($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7]));
        }
        return $data;
    }
    function GetRecordsByActive()
    {
        $result = $this->mysqli->query(" select * from tdb_product where active = 1");
        $data = [];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data,new Product($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7]));
        }
        return $data;
    }
    function insert(Product $product)
    {
        $query = "Insert Into tdb_product(name,image,summary,content,price,producttypeid,active) VALUE ('$product->name', '$product->image' , '$product->summary' , '$product->content', '$product->price' , $product->type,$product->active )";
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
            return new Product($data[0][0], $data[0][1], $data[0][2], $data[0][3],$data[0][4], $data[0][5], $data[0][6], $data[0][7]);
        }
        return null;
    }

    function Update(Product $product)
    {
        $query = "UPDATE tdb_product SET Name='$product->name', Image = '$product->image', Summary = '$product->summary',Content = '$product->content' , Price = '$product->price', producttypeid = $product->type WHERE Id = $product->id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    //Update Active
    function UpdateActive($id)
    {
        $result = $this->mysqli->query("update tdb_product set active = 1 where id = $id");
        return $result;
    }
    function UpdateActive2($id)
    {
        $result = $this->mysqli->query("update tdb_product set active = 0 where id = $id");
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
            array_push($data , new Product($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7]));
        }
        $soluong = count($data);
        return $soluong;
    }
}