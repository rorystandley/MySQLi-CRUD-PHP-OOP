<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
$db->delete('CRUDClass','id=5');  // Table name, WHERE conditions
$res = $db->getResult();  
print_r($res);

//Another way to delete record in PHP
<?php
  include('class/mysql_crud.php');
  $connect = mysqli_connect("localhost","root","","CRUD");
  $query = mysqli_query('select * from CRUDClass where id = 5');  // Table name, WHERE conditions
  echo $query;
?>
