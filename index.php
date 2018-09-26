<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require_once('connetion.php') ?>
    
    <div class="main-content" id="main-content">
            <link rel="stylesheet" href="style.css">
    <table>
        <tr>
        <th>الدرجة الثانية</th>
            <th>الدرجة الأول</th>
            <th>الاسم</th>
            <th>الرقم </th>
        </tr>
    <?php 
    $qur = mysqli_query($con,'SELECT * FROM app_users');
    if(mysqli_num_rows($qur) > 0){
        while($rs = mysqli_fetch_assoc($qur)){ ?>
               <tr>
                   <td><?=$rs['PhoneNumber']?></td>
                   <td><?=$rs['Email']?></td>
                   <td><?=$rs['Username']?></td>
                     <td><?=$rs['UserId']?></td>
                 </tr> 
<?php
        }
    }
    ?>

    </table>
   </div> 
                       <a href="show.php" class="button">go</a>
                       <a href="print.php" class="button">طباعة 1</a>
                       <button id="print2">طباعة 2</button>
                       <button id="print3">طباعة 3</button>
   <script src="jquery.min.js"></script>

   <script>
   $('#print3').click(function(){
       var printm = document.getElementById('main-content');
       var wind = window.open("","","width=800,height=600");
       wind.document.write(printm.outerHTML);
       wind.document.close();
       wind.focus();
       wind.print();
       wind.close();
   });

      $('#print2').click(function(){
        var printm = document.getElementById('main-content');
       var wind = window.open();
       wind.document.write(printm.outerHTML);
       wind.print();
       wind.close();

   });
   </script>
   
</body>
</html>