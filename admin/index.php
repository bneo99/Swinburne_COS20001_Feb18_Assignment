<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<!-- Change some head values-->
<script>
	/* modify this to change the title */
	document.title = "Admin Dashboard | Plan My Party!";
	
</script>

<div class="w3-container w3-theme-l3">
<h1>Admin Dashboard</h1>
</div>

<div class="w3-container w3-theme-l4">
<h2>Current Orders</h2>

<table class="w3-table w3-theme-l3 w3-striped w3-bordered w3-border">
<tr>
	<th>Order Number</th>
	<th>Name of Customer</th>
	<th>Description</th>
	<th>Progress</th>
	<th>Action</th>
</tr>
<tr>
	<td>000002</td>
	<td>Anne</td>
	<td>Josh's Birthday Party</td>
	<td>Waiting for deposit</td>
	<td><a href="/admin/progress.php">Update Progress</a></td>
</tr>
<tr>
	<td>000001</td>
	<td>John</td>
	<td>party</td>
	<td>50%</td>
	<td><a href="/admin/progress.php">Update Progress</a></td>
</tr>
</table>
</div>

<style>
th, td {
	text-align:center;
}
</style>

<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>