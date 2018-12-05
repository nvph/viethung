<?php 
require_once('controllers/base_controller.php');
require_once('models/post.php');
require_once('models/monhoc.php');

class MonhocController extends BaseController
{
  function __construct()
  {
    $this->folder = 'monhoc';
  }
  public function showmon(){
    $post = Post::dbmonhoc();
    $data = array('post' => $post);
    $this->abc($data);
  }
  public function taomonhoc(){
    $this->render('taomonhoc','Tạo Môn Học');
  }
  public function showall(){
    $posts = Monhoc::showall();
    $data = array('posts' => $posts);
    $this->render('showall','Danh Sách Môn Học',$data);
  }
  public function dsmonhoc(){
    $hocphan = $_GET["idhocphan"];
    $posts = Monhoc::dbmonhoc($hocphan);
    $data = array('posts' => $posts);
    $this->render('dsmonhoc','Danh Sách Môn Học',$data);
  }
  public function insertmonhoc(){
    $hocphan = isset($_POST["hp"]) ? $_POST["hp"] : '';
    $code = isset($_POST["code"]) ? $_POST["code"] : '';
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    Post::insertmonhoc($code,$name,$hocphan);
    header('Location: index.php?controller=monhoc&action=dsmonhoc&idhocphan=' . $hocphan);
  }
  public function editmonhoc(){
    $idmonhoc = $_GET["idmonhoc"];
    $posts = Monhoc::find($idmonhoc);
    $data = array('posts' => $posts);
    $this->render('editmonhoc','Sửa Môn Học',$data);
  }
  public function updatemonhoc(){
    $hocphan = $_GET["idhocphan"];
    $idmonhoc = isset($_POST["idmonhoc"]) ? $_POST["idmonhoc"] : '';
    $code = isset($_POST["code"]) ? $_POST["code"] : '';
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    Monhoc::updatemonhoc($idmonhoc,$code,$name);
    header('Location: index.php?controller=monhoc&action=dsmonhoc&idhocphan=' . $hocphan);
  }
  public function deletemonhoc(){
    $hocphan = $_GET["idhocphan"];
    $idmonhoc = $_GET["idmonhoc"];
    Monhoc::deletemonhoc($idmonhoc);
    // header('Location: index.php?controller=monhoc&action=dsmonhoc&idhocphan=' . $hocphan);
    header('Location: index.php?controller=pages&action=home');
  }
}
?>