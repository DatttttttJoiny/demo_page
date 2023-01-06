<?php
class Home_controller extends controller
{
    public $Usermodel;
    public function __construct()
    {
        $this->Usermodel = $this->model('User_model');
    }
    public function index()
    {
        $user = $this->Usermodel->getUser();
        $resCountRecords = $this->Usermodel->CountUser();
        $this->view('user/index', ['user' => $user,'user'=> $resCountRecords]);
        $limit = 3;
        $total_page = ceil($limit);
        // session_start();
        // print_r($_SESSION['currentuser']);
    }
    public function create()
    {
        if (isset($_POST['submit'])) {
            $res = $this->Usermodel->creatUser($_POST['Name'], $_POST['Email'], $_POST['Address']);
            if ($res) {
                header('location:' . URLROOT . '/Home_controller');
            }
        }
        $this->view('user/createUser');
    }
    public function delete($id)
    {
        $res = $this->Usermodel->deleteUser($id);
        if ($res) {
            header('location:' . URLROOT . '/Home_controller');
        }
    }
    public function update($id)
    {

        $find_id = $this->Usermodel->findbyidUser($id);

        if (isset($_POST['submit'])) {
            $res = $this->Usermodel->updateUser($id, $_POST['Name'], $_POST['Email'], $_POST['Address']);
            if ($res) {
                header('location:' . URLROOT . '/Home_controller');
            }
        }
        $this->view('user/updateUser', ['findUser' => $find_id]);
    }
    public function search()
    {
       
        if (isset($_POST['search'])) {
            $information = $_POST['information'];
            $res = $this->Usermodel->searchUser($information);
                $this->view('user/index', ['user' => $res]);
                // header('location:' . URLROOT . '/Home_controller');
        }
    }
    public function ok(){

    }
}
