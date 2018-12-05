<?php
require_once('controllers/base_controller.php');

class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages'; // Tạo biến folder global in class PagesController
  }
  public function home()
  {
    $this->render('home', 'Home');
  }
  public function error()
  {
    $this->render('error','404 Not Found');
  }
}