<?php

define('DB_NAME', 'flghts');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link=mysqli_connect('localhost','root','','flghts');

if(!$link){
	die('Could now connect: ' .mysqli_error($link));
}

$db_selected = mysqli_select_db($link,"flghts");

if(!$db_selected){
	die('Can\'t use '.DB_NAME. ':' .mysqli_error($link));
}

echo 'Success';

$value = $_POST['fname'];
$value1 = $_POST['gender'];
$value2 = $_POST['dob'];
$value3 = $_POST['email'];
$value4 = $_POST['fno1'];

$sql = "INSERT INTO flightinf(fname,gender,dob,email,fno) VALUES ('$value','$value1','$value2','$value3','$value4')";

/*if($link->multi_query($sql)===TRUE){
	echo "New records created Successfully";
} else {
	echo "Error: ".$sql. "<br>" .$link->error;}*/

if(!mysqli_query($link,$sql)){
	die('Error: ' . mysqli_error($link));
}

mysqli_close($link);

?>






