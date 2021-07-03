<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<?php
//including the database connection file
require_once("crud_functions.php");
$crud = new Crud();
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM users ORDER BY id DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>
<html>
<head>
<title>Homepage</title>
</head>
<body>
<a href="A_data.php">Add New Data</a>&nbsp  
<a href="product_information.php">Product Information</a>&nbsp
<a href="category.php">Category</a>&nbsp
<a href="supplier.php">Supplier</a><br/><br/>
<table width='80%' border=0>
<tr bgcolor='#CCCCCC'>
<td>Name</td>
<td>Age</td>
<td>Email</td>
<td>Update</td>
</tr>
<?php
foreach ($result as $key => $res) {
//while($res = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$res['name']."</td>";
echo "<td>".$res['age']."</td>";
echo "<td>".$res['email']."</td>";
echo "<td><a id=\"$res[id]\" type=\"button\" class=\"btn btn-primary view_data\" data-toggle=\"modal\" data-target=\"#view_modal\" name=\"view\" >View</a> | <a type=\"button\" class=\"btn btn-primary\" href=\"edit_page.php?id=$res[id]\">Edit</a> | <a href=\"delete_function.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\" type=\"button\" class=\"btn btn-primary\">Delete</a></td>";
}
?>
</table>

<!-- View Asset Modal -->

<div class="modal fade" id="view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-lg" role="document">
	     <div class="modal-content" style="background-color: purple; padding: 2px;  color: white; font-weight:bold; font-size: 20pt; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; border-radius: 15px; font-size: 13pt;">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">View Index</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button> 
	      </div>
	      <div class="modal-body">  
	      	<div id="list">

	      	</div>
	     </div>
	     <div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	     </div>
	  </div>
	</div>
</div>

<!-- View Asset Modal End Here -->

<script type="text/javascript" src="./assets/js/jquery.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

		//When view button clicked
		$('.view_data').click(function() {
			var id = $(this).attr('id');
			$.ajax({
				url: "viewIndex.php",
				method: "post",
				data: {id: id},
				success: function(response) {
					$('#list').html(response);
					$('#view_modal').modal('show');
				}
			});
		});
	});
</script>
</body>
</html>