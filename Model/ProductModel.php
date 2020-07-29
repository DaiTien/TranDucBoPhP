<?php
class Product
{
    public $id;
    public $name;
    public $image;
    public $summary;
    public $content;
    public $soLuong;
    public $priceM;
    public $priceL;
    public $type;
    public $totalLike;

    public function __construct($id,$name,$image,$summary,$content,$soLuong,$priceM,$priceL,$type,$totalLike)
    {
        $this->id=$id;
        $this->name=$name;
        $this->image=$image;
        $this->summary=$summary;
        $this->content=$content;
        $this->soLuong=$soLuong;
        $this->priceM=$priceM;
        $this->priceL=$priceL;
        $this->type=$type;
        $this->totalLike=$totalLike;

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
        $result = $this->mysqli->query(" select * from tdb_product ");
        $data = [];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data,new Product($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7],$value[8],$value[9]));
        }
        return $data;
    }
    function insert(Product $product)
    {
        $query = "Insert Into tdb_product(name,image,summary,content,soluong,pricem,pricel,producttypeid) VALUE ('$product->name', '$product->image' , '$product->summary' , '$product->content' , $product->soLuong , '$product->priceM' , '$product->priceL' , $product->type )";
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
            return new Product($data[0][0], $data[0][1], $data[0][2], $data[0][3],$data[0][4], $data[0][5], $data[0][6], $data[0][7], $data[0][8], $data[0][9]);
        }
        return null;
    }

    function Update(Product $product)
    {
        $query = "UPDATE tdb_product SET Name='$product->name', Image = '$product->image', Summary = '$product->summary',Content = '$product->content' , SoLuong = $product->soLuong ,PriceM = '$product->priceM',PriceL='$product->priceL', producttypeid = $product->type WHERE Id = $product->id";
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
            array_push($data , new Product($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7],$value[8],$value[9]));
        }
        $soluong = count($data);
        return $soluong;
    }
}