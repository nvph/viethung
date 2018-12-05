<?php
class Monhoc
{
  public $id;
  public $code;
  public $name;
  public $hocphan;
  function __construct($id,$code,$name,$hocphan)
  {
    $this->id = $id;
    $this->code = $code;
    $this->name = $name;
    $this->hocphan = $hocphan;
  }
  function showall(){
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM monhoc');
    $req->execute();
    foreach ($req->fetchAll() as $item) {
      $list[] = new Monhoc($item['ID'], $item['code'], $item['name'], $item['hocphan']);
    }
    return $list;
  }
  function dbmonhoc($hocphan){
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM monhoc WHERE hocphan = ' . $hocphan);
    $req->execute();
    foreach ($req->fetchAll() as $item) {
      $list[] = new Monhoc($item['ID'], $item['code'], $item['name'], $item['hocphan']);
    }
    return $list;
  }
  function find($ID){
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM monhoc WHERE ID = :ID');
    $req->execute(array('ID' => $ID));

    $item = $req->fetch();
    if (isset($item['ID'])) {
      return new Monhoc($item['ID'], $item['code'], $item['name'], $item['hocphan']);
    }
    return null;
  }
  function updatemonhoc($id,$code,$name){
    $db = DB::getInstance();
    $update = $db->prepare("UPDATE monhoc SET code ='$code', name = '$name' WHERE ID = '$id' ");
    $update->execute();
  }
  function deletemonhoc($id){
    $db = DB::getInstance();
    $mon = '';
    $sl = $db->prepare("SELECT * FROM monhoc WHERE id = " . $id);
    $sl->execute();
    foreach ($sl->fetchAll() as $item) {
      $mon = $item['code'];
    }
    $delete = $db->prepare("DELETE FROM monhoc WHERE id = " . $id );
    $delete->execute();
    return $mon;
  }
}