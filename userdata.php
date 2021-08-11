<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}else{
	echo "No connection";
}


mysqli_select_db($con, 'resortdatabase');

$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into  resort (user, email, mobile, comment) values 
('$name', '$email','$mobile','$comment')  ";  

mysqli_query($con, $query);

header('location:index.php');


?>