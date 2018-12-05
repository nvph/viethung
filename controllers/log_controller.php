<?php 
require_once('controllers/base_controller.php');
require_once('models/checklog.php');

class LogController extends BaseController
{
  function __construct()
  {
    $this->folder = 'log';  
  }
  public function login(){
    $this->render('login', 'Login');
  }
  public function loginadmin(){
    $this->render('loginadmin','Login Admin');
  }
  public function logout(){
    $this->render('logout','Log out');
  }
}
?>
