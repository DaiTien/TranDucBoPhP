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
    function delete( $id)
    {
        $query = "DELETE from tdb_customerfeedback WHERE Id = '$id'";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function GetByID($id)
    {
        $query = "SELECT
                        * 
                    FROM
                        tdb_customerfeedback
                    WHERE
                        Id = '$id' LIMIT 1";
        $result = $this->mysqli->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new FeedBackAdmin($data[0][0], $data[0][1], $data[0][2], $data[0][3],$data[0][4],$data[0][5]);
        }
        return null;
    }
}