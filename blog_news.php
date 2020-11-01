<?
include("inc_common.php");
include("inc_db.php");
check_login();
open_db();
?>
<!doctype html>
<html>
	<head>
		<?php include("inc_head.php"); ?>
	</head>

	<body>
		<?php include("inc_header.php"); ?>
		<main>
			<h1>Member News</h1>
			<nav>
				<a href="member_news_create.php">Create</a>
			</nav>
			<table>
				<thead>
					<tr>
						<td>ID</td>
						<td>Topic</td>
						<td>Pic</td>
						<td>Date</td>
						<td>Actions</td>
					</tr>
				</thead>
				<tbody>
<?
$sql="select * from member_news";
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
?>				
					<tr>
						<td><?=$row[id]?></td>
						<td><?=urldecode($row[topic])?></td>
						<td><img src="../<?=$row[pic]?>" height="30"></td>
						<td><?=$row[date]?></td>
						<td>
							<a href="member_news_edit.php?id=<?=$row[id]?>">Edit</a>
							| 
							<a onClick="return confirm('sure?')" href="member_news_delete.php?id=<?=$row[id]?>">Delete</a>
						</td>
					</tr>
<? }?>				
				</tbody>
			</table>
			<?
				echo($_COOKIE[msg]);
				setcookie("msg","",time()-10);
			?>
		</main>

	</body>
</html>


































