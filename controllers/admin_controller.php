<?php 
require_once('controllers/base_controller.php');
require_once('models/post.php');
require_once('models/checklog.php');

class AdminController extends BaseController
{
  function __construct()
  {
    $this->folder = 'admin';
  }
  public function createuser(){
    $this->render('createuser','Tạo Tài Khoản');
  }
  public function dangky(){
    $this->render('dangky','Đăng Ký');
  }
  public function dktk(){
    $hoten = isset($_POST["hoten"]) ? $_POST["hoten"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $sdt = isset($_POST["sdt"]) ? $_POST["sdt"] : '';
    $diachi = isset($_POST["diachi"]) ? $_POST["diachi"] : '';
    $mk = isset($_POST["mk"]) ? $_POST["mk"] : '';
    $password = password_hash($mk,PASSWORD_DEFAULT);
    if (empty($_FILES["image"]["name"]) || !isset($_FILES["image"]["name"])) {
      $nameImg = 'user.png';
    }else{
      $nameImg = $_FILES["image"]["name"];;
    }
    $img = $_FILES["image"]["tmp_name"];
    $path = './assets/image/'.$nameImg;
    move_uploaded_file($img, $path);
    Checklog::dktk($nameImg,$hoten,$email,$sdt,$diachi,$password);
    header('Location: index.php?controller=pages&action=home');
  }
  public function insertaccount(){
    $hoten = isset($_POST["hoten"]) ? $_POST["hoten"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $sdt = isset($_POST["sdt"]) ? $_POST["sdt"] : '';
    $diachi = isset($_POST["diachi"]) ? $_POST["diachi"] : '';
    $msv = isset($_POST["msv"]) ? $_POST["msv"] : '';
    $mk = isset($_POST["mk"]) ? $_POST["mk"] : '';
    $password = password_hash($mk,PASSWORD_DEFAULT);
    $group = isset($_POST["group"]) ? $_POST["group"] : '';
    // $nameImg = isset($_FILES["image"]["name"]) ? $_FILES["image"]["name"] : 'user.png';
    if (empty($_FILES["image"]["name"]) || !isset($_FILES["image"]["name"])) {
      $nameImg = 'user.png';
    }else{
      $nameImg = $_FILES["image"]["name"];;
    }
    $img = $_FILES["image"]["tmp_name"];
    $path = './assets/image/'.$nameImg;
    move_uploaded_file($img, $path);
    switch ($group) {
      case 'admin':
        Post::insertAdmin($nameImg,$hoten,$email,$sdt,$diachi,$msv,$password);
        header('Location: index.php?controller=pages&action=home');
        // echo "<script type='text/javascript'>alert('".$hoten . $email . $sdt . $diachi . $msv . $mk . $group . "');</script>";
      case 'user':
        Post::insertUser($nameImg,$hoten,$email,$sdt,$diachi,$msv,$password);
        header('Location: index.php?controller=pages&action=home');
        // echo "<script type='text/javascript'>alert('".$hoten . $email . $sdt . $diachi . $msv . $mk . $group . "');</script>";
    }
  }
}
?>