<?php
class Admin{
    public $id;
    public $userName;
    public $passWord;
    public $fullName;
    public $genDer;
    public $phone;
    public $email;
    public $role;
    public function __construct($id,$userName,$passWord,$fullName,$genDer,$phone,$email,$role)
    {
        $this -> id =$id;
        $this -> userName =$userName;
        $this ->passWord =$passWord;
        $this ->fullName =$fullName;
        $this ->genDer =$genDer;
        $this ->phone =$phone;
        $this ->email =$email;
        $this ->role =$role;
    }

}
class AdminModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }
    function registerRecord(Admin $admin)
    {
        $query = "Select * from tdb_adminuser where username ='$admin->userName'";
        $check = $this->mysqli->query("$query");
        $array = $check ->fetch_all();
        if (count($array))
        {
            return false;
        }else{
            $result = $this ->mysqli->query("Insert into tdb_adminuser(UserName,Password,Role) value ('$admin->userName','$admin->passWord','$admin->role')");
            return $result;
        }
    }
    function loginRecord($user,$pass)
    {
        $query = "select * from tdb_adminuser where username ='$user' and password ='$pass'";
        $result = $this ->mysqli->query($query);
        $num_rows = mysqli_num_rows($result);
        return $num_rows;
    }
    //Dashboard
    function CountMember()
    {
        $query ="select * from tdb_adminuser";
        $result = $this ->mysqli->query($query);
        $data = [];
        foreach ( $result->fetch_all() as $value)
        {
            array_push($data , new Admin($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[8]));
        }
        $soluong = count($data);
        return $soluong;
    }
    function getPassword($user)
    {
        $query ="select * from tdb_adminuser where username = '$user'";
        $result = $this->mysqli->query($query);
        $data = $result ->fetch_all();
        if (count($data))
        {
            $password = new Admin($data[0][0],$data[0][1],$data[0][2],$data[0][3],$data[0][4],$data[0][5],$data[0][6],$data[0][8]);
            return $password;
        }
        return null;
    }

}