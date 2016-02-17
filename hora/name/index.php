<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <title>ตรวจสอบชื่อ - นามสกุล ตามหลักเลขศาสตร์</title>
    </head>
    <style>
        body{
	background-attachment: fixed;
	background-position: center;
}
        
        #contrainer table{
            margin:0 auto;
            /*width:400px;-->*/
           
           
        }
        #detail{ color: #FFFFFF;}
        .style12 {
             font-family: Tahoma;
             font-size: 18px;
             color: #663300;
        }
                @font-face {
    font-family: myFont;
    src: url('TH Dan Vi Vek Bold Italic ver 1.03.otf');
    color: #fff;
    }
    </style>

<body>
        <div class="contrainer"  align="center">
    <table width="730" height="170"  cellpadding="0" cellspacing="0" background="bg.png">
      <!--DWLayoutTable-->
      <tr>
          <td valign="middle" >
          <form action="index2.php" method="get" name="frm" target="_blank" id="frm" onsubmit="return check_data()">
              <table width="419" border="0" align="center" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                  <td width="130"><span class="style12" style="font: 20pt myFont; color: #FFFFFF;" >กรุณาเลือกวันเกิด</span></td>
                  <td width="273"><font face="MS Sans Serif, Tahoma, sans-serif" size="2">
                        <select name="Day">
                            <option value="0">วันอาทิตย์ <p>
                            <option value="7">วันจันทร์ <p>
                            <option value="6">วันอังคาร <p>
                            <option value="5">วันพุธกลางวัน <p>
                            <option value="2">วันพุธกลางคืน <p>
                            <option value="3">วันพฤหัสบดี <p>
                            <option value="1">วันศุกร์ <p>
                            <option value="4">วันเสาร์<p>
                        </select>

            </font>
            </td>
                </tr>
                <tr>
                  <td><span class="style12" style="font: 20pt myFont; color: #FFFFFF;" >ใส่ชื่อ</span></td>
                  <td><font face="MS Sans Serif, Tahoma, sans-serif" size="2">
                    <input size="34" name="name" id="name">
                  </font></td>
                </tr>
                <tr>
                  <td><span class="style12" style="font: 20pt myFont; color: #FFFFFF;" >ใส่นามสกุล</span></td>
                  <td><font face="MS Sans Serif, Tahoma, sans-serif" size="2">
                    <input size="34" name="last" id="surname">
                  </font></td>
                </tr>
                <tr>
                  <td height="34">&nbsp;</td>
                  <td><label>
                    <input type="submit"  style="font:14pt myFont;" name="submit" id="button" value="คลิกคำทำนาย">
                    <input type="reset" style="font:14pt myFont;" name="reset" id="button2" value="ล้างระบบ">
                  </label></td>
                </tr>
              </tbody></table>
        </form>        </td>

      </tr>
    </tbody></table>
    </div>



    </body>
</html>
