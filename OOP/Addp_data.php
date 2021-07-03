<html>
<head>
<title>Add Product</title>
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
<a href="product_information.php">Back</a>
<br/><br/>
<div id="msg"></div>
<!--<form action="add.php" method="post" name="form1" onsubmit = "return(validate());">-->
<form action="Bp_php.php" method="post" >
<table width="25%" border="0">
<tr>
<td> Product Id</td>
<td><input type="text" name="product_id"></td>
</tr>
<tr>
<td>Barcode</td>
<td><input type="text" name="barcode"></td>
</tr>
<tr>
<td>SNumber</td>
<td><input type="text" name="snumber"></td>
</tr>
<tr>
<td>Model</td>
<td><input type="text" name="model"></td>
</tr>
<tr>
<td>Price</td>
<td><input type="text" name="price"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="Submit" value="Add"></td>
</tr>
</table>
</form>
</body>
</html>