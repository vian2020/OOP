<html>
<head>
<title>Add Data</title>
<script type="text/javascript">
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
</script>
</head>
<body>
<a href="oop_index.php">Home</a>
<br/><br/>
<div id="msg"></div>
<!--<form action="add.php" method="post" name="form1" onsubmit = "return(validate());">-->
<form action="B_php.php" method="post" name="form1" >
<table width="25%" border="0">
<tr>
<td>Name</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" name="age"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="Submit" value="Add"></td>
</tr>
</table>
</form>
</body>
</html>