<?php
//include database connection file
require_once('crud_functions.php');
$crud = new Crud();
$response = '';
$id=$_POST['id'];
$statement="SELECT * FROM supplier WHERE id= '$id'";
$row = $crud->getData($statement);
  foreach($row as $rows);{

 $response .= '
			<center>
	            <p>Supplier Id: '.$rows['supplier_id'].'</p><br/>
				<p>Supplier Name: '.$rows['supplier_name'].'</p><br/>
				<p>Address: '.$rows['Address'].'</p><br/>
				<p>Phone: '.$rows['phone'].'</p><br/>
			</center>
 ';
}
echo $response;
?>