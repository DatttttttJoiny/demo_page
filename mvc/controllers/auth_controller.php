<?php
class auth_controller extends controller
{
    private $_user;
    public function __construct()
    {
        $this->_user = $this->model('Auth_model');
    }
    public function index()
    {
        // session_start();
        if (empty($_SESSION['currentuser'])) {

            $this->view('Auth/login');
        } else {
            header('location:' . URLROOT .'/Home_controller' );
        }
    }
    public function login()
    {
     
        if (isset($_POST['login'])) {
            $user = $this->_user->getUser($_POST['userName'], $_POST['password']);
            if (!empty($user)) {
                $_SESSION['currentuser'] = $user;
                header('location:' . URLROOT);
                if (!empty($_SESSION['currentuser'])) {
                    header('location:' . URLROOT);
                }
            } else {
                echo ('Incorrect userName or Password');
            }
        }
    }
    public function logout()
    {
      
        print_r($_SESSION['currentuser']);
        if (!empty($_SESSION['currentuser'])) {

            unset($_SESSION['currentuser']);
            header('location:' . URLROOT . '/auth_controller');
        }
    }
}
