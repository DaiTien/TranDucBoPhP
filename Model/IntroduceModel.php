<?php
class Introduce
{
    public $id;
    public $title;
    public $summary;
    public $content;
    public $image;
    public $dateup;

    public function __construct($id,$title,$summary,$content,$image,$dateup)
    {
        $this->id=$id;
        $this->title=$title;
        $this->summary=$summary;
        $this->content=$content;
        $this->image=$image;
        $this->dateup=$dateup;
    }
}
class IntroduceModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }
    function GetAlldata()
    {
        $result = $this->mysqli->query("select * from tdb_introduce order by id DESC");
        $data=[];
        foreach($result->fetch_all() as $value)
        {
            array_push($data,new Introduce($value[0],$value[1],$value[2],$value[3],$value[4],$value[5]));
        }
        return $data;
    }
    function InsertRecord(Introduce $introduce)
    {
        $query = "insert into tdb_introduce(title,summary,content,image,dateup) VALUE ('$introduce->title','$introduce->summary','$introduce->content','$introduce->image','$introduce->dateup')";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function GetRecordsById($id)
    {
        $result = $this ->mysqli ->query("select * from tdb_introduce where id =$id");
        $data = $result ->fetch_all();
        if (count($data))
        {
            return new Introduce($data[0][0],$data[0][1],$data[0][2],$data[0][3],$data[0][4],$data[0][5]);
        }
        return null;
    }
    function UpdateRecord(Introduce $introduce)
    {
        $query ="Update tdb_introduce set title ='$introduce->title',summary ='$introduce->summary',content='$introduce->content',image='$introduce->image',dateup='$introduce->dateup' where id = $introduce->id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function DeleteRecord($id)
    {
        $query ="delete from tdb_introduce where id =$id";
        $result = $this->mysqli->query($query);
        return $result;
    }
}