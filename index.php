<?php 
	include 'config/config.php';
	$sql = "select * from contact";
	$result = mysqli_query($conn, $sql);
?>
<html>
	<head></head>
	<body>
		
		<table border="1" width="900">
			<tr>
				<td>Name</td>
				<td>Email</td>
				<td>Mobile</td>
				<td>Query</td>
			</tr>

			<?php
				while($row = mysqli_fetch_array($result)){
				?>
					<tr>
						<td><?php echo $row['Name']; ?></td>
						<td><?php echo $row['Email']; ?></td>
						<td><?php echo $row['Mobile']; ?></td>
						<td><?php echo $row['Query']; ?></td>
					</tr>
				<?php
				}
			?>
			
			
		</table>
		
	</body>
</html>