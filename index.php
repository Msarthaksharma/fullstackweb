<?php
//Taken help from https://www.geeksforgeeks.org/how-to-fetch-data-from-localserver-database-and-display-on-html-table-using-php/ to display data


$user = 'root';
$password = '';


$database = 'sarthak_sharma8886667';


$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);


if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}


$sql = " SELECT * FROM sarthakdb ORDER BY student2_email DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>IT Team Registration</title>
	
	<style>
		*{
			margin:0px;
		}
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #000;
			font-size: 18px;
		}

		td {
			border: 1px solid black;
		}

		th,
		td {
			border: 1px solid black;
			text-align: center;
		}
		nav{
			height:5rem;
			background-color:yellow;
			display:flex;
			justify-content:center;
			align-item:center;
		}

	</style>
</head>

<body>
	<section>
		<nav>
		<h1>Admin Panel</h1>
		</nav>
		<table>
			<tr>
				<th>Id</th>
				<th>team_name</th>
				<th>college_name</th>
				<th>college_address</th>
				<th>college_city</th>
				<th>college_province</th>
				<th>student1_name</th>
				<th>student1_email</th>
				<th>student2_name</th>
				<th>student2_email</th>
			</tr>
			
			<?php
				
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				
				<td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['team_name'];?></td>
				<td><?php echo $rows['college_name'];?></td>
				<td><?php echo $rows['college_address'];?></td>
				<td><?php echo $rows['college_city'];?></td>
				<td><?php echo $rows['college_province'];?></td>
				<td><?php echo $rows['student1_name'];?></td>
				<td><?php echo $rows['student1_email'];?></td>
				<td><?php echo $rows['student2_name'];?></td>
				<td><?php echo $rows['student2_email'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
