<?php include 'session_chk.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Marwadi College</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<script src="javascript/js.js="></script>
</head>
<?php include 'header.php' ?>

<br>
<style>
	table,
	th,
	td {
		border: 1px solid black;
	}
</style>

<body style="color: black;">
	<h3 style="color: #09a3b9; ">
		<center>Exam Time Table</center>
	</h3>
	<hr>
	<table id="table">
		<tr class="rows" style="color: white; background-color: #09a3b9">
			<th>Subject Code</th>
			<th>Subject Name</th>
			<th>Stream</th>
			<th>Sem</th>
			<th>Date</th>
			<th>Time</th>
		</tr>

		<tr class="rows">
			<td>05BH0101</td>
			<td>Minor Project</td>
			<td>BCA(HONS)</td>
			<td>1</td>
			<td>19/12/2023</td>
			<td>2:00PM TO 5:00PM</td>
		</tr>

		<tr class="rows">
			<td>05BH0102</td>
			<td>Mobile Computing</td>
			<td>BCA(HONS)</td>
			<td>1</td>
			<td>21/12/2023</td>
			<td>2:00PM TO 5:00PM</td>
		</tr>

		<tr class="rows">
			<td>05BH0103</td>
			<td>Cloud Computing</td>
			<td>BCA(HONS)</td>
			<td>1</td>
			<td>23/12/2023</td>
			<td>2:00PM TO 5:00PM</td>
		</tr>

		<tr class="rows">
			<td>05BH0104</td>
			<td>Machine Learning</td>
			<td>BCA(HONS)</td>
			<td>1</td>
			<td>29/12/2023</td>
			<td>2:00PM TO 5:00PM</td>
		</tr>

		<tr class="rows">
			<td>05BH0201</td>
			<td>Operating System</td>
			<td>BCA(HONS)</td>
			<td>2</td>
			<td>29/06/2023</td>
			<td>2:00PM TO 5:00PM</td>
		</tr>

		<tr class="rows">
			<td>05BH0202</td>
			<td>Computer Networks</td>
			<td>BCA(HONS)</td>
			<td>2</td>
			<td>01/07/2023</td>
			<td>2:00PM TO 5:00PM</td>
		</tr>

		<tr class="rows">
			<td>05BH0203</td>
			<td>Software Testing</td>
			<td>BCA(HONS)</td>
			<td>2</td>
			<td>03/08/2023</td>
			<td>2:00PM TO 5:00PM</td>
		</tr>

		<tr class="rows">
			<td>05BH0204</td>
			<td>Java</td>
			<td>BCA(HONS)</td>
			<td>2</td>
			<td>06/08/2023</td>
			<td>2:00PM TO 5:00PM</td>
		</tr>
	</table>

	<?php include 'footer.php' ?>


</body>

</html>