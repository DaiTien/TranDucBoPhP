<?php
class Slide
{
    public $id;
    public $imageSlide;
    public $active;
    public function __construct($id, $imageSlide,$active)
    {
        $this->id = $id;
        $this->imageSlide = $imageSlide;
        $this->active = $active;
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
            array_push($data, new Slide($value[0], $value[1],$value[2]));
        }
        return $data;
    }
    function GetRecordsActive()
    {
        $result = $this->mysqli->query("select * from tdb_slide where active = 1");
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Slide($value[0], $value[1],$value[2]));
        }
        return $data;
    }
    function InsertRecord(Slide $image)
    {
        $result = $this->mysqli->query("insert into tdb_slide(imageSlide,Active) value ('$image->imageSlide',$image->active)");
        return $result;
    }
    function GetRecordById($id)
    {
        $result = $this->mysqli->query("select * from tdb_slide where id = $id");
        $data = $result->fetch_all();
        if (count($data)) {
            return new Slide($data[0][0], $data[0][1], $data[0][2]);
        }
        return null;
    }
    //Update hình ảnh
    function UpdateRecord(Slide $image)
    {
        $result = $this->mysqli->query("update tdb_slide set imageSlide ='$image->imageSlide' where id = $image->id");
        return $result;
    }
    //Update Active
    function UpdateActive($id)
    {
        $result = $this->mysqli->query("update tdb_slide set active = 1 where id = $id");
        return $result;
    }
    function UpdateActive2($id)
    {
        $result = $this->mysqli->query("update tdb_slide set active = 0 where id = $id");
        return $result;
    }
    function DeleteRecord($id)
    {
        $result = $this->mysqli->query("delete from tdb_slide where id =$id");
        return $result;
    }
}
