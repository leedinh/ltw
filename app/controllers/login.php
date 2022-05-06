<?php
class Login extends Controller{
    public function index(){
        if (isset($_POST['signup'])){
            var_dump($_POST);
            
        }else
            if (isset($_POST['signin'])){
                header('Location:/home/index');
            }
            else
        {

            $this->view('login/index');
        }
    }

    public function register(){
        if (isset($_POST['action'])){
            $newUser = $this->model('User');
            $theUser = $newUser->findUser($_POST['username']);
            if ($theUser == null ){
            $newUser->username = $_POST['username'];
            $newUser->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $newUser->create();
            header('location:/home/index');
            }
            else
            {
                $this->view('login/register');
            }


        }else{
            $this->view('login/register');
        }
    }

    public function logout(){
        session_destroy();
        header('location:/login/index');
    }
}
?>