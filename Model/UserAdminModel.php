<?php
class UserAdmin
{
    public $id;
    public $userName;
    public $password;
    public $fullName;
    public $gender;
    public $phone;
    public $email;
    public $role;

    public function __construct($id,$userName,$password,$fullName,$gender,$phone,$email,$role)
    {
        $this->id=$id;
        $this->userName=$userName;
        $this->password=$password;
        $this->fullName=$fullName;
        $this->gender=$gender;
        $this->phone=$phone;
        $this->email=$email;
        $this->role=$role;
    }
}
class UserAdminModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }
    function GetAllRecords()
    {
        $result = $this->mysqli->query("select * from tdb_adminuser");
        $data =[];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data,new UserAdmin($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[8]));
        }
        return $data;
    }
    function GetRecordsById($id)
    {
        $result = $this ->mysqli ->query("select * from tdb_adminuser where id =$id");
        $data = $result ->fetch_all();
        if (count($data))
        {
            return new UserAdmin($data[0][0],$data[0][1],$data[0][2],$data[0][3],$data[0][4],$data[0][5],$data[0][6],$data[0][8]);
        }
        return null;
    }
    function UpdateRecord(UserAdmin $user)
    {
        $query ="Update tdb_adminuser set id=$user->id,username ='$user->userName',password ='$user->password',fullname='$user->fullName',gender='$user->gender',phone='$user->phone',email='$user->email',role='$user->role' where id =$user->id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function DeleteRecord($id)
    {
        $query ="delete from tdb_adminuser where id =$id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function InsertRecord(UserAdmin $user)
    {
        $query = "insert into tdb_adminuser(username,password,fullname,gender,phone,email,role) value ('$user->userName','$user->password','$user->fullName','$user->gender','$user->phone','$user->email','$user->role')";
        $result = $this->mysqli->query($query);
        return $result;
    }
}