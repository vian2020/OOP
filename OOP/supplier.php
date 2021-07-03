<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<?php
//including the database connection file
require_once("crud_functions.php");
$crud = new Crud();
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM supplier ORDER BY id DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>
<html>
<head>
<title>Supplier</title>
</head>
<body>
<a href="oop_index.php">Home</a>&nbsp;
<a href="Adds_data.php">Add New Data</a>&nbsp;
<a href="product_information.php">Product Info</a>&nbsp;
<a href="category.php">Category</a><br/><br/>
<table width='80%' border=0>
<tr bgcolor='#CCCCCC'>
<td>Supplier_Id</td>
<td>Supplier Name</td>
<td>Address</td>
<td>Phone</td>
<td>Update</td>
</tr>
<?php
foreach ($result as $key => $res) {
//while($res = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$res['supplier_id']."</td>";
echo "<td>".$res['supplier_name']."</td>";
echo "<td>".$res['Address']."</td>";
echo "<td>".$res['phone']."</td>";
echo "<td><a id=\"$res[id]\" type=\"button\" class=\"btn btn-primary view_data\" data-toggle=\"modal\" data-target=\"#view_modal\" name=\"view\" >View</a> | <a href=\"edits_page.php?id=$res[id]\" class=\"btn btn-primary\" type=\"button\">Edit</a> | <a href=\"supplierdelete_function.php?id=$res[id]\" type=\"button\" class=\"btn btn-primary\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
}
?>
</table>

<!-- View Product Modal -->

<div class="modal fade" id="view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-lg" role="document">
	     <div class="modal-content" style="background-color: darkred; padding: 2px;  color: white; font-weight:bold; font-size: 20pt; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; border-radius: 15px; font-size: 13pt;">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">View Supplier</h5>
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

<!-- View Product Modal End Here -->

<script type="text/javascript" src="./assets/js/jquery.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

		//When view button clicked
		$('.view_data').click(function() {
			var id = $(this).attr('id');
			$.ajax({
				url: "viewSupplier.php",
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