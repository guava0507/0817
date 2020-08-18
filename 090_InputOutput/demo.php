<?php
$scoreList = array(100, 50, 98, 95);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .third
        {
            color: red
        }
    </style>
</head>
<body>
    <ul>
         <?php foreach ($scoreList as $score) {?>
            <li><?=$score?></li>
         <?php }?>
    </ul>


    <hr>
    <!-- <ul>  設定if條件並給予class(third)
         <?php foreach ($scoreList as $score) {?>
            <?php if ($score > 50) {?>
                <li><?=$score?></li>
            <?php } else {?>
                <li class = "third"><?=$score?></li>
            <?php }?>
         <?php }?>
    </ul> -->
    <ul>
         <?php foreach ($scoreList as $score) {?>
            <li class = "<?=(($score < 60) ? "third" : " ")?>"><?=$score?></li>
         <?php }?>
    </ul>
    <!-- <ul>
        <?php for ($i = 1; $i < 4; $i++) {?>
                  <li><?=$i?></li>
        <?php }?>
    </ul> -->
    <hr> 
  
</body>
</html>