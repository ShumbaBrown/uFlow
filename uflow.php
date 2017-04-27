<!DOCTYPE html>
<html>
<head>
  <title>uFlow</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <img src="/assets/images/yellow_nmd.jpg" alt="Question" style="width:304px;height:228px;">
    <form name="survey" action="uflow.php" method="POST" >
        <input type="radio" name="response1" value="1" checked> 1
        <input type="radio" name="response2" value="2"> 2
        <input type="radio" name="response3" value="3"> 3
        <input type="radio" name="response4" value="4"> 4
        <input type="radio" name="response5" value="5"> 5  
        <input type="text" name="questionid" />
        <input type="text" name="answer" />
        <input type="submit" value="submit" />
    </form> 
</body>
</html>
<?php
$db = pg_connect("host=ec2-54-204-0-88.compute-1.amazonaws.com port=5432 dbname=d3hnfidbth4s7m user=socgheqnrisjpe password=2b039a1b59f3a43a62a998c5b756574ca8d4ce660eb7a068613ccd695cc0e60a");
$query = "INSERT INTO answers VALUES ('$_POST[questionid]','$_POST[questionid]',
'$_POST[answer]')";
$result = pg_query($query); 


?>