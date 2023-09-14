<?php
require_once ROOT_PATH.'Controllers/Controller.php';
				// この部分を追加
require_once ROOT_PATH.'Controllers/UserController.php';
				// この部分を追加

class HomeController extends Controller
{
    public function index(){
				// この部分を追加
        session_start();
        session_destroy();
        $user = new UserController();
        $auth = $user->getAuth();
        $this->view('home/index', ['auth' => $auth]);
				// この部分を追加
    }
}