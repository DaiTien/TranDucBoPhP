<?php
class FeedBackAdmin
{
    public $id;
    public $name;
    public $title;
    public $content;
    public $date;
    public $active;
    public function __construct($id,$name,$title,$content,$date,$active)
    {
        $this ->id= $id;
        $this ->name= $name;
        $this ->title= $title;
        $this ->content= $content;
        $this ->date= $date;
        $this ->active= $active;

    }

}
class FeedBackAdminModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }
    //Dashboard
    function CountFeedBack()
    {
        $query ="select * from tdb_customerfeedback";
        $result = $this ->mysqli->query($query);
        $data = [];
        foreach ( $result->fetch_all() as $value)
        {
            array_push($data , new FeedBackAdmin($value[0],$value[1],$value[2],$value[3],$value[4],$value[5]));
        }
        $soluong = count($data);
        return $soluong;
    }
    //Lấy toàn bộ records
    function GetAllRecords()
    {
        $query ="select * from tdb_customerfeedback";
        $result = $this ->mysqli->query($query);
        $data = [];
        foreach ( $result->fetch_all() as $value)
        {
            array_push($data , new FeedBackAdmin($value[0],$value[1],$value[2],$value[3],$value[4],$value[5]));
        }
        return $data;
    }

}