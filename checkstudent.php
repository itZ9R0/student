<?php 
session_start();
 ?>
<?php 
$con = mysqli_connect('127.0.0.1', 'root', '', 'student');
$query = mysqli_query($con, "SELECT * FROM students WHERE phone='{$_POST['phone']}' AND password='{$_POST['password']}'");	
$num = mysqli_num_rows($query);  

if($num>0){
	$stroka = $query->fetch_assoc();
	$_SESSION['id'] = $stroka['id'];
	header("Location: index.php");
} else{
	header("Location: loginStudent.php");
}				
?>