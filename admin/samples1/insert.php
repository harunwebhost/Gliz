<!DOCTYPE html>
<!--
Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
-->
<html>
<head>
	<meta charset="utf-8">
	<title>CKEditor Sample</title>
	<script src="../ckeditor.js"></script>
	<script src="js/sample.js"></script>
	<link rel="stylesheet" href="css/samples.css">
	<link rel="stylesheet" href="toolbarconfigurator/lib/codemirror/neo.css">
</head>
<body id="main">


<?php 
$connection=mysqli_connect("localhost","root","","amruth_testing");
		mysqli_select_db($connection,"amruth_testing");
	if(isset($_POST['submit'])){
		
		$editor=$_POST['editor'];
		$sql="insert into testedit values(null,'$editor')";
		mysqli_query($connection,$sql);
		echo mysqli_error($connection);
	}
 ?>
<main>
	<form action="" method="post">
	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
			<?php 
			$select="select * from testedit where test_id='1'";
			$res=mysqli_query($connection,$select);
			$get=mysqli_fetch_array($res);
			?>
				<textarea id="editor" name="editor"> <?php echo $get['editor'] ?></textarea>
			</div>
		</div>
	</div>
	<input type="submit" name="submit">
</form>
	
</main>

<script>
	initSample();
</script>

</body>
</html>
