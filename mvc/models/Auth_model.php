<?php 
class Auth_model{
    private $db;
    public function __construct()
    {
        $this->db = new ConnectDB();
    }

    public function getUser($name,$password)
    {
        $sql = "SELECT *FROM tbl_user WHERE name = '$name' AND password = '$password' ";
        $res = $this->db->select($sql);
        return $res;
    }
    
}
?>