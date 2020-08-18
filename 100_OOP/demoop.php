<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class Animal
    {
       public function __construct($weightValule=5)
       {
           $this ->Weight =$weightValule;
           echo "Object created <br>";        
       }
       function __destruct()
       {
           echo "Object destroyed";
       }
       //public $Weight =1;
       public function makeNoise()
       {
           echo "Animal:....$this->Weight<br>"; 
       }
       
    }

    $obj = new animal();
    $obj ->makeNoise();
    echo "Flag 2<br>";
    $obj->Weight=10;
    echo "$obj->Weight.<br>";
    echo "Flag 3<br>";
    $obj = null;
    echo "<br>Flag 4<br>";
    
    //$obj ->Weight= 10;
    //echo $obj ->Weight;
    // $obj ->location = "TaiChung";
    // echo $obj ->location ."*";
?>
</body>
</html>