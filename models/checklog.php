<?php
class Checklog
{
  public $id;
  public $image;
  public $hoten;
  public $email;
  public $sdt;
  public $diachi;
  public $msv;
  public $mk;
  function __construct($id,$image,$hoten,$email,$sdt,$diachi,$msv,$mk)
  {
    $this->id = $id;
    $this->image = $image;
    $this->hoten = $hoten;
    $this->email = $email;
    $this->sdt = $sdt;
    $this->diachi = $diachi;
    $this->msv = $msv;
    $this->mk = $mk;
  }
  function checkuser(){
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM user');
    $req->execute();
    foreach ($req->fetchAll() as $item) {
      $list[] = new Checklog($item['ID'], $item['nameAvatar'], $item['HoTen'], $item['Email'], $item['SDT'], $item['DiaChi'], $item['MaSinhVien'], $item['MatKhau']);
    }
    return $list;
  }
  function checkadmin(){
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM admin');
    $req->execute();
    foreach ($req->fetchAll() as $item) {
      $list[] = new Checklog($item['ID'], $item['nameAvatar'], $item['HoTen'], $item['Email'], $item['SDT'], $item['DiaChi'], $item['MaSinhVien'], $item['MatKhau']);
    }
    return $list;
  }
  function dktk($image,$name,$email,$sdt,$diachi,$mk){
    $db = DB::getInstance();
    $insert = $db->prepare("INSERT INTO user (nameAvatar,HoTen,Email,SDT,DiaChi,MatKhau) VALUES ('$image','$name','$email','$sdt','$diachi','$mk')");
    $insert->execute();
  }
}