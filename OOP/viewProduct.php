<?php
//database connection file
require_once("crud_functions.php");
$crud= new Crud();
$response= '';
$id= $_POST['id'];
$statement="SELECT * FROM product_information WHERE id= '$id'";
$row= $crud->getData($statement);
    foreach($row as $rows);{

 $response .= '
			<center>
	            <p>Product Id: '.$rows['product_id'].'</p><br/>
				<p>Barcode: '.$rows['barcode'].'</p><br/>
				<p>SNumber: '.$rows['snumber'].'</p><br/>
				<p>Model: '.$rows['model'].'</p><br/>
				<p>Price: '.$rows['price'].'</p><br/>
			</center>
 ';
 }
 echo $response;
?>