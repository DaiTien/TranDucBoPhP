<?php
class ProductType
{
    public $id;
    public $name;

    public function __construct($id,$name)
    {
        $this->id=$id;
        $this->name=$name;
    }
}
class ProductTypeModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }
    function GetAllRecords()
    {
        $result = $this->mysqli->query("select * from tdb_producttype order by id DESC");
        $data = [];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data,new ProductType($value[0],$value[1]));
        }
        return $data;
    }
    function InsertRecord(ProductType $productType)
    {
        $query = "insert into tdb_producttype(name) value ('$productType->name')";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function GetRecordById($id)
    {
        $result = $this->mysqli->query("select * from tdb_producttype where id =$id");
        $data = $result->fetch_all();
        if (count($data))
        {
            return new ProductType($data[0][0],$data[0][1]);
        }
        return null;
    }
    function UpdateRecord(ProductType $productType)
    {
        $result = $this->mysqli->query("update tdb_producttype set name ='$productType->name' where id =$productType->id");
        return $result;
    }
    function DeleteRecord($id)
    {
        $result = $this->mysqli->query("delete from tdb_producttype where id =$id");
        return $result;
    }
}