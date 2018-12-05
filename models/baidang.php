<?php
class Baidang
{
  public $id;
  public $title;
  public $date;
  public $content;
  function __construct($id,$title,$date,$content)
  {
    $this->id = $id;
    $this->title = $title;
    $this->date = $date;
    $this->content = $content;
  }
  static function insertbaidang($title,$date,$content){
    $db = DB::getInstance();
    $insert = $db->prepare( " INSERT INTO baidang (title,date,content) VALUES ('$title','$date','$content') ");
    $insert->execute();
  }
  function dsbaidang(){
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM baidang');
    $req->execute();
    foreach ($req->fetchAll() as $item) {
      $list[] = new Baidang($item['id'], $item['title'], $item['date'], $item['content']);
    }
    return $list;
  }
  function editbaidang($id){
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM baidang WHERE id = :id');
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    if (isset($item['id'])) {
      return new Baidang($item['id'], $item['title'], $item['date'], $item['content']);
    }
    return null;
  }
  function updatebaidang($id,$title,$date,$content){
    $db = DB::getInstance();
    $update = $db->prepare("UPDATE baidang SET title = '$title',date = '$date',content = '$content' WHERE id = '$id' ");
    $update->execute();
  }

  function deletebaidang($id){
    $db = DB::getInstance();
    $delete = $db->prepare("DELETE FROM baidang WHERE id = " . $id );
    $delete->execute();
  }
}