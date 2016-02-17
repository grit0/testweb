<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 72px;
	z-index: 1;
	left: 349px;
	top: 147px;
}
#apDiv2 {
	position: absolute;
	width: 200px;
	height: 72px;
	z-index: 1;
	left: 601px;
	top: 146px;
}
#apDiv3 {
	position: absolute;
	width: 200px;
	height: 72px;
	z-index: 1;
	left: 836px;
	top: 146px;
}
#apDiv4 {
	position: absolute;
	width: 200px;
	height: 72px;
	z-index: 1;
	left: 839px;
	top: 143px;
}
#apDiv5 {
	position: absolute;
	width: 115px;
	height: 43px;
	z-index: 2;
	left: 562px;
	top: 312px;
}
</style>
</head>

<body>
<div id="apDiv1">
  <form name="form1" method="post" action="insert.php">
    <label for="number">number</label>
    <input type="text" name="number" id="number">
  </form>
</div>
<div id="apDiv2">
  <form name="form2" method="post" action="insert.php">
    <label for="services">services</label>
    <input type="text" name="services" id="services">
  </form>
</div>
<div id="apDiv3">
  <form name="form3" method="post" action="insert.php">
    <label for="price">price</label>
    <input type="text" name="price" id="price"><input type="submit" name="submit" id="submit" value="INSEART">
	<?php
    $con=mysql_connect('localhost','mongkhol_9name','pnA1xPtr') or die ("Not Connected phpmyadmin");
    $dbname="mongkhol_9name";
    mysql_select_db($dbname,$con);
     mysql_query("SET NAMES UTF8");

	if(isset($_REQUEST["submit"])) {$num=$_POST["number"];echo "ddd=$num";}
		//mysql_query("INSERT INTO  mobile_num (tel_num,service,price) VALUES ('55','55','55')");
	//mysql_query("INSERT INTO  mobile_num (tel_num,service,price) VALUES ($_REQUEST["number"],$_REQUEST["services"],$_REQUEST["price"])");
	//mysql_query("INSERT INTO  mobile_num (tel_num,service,price) VALUES ('$_REQUEST["number"]','55','55')");
	//('$_REQUEST["number"]','$_REQUEST["services"]','$_REQUEST["price"]')"); 
		//echo isset($_REQUEST["submit"]);
	?>
  </form>
</div> 

	<!--<img src="insertIcon.png" alt="" width"100" height="40" longdesc="http://www.9mongkhol.com/insert">-->
</body>
</html>

