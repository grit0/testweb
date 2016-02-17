<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <!-- Mirrored from noblesim.com/home.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jun 2015 10:56:34 GMT -->
    <head>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />-->
        <meta charset="utf-8">
        <title>เบอร์มงคล เบอร์สวย เบอร์ดี โปรแกรมทำนายเบอร์โทรศัพท์ ดูดวงเบอร์โทรศัพท์ </title>
	</head>
	<body background="images/bg.jpg">
	<font color = "white" size = "3" >
<?php


            $con=mysql_connect('localhost','mongkhol_9name','pnA1xPtr') or die ("Not Connected phpmyadmin");
			mysql_select_db("mongkhol_9name")or die("Not can't use db");
				
			function pic($service){
					//return $service;
					if ($service=="Truemove") echo "<img src='images/true.png'>";
					else if($service=="Dtac") echo "<img src='images/dtac.png'>";
					else if($service=="AIS") echo "<img src='images/ais.jpg'>";

				}
										if(isset($_REQUEST["submit"])){
											//echo $tel_num=$_REQUEST["tel_num"];
											//echo $service=$_REQUEST["service"];
											//echo $price=$_REQUEST["price"];
											//echo $sum=array_sum(array_map('intval', str_split($tel_num)));
										mysql_query("INSERT INTO mobile_num (tel_num, service, price,sum) VALUES ('$tel_num','$service','$price','$sum')");
										//mysql_query("INSERT INTO mobile_num (tel_num, service, price,sum) VALUES ('11111','AIS','111')");
										}
											//if(!empty($_REQUEST["tel_num"])&&!empty($_REQUEST["service"])&&!empty($_REQUEST["price"])&&isset($_REQUEST["submit"])) echo "full";
															
				
				$re = mysql_query("SELECT * FROM mobile_num ");$a=0;
?>
			
<form id="frm" name="frm" method="get" action="n.php" onsubmit="return check_data()">

											<table align="center"  border="2" >
                                            <tr>
                                                <td align="center"><font color = "white" size = "3" >เบอร์โทรศัพท์(ผลรวม)</font></td>
												<td  align="center"><font color = "white" size = "3" >เครือข่าย</font></td>
												<td align="right"><font color = "white" size = "3" >ราคา</font></td>
                                            </tr>
											<tr>
												<td><input type="text" name="tel_num" value="" size="32" /></td>
												<td><input type="text" name="service" value="" size="32" /></td>
												<td><input type="text" name="price" value="" size="32" /></td>
												<td><input type="submit" name="submit" value="Insert" /></td>
  </tr>
											<?php  if(mysql_num_rows($re)!=0){ while($row=mysql_fetch_row($re)){ ?>
			                                 <tr class="normal" onmouseover="this.className='highlight'" onmouseout="this.className='normal'">
												
                                                <td width="151"  align="center"><a href="forcast.php?number= <?php echo $row[1];?>"><font color="#ebce1d"><?php echo substr($row[1] ,0,3)."-".substr($row[1] ,3,3)."-".substr($row[1] ,6,4)." (".array_sum(array_map('intval', str_split($row[1]))).")";?></font></a></td>
                                                <td width="77" align="center"><?php echo pic($row[2]);?></td>
                                                <td width="86" align="right"><?php echo $row[3]." ฿";?></td>
												<td><input type="submit"  value="Delete" /></td>
												
                                            </tr><?php  } }?>
			     </table>
				 
				 <?php  
									
					//if(isset($_REQUEST["d1"])){echo "ddd1";}
										
											
				 ?>
</form>
</font>
			 </table>
				</body>     
</html>