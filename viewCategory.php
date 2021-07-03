<?php
//include database connection file
require_once('crud_functions.php');
$crud = new Crud();
$response = '';
$id=$_POST['id'];
$statement="SELECT * FROM category WHERE id= '$id'";
$row = $crud->getData($statement);
  foreach($row as $rows);{

 $response .= '
			<center>
	            <p>Category Id: '.$rows['category_id'].'</p><br/>
				<p>Category: '.$rows['category'].'</p><br/>
			</center>
 ';
}
echo $response;
?>