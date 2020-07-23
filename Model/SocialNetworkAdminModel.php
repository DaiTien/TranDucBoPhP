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
    function GetByID($id)
    {
        $query = "SELECT
                        * 
                    FROM
                        tdb_socialnetwork
                    WHERE
                        Id = '$id' LIMIT 1";
        $result = $this->mysqli->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new SocialNetworkAdmin($data[0][0], $data[0][1], $data[0][2], $data[0][3],$data[0][4]);
        }
        return null;
    }

    function Update(SocialNetworkAdmin $socialNetworkAdmin)
    {
        $query = "UPDATE tdb_socialnetwork SET Facebook = '$socialNetworkAdmin->facebook', Twitter = '$socialNetworkAdmin->twitter', Instagram = '$socialNetworkAdmin->instagram',Google ='$socialNetworkAdmin->google'
WHERE Id = $socialNetworkAdmin->id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function delete( $id)
    {
        $query = "DELETE from tdb_socialnetwork WHERE Id = '$id'";
        $result = $this->mysqli->query($query);
        return $result;
    }
}