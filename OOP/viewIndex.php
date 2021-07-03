<?php
// including the database connection file
require_once("crud_functions.php");
$crud = new Crud();
  $response = '';
  $id = $_POST['id'];
  $statement = "SELECT * FROM users WHERE id = '$id'";
    $row = $crud->getData($statement);
    foreach ($row as $rows){

  $response .= '
  		<center>
  			<p>Name:  '.$rows['name'].'</p><br/>
  			<p>Age:   '.$rows['age'].'</p><br/>
  			<p>Email: '.$rows['email'].'</p><br/>
  		</center>
  ';
}

  echo $response;
?>
