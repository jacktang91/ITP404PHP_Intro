<?php

	require('functions.php');

	if (!isset($_POST['submit'])){
		redirect('form.php');
	}
?>

<html>
<head>
	<title></title>
	<style>
		body{
			margin:auto;
			margin-top: 25px;
			padding-top: 25px;
			width:150px;
			height:50px;
			text-align: center;
			border:1px black solid;
		}
	</style>
</head>
<body>
	<?php
		$n = $_POST['name'];
		$e = $_POST['email'];
		$m = $_POST['message'];

		if (isset($_POST['submit'])){
			if(validateEmail($e)==true && notEmpty($n)==true && notEmpty($e)==true && notEmpty($m)==true){
				echo '<p>Thank you for your submission</p>';
			}
			else{
				redirect('form.php');
			}
		}
		else{
			redirect('form.php');
		}
	?>
</body>
</html>