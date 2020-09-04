<?php
class LibraryImage
{
    public $id;
    public $image;
    public $name;
    public $active;

    public function __construct($id,$image,$name,$active)
    {
        $this->id=$id;
        $this->image=$image;
        $this->name=$name;
        $this->active=$active;
    }

}
class LibraryImageModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }

    function GetAllRecords()
    {
        $result = $this ->mysqli->query("select * from tdb_image order by id DESC");
        $data =[];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data,new LibraryImage($value[0],$value[1],$value[2],$value[3]));
        }
        return $data;
    }
    function GetRecordsByActive()
    {
        $result = $this ->mysqli->query("select * from tdb_image where active = 1");
        $data =[];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data,new LibraryImage($value[0],$value[1],$value[2],$value[3]));
        }
        return $data;
    }
    function InsertRecord(LibraryImage $image)
    {
        $result = $this->mysqli->query("insert into tdb_image(image,name,active) value ('$image->image','$image->name',$image->active)");
        return $result;
    }
    function GetRecordById($id)
    {
        $result = $this->mysqli->query("select * from tdb_image where id =$id");
        $data = $result->fetch_all();
        if (count($data))
        {
            return new LibraryImage($data[0][0],$data[0][1],$data[0][2],$data[0][3]);
        }
        return null;
    }
    function UpdateRecord(LibraryImage $image)
    {
        $result = $this->mysqli->query("update tdb_image set image ='$image->image',name ='$image->name' where id = $image->id");
        return $result;
    }
    //Update Active
    function UpdateActive($id)
    {
        $result = $this->mysqli->query("update tdb_image set active = 1 where id = $id");
        return $result;
    }
    function UpdateActive2($id)
    {
        $result = $this->mysqli->query("update tdb_image set active = 0 where id = $id");
        return $result;
    }
    function DeleteRecord($id)
    {
        $result = $this->mysqli->query("delete from tdb_image where id = $id");
        return $result;
    }

}