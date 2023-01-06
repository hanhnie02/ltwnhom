<?php 
	$severName="localhost:3306";
	$userName="root";
	$password="";
	$database="sunphone";
	$conn =mysqli_connect($severName,$userName,$password,$database);

	if(!$conn){
		die("Lỗi kết nối tới database"). mysqli_connect_error();
		exit();
	}
	else{
		// echo 'kết nối thành công';
	}

?>