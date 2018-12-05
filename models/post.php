<?php
class Post
{
  public $id;
  public $image;
  public $code;
  public $name;
  public $mota;
  public $file;
  public $pdf;
  function __construct($id = null, $image = null, $code = null,$name = null,$mota = null,$file = null,$pdf = null)
  {
    $this->id = $id;
    $this->image = $image;
    $this->code = $code;
    $this->name = $name;
    $this->mota = $mota;
    $this->file = $file;
    $this->pdf = $pdf;
  }
  function dbmonhoc(){
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM monhoc');
    $req->execute();
    foreach ($req->fetchAll() as $item) {
      $list[] = new Post($item['ID'], $item['code'], $item['name']);
    }
    return $list;
  }
  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM baigiang');
    $req->execute();
    foreach ($req->fetchAll() as $item) {
      $list[] = new Post($item['ID'], $item['image'], $item['code'], $item['name'], $item['mota'], $item['file'], $item['pdf']);
    }

    return $list;
  }
  static function find($ID)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM baigiang WHERE ID = :ID');
    $req->execute(array('ID' => $ID));

    $item = $req->fetch();
    if (isset($item['ID'])) {
      return new Post($item['ID'], $item['image'], $item['code'], $item['name'], $item['mota'], $item['file'], $item['pdf']);
    }
    return null;
  }
  static function mon($code)
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->prepare("SELECT * FROM baigiang WHERE code = '" . $code . "'");
    $req->execute(array('code' => $code));
    foreach ($req->fetchAll() as $item) {
      $list[] = new Post($item['ID'], $item['image'], $item['code'], $item['name'], $item['mota'], $item['file'], $item['pdf']);
    }
    return $list;
  } 
  static function insert($image,$code,$name,$mota,$file,$pdf){
    $db = DB::getInstance();
    $insert = $db->prepare("INSERT INTO baigiang (image,code,name,mota,file,pdf) VALUES ('$image','$code','$name','$mota','$file','$pdf')");
    $insert->execute();
  }
  static function delete($id){
    $db = DB::getInstance();
    $mon = '';
    $sl = $db->prepare("SELECT * FROM baigiang WHERE id = " . $id);
    $sl->execute();
    foreach ($sl->fetchAll() as $item) {
      $mon = $item['code'];
    }
    $delete = $db->prepare("DELETE FROM baigiang WHERE id = " . $id );
    $delete->execute();
    return $mon;
  }
  static function update($id,$image,$name,$mota,$file,$pdf){
    $db = DB::getInstance();
    $update = $db->prepare("UPDATE baigiang SET image ='$image', name = '$name', mota = '$mota', file = '$file', pdf = '$pdf' WHERE ID = '$id' ");
    $update->execute();
  }
  static function insertUser($nameImg,$hoten,$email,$sdt,$diachi,$msv,$mk){
    $db = DB::getInstance();
    $insert = $db->prepare( " INSERT INTO user (nameAvatar,HoTen,Email,SDT,DiaChi,MaSinhVien,MatKhau) VALUES ('$nameImg','$hoten','$email','$sdt','$diachi','$msv', '$mk') ");
    $insert->execute();
  }
  static function insertAdmin($nameImg,$hoten,$email,$sdt,$diachi,$msv,$mk){
    $db = DB::getInstance();
    $insert = $db->prepare( " INSERT INTO admin (nameAvatar,HoTen,Email,SDT,DiaChi,MaSinhVien,MatKhau) VALUES ('$nameImg','$hoten','$email','$sdt','$diachi','$msv', '$mk') ");
    $insert->execute();
  }
  static function insertmonhoc($code,$name,$hocphan){
    $db = DB::getInstance();
    $insert = $db->prepare( " INSERT INTO monhoc (code,name,hocphan) VALUES ('$code','$name', '$hocphan') ");
    $insert->execute();
  }
  static function search($search){
    $list = [];
    $db = DB::getInstance();
    $req = $db->query("SELECT * FROM baigiang WHERE name LIKE '%" . $search . "%'");
    $req->execute();
    foreach ($req->fetchAll() as $item) {
      $list[] = new Post($item['ID'], $item['image'], $item['code'], $item['name'], $item['mota'], $item['file'], $item['pdf']);
    }
    return $list;
  }
}