<!DOCTYPE html>
<head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {listt-style: none;}
</style>
</head>
<body>
<h2>Enter information regarding book</h2>
<ul>
<form name="insert" action="insert.php" method="POST" >
<li>questionID:</li><li><input type="text" name="questionid" /></li>
<li>answer:</li><li><input type="text" name="answer" /></li>
<li><input type="submit" /></li>
</form>
</ul>
</body>
</html>
<?php
$db = pg_connect("host=ec2-54-204-0-88.compute-1.amazonaws.com port=5432 dbname=d3hnfidbth4s7m user=socgheqnrisjpe password=2b039a1b59f3a43a62a998c5b756574ca8d4ce660eb7a068613ccd695cc0e60a");
$query = "INSERT INTO answers VALUES ('$_POST[questionid]','$_POST[questionid]',
'$_POST[answer]')";
$result = pg_query($query); 
?>