<?php
class User_model{
    private $db;
    public function __construct()
    {
        $this->db = new ConnectDB();
    }

    public function getUser()
    {
        $sql = "SELECT *FROM tbl_user";
        $res = $this->db->select($sql);
        return $res;
    }
    public function creatUser($name,$email,$add)
    {
        $sql ="INSERT INTO `tbl_user`( `name`, `email`, `address`) VALUES ('$name','$email','$add') ";
        $res = $this->db->excute($sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteUser($id)
    {
        $sql ="DELETE FROM `tbl_user` WHERE id = '$id'";
        $res = $this->db->excute($sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
    public function findbyidUser($id){
        $sql = "SELECT *FROM tbl_user WHERE id ='$id' ";
        $res = $this->db->select($sql);
        return $res;
    }
    public function updateUser($id,$name,$email,$add)
    {
        $sql = "UPDATE `tbl_user` SET `name`='$name',`email`='$email',`address`='$add' WHERE id ='$id'";
        $res = $this->db->excute($sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
    public function searchUser($information)
    {
        
        $sql = "SELECT * FROM `tbl_user` WHERE `name` LIKE N'%$information%' OR `email` LIKE N'%$information%'";
        echo($sql);
        $res = $this->db->select($sql);
        return $res;
    }
    public function CountUser()
    {
        $sql = "SELECT count(id) from tbl_user";
        // $result = mysqli_query($conn, 'select count(id) as total from news');
        $row = $this->db->select($sql);
        $total_records = $row['total'];
        return $total_records;
    }
}
?>