<link href="style.css" type="text/css" rel="stylesheet"/>
<page backtop="40mm" backbottom="10mm" backleft="10mm" backright="10mm">
<page_header>
<img src="img/rect825.png" alt="">
</page_header>
<page_footer>
    <p style="text-align: center;"> جميع الحقوق محفوظة ﻹب عبد الله</p>
</page_footer>
<?php require_once('connetion.php');
$qur = mysqli_query($con,'SELECT * FROM app_users WHERE UserId=1');
if(mysqli_num_rows($qur) > 0){
    while($rs = mysqli_fetch_assoc($qur)){ ?>

<table >
    
<tr class="fill">
<td>

    <span class="img">
        <img src="img/moawia.png" alt="">
    </span>
</td>
<td class="tabelPdf">
<span class="span">
<table>
    <tr>
    <td class="tabelPdf"><?= $rs['UserId']?></td>
    <td>الرقم</td>
    </tr>

        <tr>
    <td class="tabelPdf"><?= $rs['Username']?></td>
    <td>اسم الطالب</td>
    </tr>

        <tr>
    <td class="tabelPdf"><?= $rs['Email']?></td>
    <td>الدرجة الأول</td>
    </tr>
    <tr>
    <td class="tabelPdf"><?= $rs['PhoneNumber']?></td>
    <td>الدرجة الثانية</td>
    </tr>
</table>
</span>
</td>  
</tr>
<?php
        }
    }
    ?>
</table>
    
    </page>