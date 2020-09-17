<?php
class Huongdan
{
    public $id;
    public $title;
    public $content;
    public $dateup;

    public function __construct($id,$title,$content,$dateup)
    {
        $this->id=$id;
        $this->title=$title;
        $this->content=$content;
        $this->dateup=$dateup;
    }
}
class HuongdanModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }
    function GetAlldata()
    {
        $result = $this->mysqli->query("select * from tdb_huongdan order by id DESC");
        $data = [];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data,new Huongdan($value[0],$value[1],$value[2],$value[3]));
        }
        return $data;
    }
    function InsertRecord(Huongdan $huongdan)
    {
        $query = "insert into tdb_huongdan(title,content,dateup) VALUE ('$huongdan->title','$huongdan->content','$huongdan->dateup')";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function GetRecordById($id)
    {
        $result = $this->mysqli->query("select * from tdb_huongdan where id =$id");
        $data = $result->fetch_all();
        if (count($data))
        {
            return new Huongdan($data[0][0],$data[0][1],$data[0][2],$data[0][3]);
        }
        return null;
    }
    function UpdateRecord(Huongdan $huongdan)
    {
        $query ="Update tdb_huongdan set title ='$huongdan->title',content ='$huongdan->content',dateup='$huongdan->dateup' where id = $huongdan->id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function DeleteRecord($id)
    {
        $query ="delete from tdb_huongdan where id =$id";
        $result = $this->mysqli->query($query);
        return $result;
    }
  
}