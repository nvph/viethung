<?php 
require_once('controllers/base_controller.php');
require_once('models/account.php');

class UserController extends BaseController
{
  function __construct()
  {
    $this->folder = 'user';
  }
  public function dsuser(){
    $posts = Account::dsuser();
    $data = array('posts' => $posts); 
    $this->render('dsuser','Danh Sách Sinh Viên',$data);
  }
  public function edituser(){
    $iduser = $_GET["iduser"];
    $posts = Account::edit_user($iduser);
    $data = array('posts' => $posts);
    $this->render('edituser','Chỉnh sửa thông tin', $data);
  }
  public function updateuser(){
    $id = isset($_POST["id"]) ? $_POST["id"] : '';
    $image = isset($_POST["image"]) ? $_POST["image"] : '';
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $sdt = isset($_POST["sdt"]) ? $_POST["sdt"] : '';
    $diachi = isset($_POST["diachi"]) ? $_POST["diachi"] : '';
    $msv = isset($_POST["msv"]) ? $_POST["msv"] : '';
    Account::updateuser($id,$image,$name,$email,$sdt,$diachi,$msv);
    header('Location: index.php?controller=user&action=dsuser');
  }
  public function deleteuser(){
    $id = $_GET["iduser"];
    Account::deleteuser($id);
    header('Location: index.php?controller=user&action=dsuser');
  }
}
?>