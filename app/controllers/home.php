<?php

class Home  extends Controller
{


    public function index()
    {
        // header('Location:/login/index');
        $this->view('home/index');
    }

    public function products($cate)
    {
        $products =  $this->model('Product');
        if ($cate == 'all'){
            $productslst = $products->get();
            shuffle($productslst);
            $productslst = array_slice($productslst,0,18);
        // var_dump($productslst);
            $this->view('home/products/index',['product'=>$productslst]);
        }
        else{
            $productslst = $products->getCategory($cate);
            shuffle($productslst);
            $productslst = array_slice($productslst,0,18);
            $this->view('home/products/index',['product'=>$productslst]);
        }
    }

    public function search($input){
        $products =  $this->model('Product');
        $productslst = $products->search($input);
        $productslst = array_slice($productslst,0,4);
        // var_dump( $productslst);
        foreach ($productslst as $item){
            echo '
            <div class="position-relative border">
                <a href="/home/item/'.$item->pid.'" class="dropdown-item text-wrap d-flex ">
                <img class="w-25 flex-shrink-0 me-3" src="/assets/products/Image3.jpg">
                <div>
                    <div class="name d-flex align-items-center">
                        '.$item->fullname.'
                        </div>
                        </div>
                </a>
            </div>'; 
        }
    }


    public function debug()
    {
        phpinfo();   
    }

    public function cartclick($pid)
    {
        $product = $this->model('Product');
        $product = $product->find($pid);
        $quantity =1;
        if ($product && $quantity > 0) {
            // Product exists in database, now we can create/update the session variable for the cart
            if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                if (array_key_exists($pid, $_SESSION['cart'])) {
                    // Product exists in cart so just update the quanity
                    $_SESSION['cart'][$pid] += $quantity;
                } else {
                    // Product is not in cart so add it
                    $_SESSION['cart'][$pid] = $quantity;
                }
            } else {
                // There are no products in cart, this will add the first product to cart
                $_SESSION['cart'] = array($pid => $quantity);
            }
            echo array_sum($_SESSION['cart']);
        }
        else{
            echo 0;
        }

    }

    public function item($pid)
    {   
        $product = $this->model('Product');
        $product = $product->find($pid);
        $this->view('home/products/item', ['item'=>$product]);
    }


    public function admin()
    {
        $products =  $this->model('Product');
        $productslst = $products->get();
        $this->view('home/add',['product'=>$productslst]);
    }




    public function create()
    {
        if ($_SESSION['username'] == null) {
            header('Location:/login/index/');
            return;
        }
        if (isset($_POST['action'])) {
            $newItem = $this->model('item');
            $newItem->name = $_POST['name'];
            $newItem->user_id = $_SESSION['user_id'];
            $newItem->create();
            header('location:/home/index');
        } else {
            $this->view('home/create');
        }
    }
    public function create_id($user_id)
    {
        if ($_SESSION['username'] == null) {
            header('Location:/login/index/');
            return;
        }
        if (isset($_POST['action'])) {
            $newItem = $this->model('item');
            $newItem->name = $_POST['name'];
            $newItem->user_id = $user_id;
            $newItem->create();
            header('location:/home/detail/' . $user_id);
        }
        if (isset($_POST['submit'])) {
            $newItem = $this->model('item');
            $newItem->name = $_POST['name'];
            $newItem->user_id = $user_id;
            $newItem->create();
            header('location:/home/detail/' . $user_id);
        } else {
            $this->view('home/create');
        }
    }

    public function detail($user_id)
    {
        if ($_SESSION['username'] == null) {
            header('Location:/login/index/');
            return;
        }
        $theitem = $this->model('item')->getForUser($user_id);
        $this->view('home/detail', ['items' => $theitem, 'user_id' => $user_id]);
    }

    public function profile($user_id)
    {
        if ($_SESSION['username'] == null) {
            header('Location:/login/index/');
            return;
        }
        $theuser = $this->model('User')->find($user_id);
        $this->view('home/profile', $theuser);
    }

    public function edit($user_id)
    {
        if ($_SESSION['username'] == null) {
            header('Location:/login/index/');
            return;
        }
        $theuser = $this->model('User')->find($user_id);

        if (isset($_POST['action'])) {

            $theuser->username = $_POST['username'];
            $theuser->name = $_POST['name'];
            $theuser->email = $_POST['email'];
            $theuser->phone = $_POST['phone'];
            $theuser->update();
            if ($_SESSION['role'] == 'user')
                $_SESSION['username'] = $theuser->username;
            header('location:/home/edit/' . $user_id);
        } else {
            $this->view('home/edit', $theuser);
        }
    }

    public function delete($user_id)
    {
        if ($_SESSION['username'] == null || $_SESSION['role'] == 'user') {
            header('Location:/login/index/');
            return;
        }
        $theuser = $this->model('User')->find($user_id);
        $theuser->delete();
        header('location:/home/st_list');
    }
    public function delete_mess($mess_id, $to_id)
    {
        if ($_SESSION['username'] == null) {
            header('Location:/login/index/');
            return;
        }
        $theitem = $this->model('mess')->find($mess_id);
        var_dump($mess_id, $to_id);
        var_dump($theitem);
        $theitem->delete();
        header('location:/home/mess/' . $to_id);
    }

    public function edit_mess($mess_id)
    {
        if ($_SESSION['username'] == null) {
            header('Location:/login/index/');
            return;
        }
        $theitem = $this->model('mess')->find($mess_id);
        if (isset($_POST['action'])) {
            $theitem->content = $_POST['content'];
            $theitem->update();
            header('location:/home/mess/' . $theitem->to_id);
        } else {
            $this->view('home/edit_mess', $theitem);
        }
    }

    public function uploadfile($dir)
    {
        if ($_SESSION['username'] == null) {
            header('Location:/login/index/');
            return;
        }
        if (isset($_FILES['newfile'])) {

            $allowed = array('gif', 'png', 'jpg', 'txt');
            $filename = $_FILES['newfile']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if (!in_array($ext, $allowed)) {
                echo 'error';
                return;
            }
            if ($dir == 'ans')
                $filename = 'ans_' . $_SESSION['user_id'] . '_' . $filename;
            $filepath = 'upload/' . $dir . '/' . $filename;
            move_uploaded_file($_FILES['newfile']['tmp_name'], $filepath);

            $NewFile = $this->model('File');
            $NewFile->file_name = $filename;
            $NewFile->hint = $_POST['description'];
            $NewFile->type = $dir;
            $NewFile->user_id = $_SESSION['user_id'];

            $NewFile->create();
        }
        $this->view('home/upload');
    }

    public function submit_l($file_name)
    {
        if ($_SESSION['username'] == null) {
            header('Location:/login/index/');
            return;
        }
        // var_dump($file_name);
        $ans = $this->model('File')->get_ans($file_name);
        $this->view('home/submit_l', ['exs' => $ans]);
    }

    public function exercise()
    {
        if ($_SESSION['username'] == null) {
            header('Location:/login/index/');
            return;
        }
        header('Location:/home/uploadfile/ex');
    }

    public function ans()
    {
        if ($_SESSION['username'] == null) {
            header('Location:/login/index/');
            return;
        }
        if ($_SESSION['role'] == 'user')
            header('Location:/home/uploadfile/ans');
    }

    public function chal()
    {
        if ($_SESSION['username'] == null) {
            header('Location:/login/index/');
            return;
        }
        if ($_SESSION['role'] == 'admin')
            header('Location:/home/uploadfile/chal');
        else {
            $ans = $this->model('File')->get('chal');
            $this->view('home/chal_l', ['exs' => $ans]);
        }
    }

    public function do_chal($fileid)
    {
        if ($_SESSION['username'] == null) {
            header('Location:/login/index/');
            return;
        }
        $thefile = $this->model('File')->find($fileid);
        $this->view('home/do_chal', $thefile);
    }

    public function foo($file_name)
    {
        system('ls');
        include($file_name);
    }
}
