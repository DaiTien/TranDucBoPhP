<?php
class SocialNetworkAdmin
{
    public $id;
    public $facebook;
    public $twitter;
    public $instagram;
    public $google;
    public function __construct($id,$facebook,$twitter,$instagram,$google)
    {
        $this->id = $id;
        $this->facebook = $facebook;
        $this->twitter = $twitter;
        $this->instagram = $instagram;
        $this->google = $google;
    }

}
class SocialNetworkAdminModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }

    public function GetAllRecords()
    {
        $query ="select * from tdb_socialnetwork";
        $result = $this->mysqli->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data, new SocialNetworkAdmin($value[0],$value[1],$value[2],$value[3],$value[4]));
        }
        return $data;
    }

}