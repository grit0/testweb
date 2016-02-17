<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <!-- Mirrored from noblesim.com/home.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jun 2015 10:56:34 GMT -->
    <head>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />-->
        <meta charset="utf-8">
        <title>เบอร์มงคล เบอร์สวย เบอร์ดี โปรแกรมทำนายเบอร์โทรศัพท์ ดูดวงเบอร์โทรศัพท์ </title>
	</head>
	<body background="images/bg.jpg">
<?php

				function pic($service){
					//return $service;
					if ($service=="Truemove") echo "<img src='images/true.png'>";
					else if($service=="Dtac") echo "<img src='images/dtac.png'>";
					else if($service=="AIS") echo "<img src='images/ais.jpg'>";

				}
            if($_REQUEST['num0']=="") $num0 = "_"; else $num0=$_REQUEST['num0'] ;
            if($_REQUEST['num1']=="") $num1 = "_"; else $num1=$_REQUEST['num1'] ;
            if($_REQUEST['num2']=="") $num2 = "_"; else $num2=$_REQUEST['num2'] ;
            if($_REQUEST['num3']=="") $num3 = "_"; else $num3=$_REQUEST['num3'] ;
            if($_REQUEST['num4']=="") $num4 = "_"; else $num4=$_REQUEST['num4'] ;
            if($_REQUEST['num5']=="") $num5 = "_"; else $num5=$_REQUEST['num5'] ;
            if($_REQUEST['num6']=="") $num6 = "_"; else $num6=$_REQUEST['num6'] ;
            if($_REQUEST['num7']=="") $num7 = "_"; else $num7=$_REQUEST['num7'] ;
            if($_REQUEST['num8']=="") $num8 = "_"; else $num8=$_REQUEST['num8'] ;
            $tel_sum = "_".$num0.$num1.$num2.$num3.$num4.$num5.$num6.$num7.$num8;
           // echo $tel_sum;
            $con=mysql_connect('localhost','mongkhol_9name','pnA1xPtr') or die ("Not Connected phpmyadmin");


			

			mysql_select_db("mongkhol_9name")or die("Not can't use db");
			$re = mysql_query("SELECT * FROM mobile_num ");		

			
            ?><table align="center"  border="2" >
                                            <tr>
                                                <td align="center"><font color = "white" size = "3" >aaเบอร์โทรศัพท์(ผลรวม)</font></td>
												<td  align="center"><font color = "white" size = "3" >เครือข่าย</font></td>
												<td align="right"><font color = "white" size = "3" >ราคา</font></td>
                                            </tr>
											<tr>
    <td><input type="text" name="tel_num" value="" size="32" /></td>
    <td><input type="text" name="service" value="" size="32" /></td>
    <td>input type="text" name="price" value="" size="32" /></td>
    <td><input type="submit" value="Insert" /></td>
  </tr>
											<?php  if(mysql_num_rows($re)!=0){ while($row=mysql_fetch_row($re)){ ?>
			                                 <tr class="normal" onmouseover="this.className='highlight'" onmouseout="this.className='normal'">
												
                                                <td width="151"  align="center"><a href="forcast.php?number= <?php echo $row[1];?>"><font color="#ebce1d"><?php echo substr($row[1] ,0,3)."-".substr($row[1] ,3,3)."-".substr($row[1] ,6,4)." (".array_sum(array_map('intval', str_split($row[1]))).")";?></font></a></td>
                                                <td width="77" align="center"><?php echo pic($row[2]);?></td>
                                                <td width="86" align="right"><?php echo $row[3]." ฿";?></td>
												
												
                                            </tr><?php  } }?>
			     </table>
				</body>     
</html>