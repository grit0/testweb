<?php require_once('Connections/localmongkol9.php'); ?>
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

mysql_select_db($database_localmongkol9, $localmongkol9);
$query_mobileset = "SELECT * FROM mobile_num";
$mobileset = mysql_query($query_mobileset, $localmongkol9) or die(mysql_error());
$row_mobileset = mysql_fetch_assoc($mobileset);
$totalRows_mobileset = mysql_num_rows($mobileset);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body p {
	text-align: center;
}
body table tr td {
	text-align: center;
}
</style>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><a href="insert.php">เพิ่มเบอร์โทรใหม่</a></p>
<table width="514" border="1" align="center">
  <tr>
    <td bgcolor="#FFCC33">tel_num</td>
    <td bgcolor="#FFCC33">service</td>
    <td bgcolor="#FFCC33">price</td>
    <td bgcolor="#FFCC33">option</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_mobileset['tel_num']; ?></td>
      <td><?php echo $row_mobileset['service']; ?></td>
      <td><?php echo $row_mobileset['price']; ?></td>
      <td> <a href="delete.php?row=<?php echo $row_mobileset['row']; ?>">ลบ</a></td>
    </tr>
    <?php } while ($row_mobileset = mysql_fetch_assoc($mobileset)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($mobileset);
?>
