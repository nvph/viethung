<?php 
require_once('controllers/base_controller.php');
require_once('models/post.php');

class BaigiangController extends BaseController
{
  function __construct()
  {
    $this->folder = 'baigiang'; // Tạo biến folder global in class PagesController
  }
  public function show(){
    $posts = Post::mon($_GET["mon"]);
    $data = array('posts' => $posts);
    $this->render('baigiang','Bài Giảng',$data);
  }
  public function xemchitiet()
  {
    $post = Post::find($_GET['id']);
    $data = array('post' => $post);
    $this->render('xemchitiet', 'Xem Chi Tiết',$data);
  }
  public function taobaigiang(){
    $post = Post::find($_GET['getmon']);
    $dsmon = Post::dbmonhoc();
    $data = array('post' => $post, 'dsmon' => $dsmon);
    $this->render('taobaigiang','Tạo Bài Giảng',$data);
  }
  public function delete(){
    $mon = Post::delete($_GET["getid"]);
    if (isset($mon)){
      header("Location: index.php?controller=baigiang&action=show&mon=" . $mon);
    } else {
      header('Location: index.php?controller=pages&action=error');
    }
  }
  public function edit(){
    $post = Post::find($_GET['id']);
    $data = array('post' => $post);
    $this->render('edit','Chỉnh sửa',$data);
  }
  public function update(){
    $id = $_GET["id"];
    if (empty($_FILES["image"]["name"])) {
      $nameImg = $_POST["image1"];
    }else{
      $nameImg = $_FILES["image"]["name"];
    }
    // $nameImg = isset($_FILES["image"]["name"]) ? $_FILES["image"]["name"] : 'default.png';
    $image = $_FILES["image"]["tmp_name"];
    //
    // $nameFile = isset($_FILES["file"]["name"]) ? $_FILES["file"]["name"] : '';
    if (empty($_FILES["file"]["name"])) {
      $nameFile = $_POST["file1"];
    }else{
      $nameFile = $_FILES["file"]["name"];
    }
    $file = $_FILES["file"]["tmp_name"];
    //
    // $namePDF = isset($_FILES["pdf"]["name"]) ? $_FILES["pdf"]["name"] : '';
    if (empty($_FILES["pdf"]["name"])) {
      $namePDF = $_POST["pdf1"];
    }else{
      $namePDF = $_FILES["pdf"]["name"];
    }
    $pdf = $_FILES["pdf"]["tmp_name"];
    //
    $code = isset($_POST["code"]) ? $_POST["code"] : '';
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $mota = isset($_POST["mota"]) ? $_POST["mota"] : '';
    //
    $pathImg = './assets/image/'.$nameImg;
    $pathFile = './assets/image/'.$nameFile;
    $pathPdf = './assets/image/'.$namePDF;
    move_uploaded_file($image, $pathImg);
    move_uploaded_file($file, $pathFile);
    move_uploaded_file($pdf, $pathPdf);
    Post::update($id,$nameImg,$name,$mota,$nameFile,$namePDF);
    header('Location: index.php?controller=baigiang&action=show&mon='. $code);
  }
  public function insert(){
    if (empty($_FILES["image"]["name"]) || !isset($_FILES["image"]["name"])) {
      $nameImg = 'default.png';
    }else{
      $nameImg = isset($_FILES["image"]["name"]);
    }
     // ? $_FILES["image"]["name"] : 'default.png';
    $image = $_FILES["image"]["tmp_name"];
    //
    $nameFile = isset($_FILES["file"]["name"]) ? $_FILES["file"]["name"] : 'không có tài liệu';
    $file = $_FILES["file"]["tmp_name"];
    //
    $namePDF = isset($_FILES["pdf"]["name"]) ? $_FILES["pdf"]["name"] : '';
    $pdf = $_FILES["pdf"]["tmp_name"];
    //
    $code = isset($_POST["code"]) ? $_POST["code"] : '';
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $mota = isset($_POST["mota"]) ? $_POST["mota"] : '';
    //
    $pathImg = './assets/image/'.$nameImg;
    $pathFile = './assets/image/'.$nameFile;
    $pathPdf = './assets/image/'.$namePDF;
    move_uploaded_file($image, $pathImg);
    move_uploaded_file($file, $pathFile);
    move_uploaded_file($pdf, $pathPdf);
    Post::insert($nameImg,$code,$name,$mota,$nameFile,$namePDF);
    header('Location: index.php?controller=baigiang&action=show&mon='. $code);
  }
  public function timkiem(){
    $search = isset($_POST["timkiem"]) ? $_POST["timkiem"] : '';
    $rs_search = Post::search($search);
    $data = array('search' => $rs_search);
    $this->render('search','Tìm kiếm',$data);
  }
}
?>