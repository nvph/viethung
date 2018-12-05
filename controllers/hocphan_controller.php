<?php 
require_once('controllers/base_controller.php');
require_once('models/hocphan.php');

class HocPhanController extends BaseController
{
  function __construct()
  {
    $this->folder = 'hocphan';
  }
  public function dshocphan(){
    $posts = Hocphan::dshocphan();
    $data = array('posts' => $posts); 
    $this->render('dshocphan','Danh Sách Học Phần',$data);
  }
  public function taohocphan(){
    $this->render('taohocphan','Tạo Học Phần');
  }
  public function inserthocphan(){
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    Hocphan::inserthocphan($name);
    header('Location: index.php?controller=hocphan&action=dshocphan');
  }
  public function edithocphan(){
    $id = $_GET["idhocphan"];
    $posts = Hocphan::find($id);
    $data = array('posts' => $posts); 
    $this->render('edithocphan','Chỉnh Sửa',$data);
  }
  public function updatethocphan(){
    $id = isset($_POST["id"]) ? $_POST["id"] : '';
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    Hocphan::updatehocphan($id,$name);
    header('Location: index.php?controller=hocphan&action=dshocphan');
  }
  public function deletehocphan(){
    $id = $_GET["idhocphan"];
    Hocphan::deletehocphan($id);
    header('Location: index.php?controller=hocphan&action=dshocphan');
  }
}
?>