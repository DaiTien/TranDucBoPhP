<?php
class Customer{
    public $id;
    public $userName;
    public $password;
    public $phone;
    public $email;
    public function __construct($id,$userName,$password,$phone,$email)
    {
        $this->id=$id;
        $this->userName=$userName;
        $this->password=$password;
        $this->phone=$phone;
        $this->email=$email;
    }

}
class CustomerModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }

    function GetAllRecords()
    {
        $result = $this->mysqli->query("select * from tdb_customer");
        $data = [];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data, new Customer($value[0],$value[1],$value[2],$value[3],$value[4]));
        }
        return $data;
    }
    function GetRecordById($id)
    {
        $result = $this->mysqli->query("select * from tdb_customer where id =$id");
        $data = $result->fetch_all();
        if (count($data))
        {
            return new Customer($data[0][0],$data[0][1],$data[0][2],$data[0][3],$data[0][4]);
        }
        return null;
    }
    function GetProfileByUser($user)
    {
        $query = "select * from tdb_customer where username = '$user'";
        $result = $this->mysqli->query($query);
        $array = $result->fetch_all();
        if (count($array))
        {
            return new Customer($array[0][0],$array[0][1],$array[0][2],$array[0][3],$array[0][4]);
        }
        return null;
    }

    function Update(Customer $cus)
    {
        $result = $this->mysqli->query("update tdb_customer set username='$cus->userName',password='$cus->password',phone ='$cus->phone',email='$cus->email' where id = $cus->id");
        return $result;
    }
    function insert(Customer $cus)
    {
        $check = $this->mysqli->query("select * from tdb_customer where username = '$cus->userName' or email='$cus->email'");
        $checkCount = mysqli_num_rows($check);
        if ($checkCount == 0)
        {
            $query = "Insert into tdb_customer(username,password,phone,email) value ('$cus->userName','$cus->password','$cus->phone','$cus->email')";
            $result = $this->mysqli->query($query);
            return $result;
        }else{
            return false;
        }
    }
    function LoginRecord($user,$pass)
    {
        $query ="select * from tdb_customer where username = '$user' and password ='$pass'";
        $login = $this->mysqli->query($query);
        return mysqli_num_rows($login);
    }
    function delete( $id)
    {
        $query = "DELETE from tdb_customer WHERE Id = '$id'";
        $result = $this->mysqli->query($query);
        return $result;
    }

}
