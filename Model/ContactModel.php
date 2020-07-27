<?php
class Contact
{
    public $id;
    public $email;
    public $phone;
    public $address;
    public function __construct($id,$email,$phone,$address)
    {
        $this->id = $id;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;

    }
}
class ContactModel
{
    private $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }

    public function GetAllRecords()
    {
        $query ="select * from tdb_contact";
        $result = $this->mysqli->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value)
        {
            array_push($data, new Contact($value[0],$value[1],$value[2],$value[3]));
        }
        return $data;
    }
    function insert(Contact $contact)
    {
        $query = "Insert Into tdb_contact(id,email,phone,address) VALUE ('$contact->id', '$contact->email', '$contact->phone', '$contact->address')";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function GetByID($id)
    {
        $query = "SELECT
                        * 
                    FROM
                        tdb_contact
                    WHERE
                        Id = '$id' LIMIT 1";
        $result = $this->mysqli->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new Contact($data[0][0], $data[0][1], $data[0][2], $data[0][3]);
        }
        return null;
    }

    function Update(Contact $contact)
    {
        $query = "UPDATE tdb_contact SET Email = '$contact->email', Phone = '$contact->phone', Address = '$contact->address'
WHERE Id = $contact->id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    function delete( $id)
    {
        $query = "DELETE from tdb_contact WHERE Id = '$id'";
        $result = $this->mysqli->query($query);
        return $result;
    }
}