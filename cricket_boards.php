<!DOCTYPE html>
<html>
<style >
	body{
		background-color:#19376D;
	}
	table{
		border: 1px solid black;
		border-collapse: collapse;
	}
	tr{
		border: 2px solid black;
	}
	th{
		font-size: xx-large;
		border: 2px solid black;
	}
	thead{
		background-color: #146C94;
	}
	tbody{
		background-color: #19A7CE;
	}
</style>
<head>
	<title>RANKS</title>
</head>
<body>
	<button style="background-color: "><a href="admin1st.html" style="color:">Back</a></button>
	 <div style="margin-top:225px; style : center" >
	<table align="center">
		<tr>
			<thead>
			<th>Board Name</th>
			<th>Chairman</th>
			<th>Team's Board</th>
			<th>DOA</th>
			</thead>
		</tr>
		<tbody>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="select * from cricket_boards";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["board_name"]."</th>"."<th>".
			$row["chairman"]."</th><th>".
			$row["team"]."</th><th>".
			$row["DOA"]."</th></tr>";
			}
		}
		mysqli_close($con);
		?>
		</tbody>
	</table>
</body>
</html>