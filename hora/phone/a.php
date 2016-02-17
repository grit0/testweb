<?php require_once('Connections/mongkhol9.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_mongkhol9, $mongkhol9);
$query_Mobileset = "SELECT * FROM mobile_num";
$Mobileset = mysql_query($query_Mobileset, $mongkhol9) or die(mysql_error());
$row_Mobileset = mysql_fetch_assoc($Mobileset);
$totalRows_Mobileset = mysql_num_rows($Mobileset);
?>
 <!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ตรวจสอบชื่อ - นามสกุล ตามหลักเลขศาสตร์</title>
    </head>
	<body bgcolor="blue">
 <form id="frm" name="frm" method="get" action="a.php" onsubmit="return check_data()">
              <table border="0" align="center">
                <tbody>
                <tr>
                  <td><span class="style12" style="font:15pt myFont;" >เบอร์โทรศัทพ์</span></td>
                  <td><span class="style12" style="font:15pt myFont;" >ผู้ให้บริการ</span></td>
				  <td><span class="style12" style="font:15pt myFont;" >ราคา</span></td>           
                </tr>
                <tr>
                  <td><input size="34" name="name" id="name"></td>
                  <td><input size="34" name="services" id="services"></td>
				  <td><input size="34" name="price" id=""></td>           
                </tr>				

                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit"  style="font:14pt myFont;" name="submit" id="button" value="เพิ่มเบอร์"></td>
				  <td><input type="reset" style="font:14pt myFont;" name="reset" id="button2" value="ลบเบอร์"></td>
                </tr>
              </tbody></table>
 </form>       
	</body>
	</html>
				<?php
mysql_free_result($Mobileset);
  
				    $con=mysql_connect('localhost','mongkhol_9name','pnA1xPtr') or die ("Not Connected phpmyadmin");
    $dbname="mongkhol_9name";
    mysql_select_db($dbname,$con);
     mysql_query("SET NAMES UTF8");
				
				$name=$_REQUEST["name"];
				$services=$_REQUEST["services"];
				$price=$_REQUEST["price"];
				if(isset($_REQUEST["submit"])) {
					echo $name."    ".$services."   ".$price;
				//	echo $_REQUEST["name"]."     ".$_REQUEST["services"]."     ".$_REQUEST["price"];
			//	mysql_query("INSERT INTO  mobile_num (tel_num,service,price) VALUES ($_REQUEST["number"],$_REQUEST["services"],$_REQUEST["price"])");
				mysql_query("INSERT INTO  mobile_num (tel_num,service,price) VALUES ($name,$services,$price)");
				
				}
				
				?>