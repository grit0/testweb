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
	left: 500px;
	top: 225px;
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
	left: 550px;
	top: 312px;
}
</style>
</head>

<body>
<div id="apDiv1">
  <form name="form1" method="post" action="">
    <label for="number">number</label>
    <input type="text" name="number" id="number">
  </form>
</div>

<div id="apDiv5"> <input type="submit" name="submit" id="button" value="DELETE">
<?

    $con=mysql_connect('localhost','mongkhol_9name','pnA1xPtr') or die ("Not Connected phpmyadmin");
    $dbname="mongkhol_9name";
    mysql_select_db($dbname,$con);
     mysql_query("SET NAMES UTF8");
	   if(isset($_REQUEST["submit"])){
		
	  
	   
	   mysql_query("DELETE FROM mobile_num WHERE tel_num = $_REQUEST["number"]"); echo "deleted";
	   }
	
	
	?>
	<!--<img src="insertIcon.png" alt="" width"100" height="40" longdesc="http://www.9mongkhol.com/delete">--></div>
</body>
</html>