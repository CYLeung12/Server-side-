<?
include("inc_db.php");
open_db();

$topic=urlencode($_POST[topic]);
$description=urlencode($_POST[description]);
$date=$_POST[date];


$org_name=$_FILES[pic][name]; //abc.jpg
$tmp_name=$_FILES[pic][tmp_name]; //c:/windows/temp/px2dj.tmp
$ext=pathinfo($org_name,PATHINFO_EXTENSION); //jpg
$new_name=time().rand(1000,9999).".".$ext; //15132165152285.jpg
$file_path="images/$new_name";  //images/15132165152285.jpg

if($ext!="jpg"){
	setcookie("msg","support jpg only",time()+60);
	header("location:blog_create.php");
	exit();
}
if(!move_uploaded_file($tmp_name,"../../AppServ/www/$file_path")){
	setcookie("msg","upload fail.",time()+60);
	header("location:blog_create.php");
	exit();
}


$sql="insert into blog (topic,description,date,pic) values ('$topic','$description','$date','$file_path')";
if(mysqli_query($connect,$sql)){
	setcookie("msg","created!",time()+60);
	header("location:blog_create.php");
}else{
	setcookie("msg","system busy, try again later!",time()+60);
	header("location:blog_create.php");
}


?>









