<?php 
session_start();
 ?>
<!DOCTYPE html>
<?php 
$con = mysqli_connect('127.0.0.1', 'root', '', 'student');
$query = mysqli_query($con, "SELECT * FROM students WHERE phone='{$_POST['phone']}' AND password='{$_POST['password']}'");	
$num = mysqli_num_rows($query);  

			
?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

	<div class="col-6 mx-auto">
		<h1>Авторизация студента</h1>
		<form action="checkstudent.php" method="POST">
			<input class="form-control mt-3" type="" name="phone" placeholder="phone">
			<input class="form-control mt-3" type="" name="password" placeholder="password">
			<button class="btn btn-info mt-3">Залогиниться</button>
		</form>
	</div>
	

</body>
</html>

