<html>
<head>
<title>Add Supplier</title>
<!-- <script type="text/javascript">
function validate() {
if (document.form1.name.value == '') {
alert('Please provide your name');
document.form1.name.focus();
return false;
}
if (document.form1.email.value == '') {
alert('Please provide your email');
document.form1.email.focus();
return false;
}
return true;
}
</script> -->
</head>
<body>
<a href="oop_index.php">Home</a>&nbsp
<a href="supplier.php">Back</a>
<br/><br/>
<div id="msg"></div>
<!--<form action="add.php" method="post" name="form1" onsubmit = "return(validate());">-->
<form action="Bs_php.php" method="post" name="form1" >
<table width="25%" border="0">
<tr>
<td>Supplier Id</td>
<td><input type="text" name="supplier_id"></td>
</tr>
<tr>
<td>Supplier Name</td>
<td><input type="text" name="supplier_name"></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="Address"></td>
</tr>
<tr>
<td>Phone Number</td>
<td><input type="text" name="phone"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="Submit" value="Add"></td>
</tr>
</table>
</form>
</body>
</html>