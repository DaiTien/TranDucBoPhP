<?php
class Slide
{
    public $id;
    public $imageSlide;
    public function __construct($id, $imageSlide)
    {
        $this->id = $id;
        $this->imageSlide = $imageSlide;
    }
}
class SlideImageModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }
    function GetAllRecords()
    {
        $result = $this->mysqli->query("select * from tdb_slide");
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Slide($value[0], $value[1]));
        }
        return $data;
    }
    function InsertRecord(Slide $image)
    {
        $result = $this->mysqli->query("insert into tdb_slide(imageSlide) value ('$image->imageSlide')");
        return $result;
    }
    function GetRecordById($id)
    {
        $result = $this->mysqli->query("select * from tdb_slide where id = $id");
        $data = $result->fetch_all();
        if (count($data)) {
            return new Slide($data[0][0], $data[0][1]);
        }
        return null;
    }
    function UpdateRecord(Slide $image)
    {
        $result = $this->mysqli->query("update tdb_slide set imageSlide ='$image->imageSlide' where id = $image->id");
        return $result;
    }
    function DeleteRecord($id)
    {
        $result = $this->mysqli->query("delete from tdb_slide where id =$id");
        return $result;
    }
}
