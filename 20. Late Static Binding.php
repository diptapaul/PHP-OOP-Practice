<!doctype html>
<html>
<head>
 <title>Object Oriented PHP Practice</title>
 <style>
  body{font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;}
 </style>
</head>
<body>

<div class="phpcoding">
 <section class="headeroption">
  <h2><?php echo "Object Oriented PHP Practice (Late Static Binding)"; ?></h2>
 </section> 
 <section class="maincontent">
   	
   	<?php

        class Php{
          public static function framework() {
            echo static::getClass()."<br/>";
          }
          public static function getClass() {
            return __CLASS__;
          }
        }

        class Cakephp extends Php{
          public static function getClass() {
            return __CLASS__;
          }
        }

        $php = new Php;
        $php->framework();

        $php = new Cakephp;
        $php->framework();

   	?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.trainingwithliveproject.com"; ?></h2>
 </section>
</div>
</body>
</html>