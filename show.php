<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body id="body">
<?php require_once('connetion.php') ?>
<div  class="header">
<img src="img/rect825.png" alt="">
</div>
<div class="main-content">
<div class="myIamge">
    <img src="img/moawia.png" alt="">
</div>
<div class="static">
    <?php
$qur = mysqli_query($con,'SELECT * FROM app_users WHERE id=1');
    if(mysqli_num_rows($qur) > 0){
        while($rs = mysqli_fetch_assoc($qur)){ ?>
          <form action="">
        <div class="form-input">
        <input type="text" value="<?= $rs['UserId']?>">
        <label for="">رقم الطالب  </label>
        </div>

                <div class="form-input">
        <input type="text" value="<?= $rs['id']?>">
        <label for="">اسم الطالب  </label>
        </div>

                <div class="form-input">
        <input type="text" value="<?= $rs['id']?>">
        <label for="">الدرجة الأول </label>
        </div>

                <div class="form-input">
        <input type="text">
        <label for="">الدرجة الثانية </label>
        </div>

    </form>     
<?php
        }
    }
    ?>
   
</div>
</div>
<button id="print3">طباعة 3</button>
   <script src="jquery.min.js"></script>

   <script>
      $('#print2').click(function(){
        var printm = document.getElementById('body');
       var wind = window.open();
       wind.document.write(printm.outerHTML);
       wind.print();
       wind.close();

   });
   </script>
</body>
</html>