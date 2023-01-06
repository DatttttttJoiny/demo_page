<?php 
class Post_controller extends controller
{
    public $Postmodel;
    public function __construct()
    {
        $this->Postmodel = $this->model('Post_model');
    }
    public function index()
    {
        $post = $this->Postmodel->getPost();
        $this->view('post/index', ['post' => $post]);
    }
    public function create()
    {
        if(isset($_POST['submit'])){
            $res = $this->Postmodel->createPost($_POST['Title'],$_POST['Img'],$_POST['Description'],$_POST['Banner']);
            if($res)
            {
                header('location:' . URLROOT . '/Post_controller');
            }
        }
        $this->view('post/creatPost');    
    }
    public function delete($id)
    {
        $res = $this->Postmodel->deletePost($id);
        if($res)
        {
            header('location:' . URLROOT . '/Post_controller');
        }
    }

    public function update($id)
    {
        $find_id = $this-> Postmodel-> findbyidPost($id);
        
        if(isset($_POST['submit'])){
            $res = $this->Postmodel->updatePost($id,$_POST['Title'],$_POST['Img'],$_POST['Description'],$_POST['Banner']);
            if($res)
            {
                header('location:' . URLROOT . '/Post_controller');
            }
        }
        $this-> view('post/updatePost',['findpost'=> $find_id]);
        
    }

}
?>