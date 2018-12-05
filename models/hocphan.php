<?php
class Hocphan
{
  public $id;
  public $name;
  function __construct($id,$name)
  {
    $this->id = $id;
    $this->name = $name;
  }
  static function inserthocphan($name){
    $db = DB::getInstance();
    $insert = $db->prepare( " INSERT INTO hocphan (name) VALUES ('$name') ");
    $insert->execute();
  }
  function dshocphan(){
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM hocphan');
    $req->execute();
    foreach ($req->fetchAll() as $item) {
      $list[] = new Hocphan($item['id'], $item['name']);
    }
    return $list;
  }
  function find($id){
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM hocphan WHERE id = :id');
    $req->execute(array('id' => $id));

    $item = $req->fetch();
    if (isset($item['id'])) {
      return new Hocphan($item['id'], $item['name']);
    }
    return null;
  }
  function updatehocphan($id,$name){
    $db = DB::getInstance();
    $update = $db->prepare("UPDATE hocphan SET name = '$name' WHERE id = '$id' ");
    $update->execute();
  }
  function deletehocphan($id){
    $db = DB::getInstance();
    $delete = $db->prepare("DELETE FROM hocphan WHERE id = " . $id );
    $delete->execute();
  }
}