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
        $this->mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }
    function GetAllRecords($user,$role)
    {
        $result = $this->mysqli->query("select * from tdb_adminuser where username != '$user' and roleuser = '$role' order by id DESC");
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
            $query ="Update tdb_adminuser set id=$user->id,fullname='$user->fullName',gender='$user->gender',phone='$user->phone' where id =$user->id";
            $result = $this->mysqli->query($query);
            return $result;
    }
    function DeleteRecord($id)
    {
        $query ="delete from tdb_adminuser where id =$id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function InsertRecordAdmin(UserAdmin $user)
    {
        $checkUser = $this->mysqli->query("select * from tdb_adminuser where username = '$user->userName' and roleuser = '$user->role'");
        $check1 = mysqli_num_rows($checkUser);
        if ($check1 > 0)
        {
            return "user";
        }else{
            $checkEmail = $this ->mysqli->query("select * from tdb_adminuser where email = '$user->email' and roleuser = '$user->role'");
            $check2 = mysqli_num_rows($checkEmail);
            if ($check2 == 0)
            {
                $query = "insert into tdb_adminuser(username,password,fullname,gender,phone,email,roleuser) value ('$user->userName','$user->password','$user->fullName','$user->gender','$user->phone','$user->email','$user->role')";
                $result = $this->mysqli->query($query);
                return $result;
            }else{
                //$result = $this->mysqli->query("insert into tdb_adminuser(username,password,fullname,gender,phone,email,roleuser) value ('$user->userName','$user->password','$user->fullName','$user->gender','$user->phone','$user->email','$user->role')");
                //return $result;
                return false;
            }
        }
    }
    //Đăng nhập và đăng ký tài khoản trên website
    function InsertRecordWeb(UserAdmin $user)
    {
        $checkMember = $this->mysqli->query("SELECT * FROM tdb_adminuser WHERE UserName = '$user->userName' and RoleUser = '$user->role'");
        $resultCheck = mysqli_num_rows($checkMember);
        if ($resultCheck > 0)
        {
            return false;
        }else{
            $checkEmail = $this ->mysqli->query("SELECT * FROM tdb_adminuser WHERE Email = '$user->email' and RoleUser = '$user->role'");
            $resultCheckEmail = mysqli_num_rows($checkEmail);
            if ($resultCheckEmail == 0)
            {
                $query = "insert into tdb_adminuser(username,password,fullname,gender,phone,email,roleuser) value ('$user->userName','$user->password','$user->fullName','$user->gender','$user->phone','$user->email','$user->role')";
                $result = $this->mysqli->query($query);
                return $result;
            }else
            {
                return false;
            }

        }
    }
    function LoginRecordWeb($user,$pass,$role)
    {
        $query ="select * from tdb_adminuser where username = '$user' and roleuser ='$role' and password = '$pass'";
        $login = $this->mysqli->query($query);
        return mysqli_num_rows($login);
    }
    //Reset Password
    function checkMember($user,$email,$role)
    {
        $check = $this->mysqli->query("select * from tdb_adminuser where username ='$user' and email = '$email' and roleuser ='$role'");
        $result = mysqli_num_rows($check);
        return $result;
    }
    //Cập nhật lại mật khẩu
    function resetPassword($pass,$email,$role)
    {
        $result = $this->mysqli->query("update tdb_adminuser set password = '$pass' where email = '$email' and roleuser ='$role'");
    }
}