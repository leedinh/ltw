<?php
class Login extends Controller{
    public function index(){
        if (isset($_POST['signup'])){
            $newUser = $this->model('User');
            $theUser = $newUser->findUser($_POST['username']);
            if ($theUser == null ){
            $newUser->username = $_POST['username'];
            $newUser->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $newUser->create();
            $_SESSION['username'] = $theUser->username;
            $_SESSION['user_id'] = $theUser->user_id;
            $_SESSION['role'] = $theUser->role;
            header('location:/home/index');
            }
            else
            {
                $this->view('login/index', ['error' => 'Username already exists']);
            }
            
        }else
            if (isset($_POST['signin'])){
                
                    $newUser = $this->model('User');
                    $theUser = $newUser->findUser($_POST['username']);
                    if ($theUser and password_verify($_POST['password'], $theUser->password_hash)){
                        $_SESSION['username'] = $theUser->username;
                        $_SESSION['user_id'] = $theUser->user_id;
                        $_SESSION['role'] = $theUser->role;
                        header('Location:/home/index');
                    }
                    else{
                        $this->view('login/index',['error'=>'Login Failed']);
                    }
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