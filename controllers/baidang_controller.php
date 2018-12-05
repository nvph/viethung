<?php 
require_once('controllers/base_controller.php');
require_once('models/baidang.php');

class BaidangController extends BaseController
{
  function __construct()
  {
    $this->folder = 'baidang';
  }
  public function dsbaidang(){
    $posts = Baidang::dsbaidang();
    $data = array('posts' => $posts);
    $this->render('dsbaidang','Danh Sách Bài Viết', $data);
  }
  public function taobaidang(){
    $this->render('taobaidang','Tạo Bài Viết');
  }
  public function editbaidang(){
    $id = $_GET["id"];
    $posts = Baidang::editbaidang($id);
    $data = array('posts'=> $posts);
    $this->render('editbaidang','Chỉnh sửa',$data);
  }
  public function insertbaidang(){
    $title = isset($_POST["title"]) ? $_POST["title"] : '';
    $date = isset($_POST["date"]) ? $_POST["date"] : '';
    $content = isset($_POST["content"]) ? $_POST["content"] : '';
    Baidang::insertbaidang($title,$date,$content);
    header('Location: index.php?controller=baidang&action=dsbaidang');
  }
  public function updatebaidang(){
    $id = isset($_POST["id"]) ? $_POST["id"] : '';
    $title = isset($_POST["title"]) ? $_POST["title"] : '';
    $date = isset($_POST["date"]) ? $_POST["date"] : '';
    $content = isset($_POST["content"]) ? $_POST["content"] : '';
    Baidang::updatebaidang($id,$title,$date,$content);
    header('Location: index.php?controller=baidang&action=dsbaidang');
  }
  public function deletebaidang(){
    $id = $_GET["id"];
    Baidang::deletebaidang($id);
    header('Location: index.php?controller=baidang&action=dsbaidang');
  }
}
?>