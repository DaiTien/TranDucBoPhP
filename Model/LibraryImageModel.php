<?php
class LibraryImage
{
    public $id;
    public $image;
    public $name;

    public function __construct($id,$image,$name)
    {
        $this->id=$id;
        $this->image=$image;
        $this->name=$name;
    }

}
class LibraryImageModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }

    function GetAllRecords()
    {
        $result = $this ->mysqli->query("select * from tdb_image");
        $data =[];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data,new LibraryImage($value[0],$value[1],$value[2]));
        }
        return $data;
    }
    function InsertRecord(LibraryImage $image)
    {
        $result = $this->mysqli->query("insert into tdb_image(image,name) value ('$image->image','$image->name')");
        return $result;
    }
    function GetRecordById($id)
    {
        $result = $this->mysqli->query("select * from tdb_image where id =$id");
        $data = $result->fetch_all();
        if (count($data))
        {
            return new LibraryImage($data[0][0],$data[0][1],$data[0][2]);
        }
        return null;
    }
    function UpdateRecord(LibraryImage $image)
    {
        $result = $this->mysqli->query("update tdb_image set image ='$image->image',name ='$image->name' where id = $image->id");
        return $result;
    }
    function DeleteRecord($id)
    {
        $result = $this->mysqli->query("delete from tdb_image where id = $id");
        return $result;
    }

}