<?php
class Blog_model extends CI_Model
{
  function insert_into_db()
  {
    $f1 = $_POST['title'];
    $f2 = $_POST['body'];
    $f3 = date('Y-m-d');

//    $this->db->query("INSERT INTO sch_haunt (title, body, time) VALUES('$f1','$f2', '$f3')");

$sql = "INSERT INTO sch_haunt (title, body, time) VALUES (?, ?, ?)"; 

$this->db->query($sql, array($f1, $f2, $f3));
  }
}
