<?php
$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = 'select * from esheet';
	$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1"> 
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>EMAIL</td>
			<td>TYPE</td>
		</tr>

<?php while($data = mysqli_fetch_assoc($result)){ ?>

		<tr>
			<td><?=$data['id']?></td>
			<td><?=$data['username']?></td>
			<td><?=$data['password']?></td>
			<td><?=$data['email']?></td>
			<td><?=$data['type']?></td>
		</tr>
<?php } ?>

</table>
</body>
</html>