<?
$connect="";

function open_db(){
	global $connect;
	$connect=mysqli_connect("localhost","root","adminadmin","blog");
	if(mysqli_connect_error()){
		echo("DB connect fail.");
		exit();
	}
}

function close_db(){
	global $connect;
	mysqli_close($connect);
}
?>
