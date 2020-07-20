<?php
class Admin{
    public $userName;
    public $passWord;
    public $fullName;
    public $genDer;
    public $phone;
    public $email;
    public $role;
    public function __construct($userName,$passWord,$fullName,$genDer,$phone,$email,$role)
    {
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
}