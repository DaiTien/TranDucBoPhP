<?php
class NewsAdmin
{
    public $id;
    public $title;
    public $summary;
    public $image;
    public $content;
    public $active;

    public function __construct($id,$title,$summary,$image,$content,$active)
    {
        $this->id= $id;
        $this->title=$title;
        $this->summary=$summary;
        $this->image=$image;
        $this->content=$content;
        $this->active=$active;
    }
}
class NewsAdminModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }
    function GetAlldata()
    {
        $result = $this->mysqli->query("select * from tdb_news order by id DESC");
        $data=[];
        foreach($result->fetch_all() as $value)
        {
            array_push($data,new NewsAdmin($value[0],$value[1],$value[2],$value[3],$value[4],$value[5]));
        }
        return $data;
    }
    function GetRecordsByActive()
    {
        $result = $this->mysqli->query("select * from tdb_news where active = 1");
        $data=[];
        foreach($result->fetch_all() as $value)
        {
            array_push($data,new NewsAdmin($value[0],$value[1],$value[2],$value[3],$value[4],$value[5]));
        }
        return $data;
    }
    
    function InsertRecord(NewsAdmin $newsAdmin)
    {
        $query = "insert into tdb_news(title,summary,image,content,active) VALUE ('$newsAdmin->title','$newsAdmin->summary','$newsAdmin->image','$newsAdmin->content',$newsAdmin->active)";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function GetRecordsById($id)
    {
        $result = $this ->mysqli ->query("select * from tdb_news where id =$id");
        $data = $result ->fetch_all();
        if (count($data))
        {
            return new NewsAdmin($data[0][0],$data[0][1],$data[0][2],$data[0][3],$data[0][4],$data[0][5]);
        }
        return null;
    }
    function UpdateRecord(NewsAdmin $newsAdmin)
    {
        $query ="Update tdb_news set title ='$newsAdmin->title',summary ='$newsAdmin->summary',image='$newsAdmin->image',content='$newsAdmin->content' where  id = $newsAdmin->id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    //Update Active
    function UpdateActive($id)
    {
        $result = $this->mysqli->query("update tdb_news set active = 1 where id = $id");
        return $result;
    }
    function UpdateActive2($id)
    {
        $result = $this->mysqli->query("update tdb_news set active = 0 where id = $id");
        return $result;
    }
    function DeleteRecord($id)
    {
        $query ="delete from tdb_news where id =$id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    
}