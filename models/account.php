<?php
class Account
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
  function find_user(){
    $db = DB::getInstance();
    if (isset($_SESSION['account_user'])) {
      $req = $db->prepare("SELECT * FROM user WHERE MaSinhVien = '". $_SESSION["account_user"] . "'");
      $req->execute();
      $item = $req->fetch();
      if (isset($item['MaSinhVien'])) {
        return new Account($item['ID'], $item['nameAvatar'], $item['HoTen'], $item['Email'], $item['SDT'], $item['DiaChi'], $item['MaSinhVien'], $item["MatKhau"]);
      }
    }
    return null;
  }
  function find_admin(){
    $db = DB::getInstance();
    if (isset($_SESSION['account_admin'])) {
      $req = $db->prepare("SELECT * FROM admin WHERE MaSinhVien = '". $_SESSION["account_admin"] . "'");
      $req->execute();
      $item = $req->fetch();
      if (isset($item['MaSinhVien'])) {
        return new Account($item['ID'], $item['nameAvatar'], $item['HoTen'], $item['Email'], $item['SDT'], $item['DiaChi'], $item['MaSinhVien'], $item["MatKhau"]);
      }
    }
    return null;
  }
  function dsuser(){
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM user');
    $req->execute();
    foreach ($req->fetchAll() as $item) {
      $list[] = new Account($item['ID'], $item['nameAvatar'], $item['HoTen'], $item['Email'], $item['SDT'], $item['DiaChi'], $item['MaSinhVien'], $item["MatKhau"]);
    }
    return $list;
  }
  function edit_user($ID){
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM user WHERE ID ='.$ID);
    $req->execute(array('ID' => $ID));
    $item = $req->fetch();
    if (isset($item['ID'])) {
      return new Account($item['ID'], $item['nameAvatar'], $item['HoTen'], $item['Email'], $item['SDT'], $item['DiaChi'], $item['MaSinhVien'], $item["MatKhau"]);
    }
    return null;
  }
  function updateuser($id,$image,$name,$email,$sdt,$diachi,$msv){
    $db = DB::getInstance();
    $update = $db->prepare("UPDATE user SET nameAvatar ='$image', HoTen = '$name', Email = '$email', SDT = '$sdt', DiaChi = '$diachi' , MaSinhVien = '$msv' WHERE ID = '$id' ");
    $update->execute();
  }
  function deleteuser($id){
    $db = DB::getInstance();
    $delete = $db->prepare("DELETE FROM user WHERE ID = " . $id );
    $delete->execute();
  }
}
