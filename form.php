<html>
<head>
	<title>Form</title>
	<style>
	body{
		margin: auto;
		padding: 30px;
		width: 500px;
		height: 500px;
		border: 1px black solid;
	}
	label{
		width:75px;
		display: block;
		float: left;
	}
	</style>
</head>
<body>
	<form action="submission-process.php" method="post">
		<label> Name: </label> <input type = "text" name = 'name'><br/><br/>
		<label> Email: </label> <input type = 'text' name = 'email'></br><br/>
		<label> Message: </label> <input type = 'text' name = 'message'><br/><br/>
		<center><input type = "submit" value = "Submit" name = 'submit'></center>
	</form>
</body>
</html>