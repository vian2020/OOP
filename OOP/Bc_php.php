<html>
<head>
<title>Add Category</title>
</head>
<body>
<?php
//including the database connection file
require_once("crud_functions.php");
require_once("validation.php");
$crud = new Crud();
$validation = new Validation();
if(isset($_POST['Submit'])) {
$category_id = $crud->escape_string($_POST['category_id']);
$category = $crud->escape_string($_POST['category']);
$msg = $validation->check_empty($_POST, array('category_id', 'category'));
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
$result = $crud->execute("INSERT INTO category(category_id,category) VALUES('$category_id','$category')");
//display success message
echo "<font color='green'>Data added successfully.";
echo "<br/><a href='category.php'>View Result</a>";
}
}
?>
</body>
</html>