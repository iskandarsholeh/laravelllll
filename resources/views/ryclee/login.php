<?php
session_start();

if( empty($_SESSION['user']) ){
	echo"<script>alert('Silahkan Login Dulu');
	document.location.href='index.php'</script>\n"; 
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Iskandar Sholeh</title>
</head>
<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container-fluid">
			
			<h3> Hallo Selamat Datang <?php echo $_SESSION['user']; ?> </h3>
			
			<form class="d-flex">
				<a href="logout.php" class=" btn btn-danger pull-right">Keluar</a>
			</form>
		</div>
	</nav>
	
	
</body>
<table>
	<tr>
		<th>
			<form action="https://id.iskandar-061.com" method="post">
				<button  id="close-image" style="height:180px;width:220px"><img src="assets/indonesia.png"style="height:150px;width:200px"></button>
			</form>
		</th>
		<th>
			<form action="https://en.iskandar-061.com" method="post">
				<button id="close-image" style="height:180px;width:220px"><img src="assets/inggris.jpg"style="height:150px;width:200px"></button>
			</form></th>
			<th>
				<form action="https://supports.iskandar-061.com" method="post">
					<button id="close-image" style="height:180px;width:220px"><img src="assets/supports.png"style="height:150px;width:200px"></button>
				</form></th>
			</tr>
		</table>

	</body>
	</html>

