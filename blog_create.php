<!doctype html>
<html>
	<head>
		<?php include("inc_head.php"); ?>
	</head>

	<body>
		<main>
			<section id="form">
				<div class="container">
					<h1>Blog - Create</h1>
					<form action="blog_create_submit.php" method="post" enctype="multipart/form-data">
						<fieldset>
							<label>Topic:</label>
							<input type="text" name="topic" data-validation="required">
						</fieldset>
						<fieldset>
							<label>Date:</label>
							<input type="date" name="date" data-validation="required">
						</fieldset>
						<fieldset>
							<label>Pic:</label>
							<input type="file" name="pic" data-validation="required">
                        </fieldset>
						<fieldset>
							<label>Description:</label>
							<textarea name="description"  data-validation="required"></textarea>
						</fieldset>


						<div class="btns">
							<input type="submit" value="Send">
							<input type="reset" value="Reset">
						</div>
					</form>
					<?
						echo($_COOKIE[msg]);
						setcookie("msg","",time()-10);
					?>
				</div>
			</section>
		</main>
	</body>
</html>















