<html>
<head>
<title>Add Supplier</title>
</head>
<body>
<?php
//including the database connection file
require_once("crud_functions.php");
require_once("validation.php");
$crud = new Crud();
$validation = new Validation();
if(isset($_POST['Submit'])) {
$supplier_id = $crud->escape_string($_POST['supplier_id']);
$supplier_name = $crud->escape_string($_POST['supplier_name']);
$Address = $crud->escape_string($_POST['Address']);
$phone = $crud->escape_string($_POST['phone']);
$msg = $validation->check_empty($_POST, array('supplier_id', 'supplier_name', 'Address','phone'));
//$check_age = $validation->is_age_valid($_POST['age']);
//$check_email = $validation->is_email_valid($_POST['email']);
// checking empty fields
if($msg != null) {
echo $msg;
//link to the previous page
echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
//} elseif (!$check_age) {
//echo 'Please provide proper age.';
//} elseif (!$check_email) {
//echo 'Please provide proper email.';
}
else {
// if all the fields are filled (not empty)
//insert data to database
$result = $crud->execute("INSERT INTO supplier(supplier_id,supplier_name,Address,phone) VALUES('$supplier_id','$supplier_name','$Address','$phone')");
//display success message
echo "<font color='green'>Data added successfully.";
echo "<br/><a href='supplier.php'>View Result</a>";
}
}
?>
</body>
</html>