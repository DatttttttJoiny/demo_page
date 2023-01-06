<?php 
class Post_model{
    private $dab;
    public function __construct()
    {
        $this->dab = new ConnectDB();
    }
    public function getPost()
    {
        $sql = "SELECT * FROM tbl_post";
        $res = $this->dab->select($sql);
        return $res;
    }
    public function createPost($title,$img,$description,$banner)
    {
        $sql = "INSERT INTO `tbl_post`( `title`, `img`, `description`, `banner`) VALUES ('$title','$img','$description','$banner')";
        $res = $this->dab->excute($sql);
        if($res){
            return true;
        }
        else{
            return false;
        }
    }
    public function deletePost($id){
        $sql = "DELETE FROM `tbl_post` WHERE id ='$id'";
        $res = $this->dab->excute($sql);
        if($res){
            return true;
        }
        else{
            return false;
        }
    }
    public function findbyidPost($id)
    {
        $sql = "SELECT * FROM `tbl_post` WHERE id ='$id'";
        $res = $this->dab->select($sql);
        return $res;
    }

    public function updatePost($id,$title,$img,$description,$banner){
        $sql = "UPDATE `tbl_post` SET `title`='$title',`img`='$img',`description`='$description',`banner`='$banner' WHERE id = '$id'";
        $res = $this->dab->excute($sql);
        if($res){
            return true;
        }
        else{
            return false;
        }
    }
}
?>