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
  <h2><?php echo "Object Oriented PHP Practice (__CLASS__ and get_class() Method)"; ?></h2>
 </section> 
 <section class="maincontent">
   	
   	<?php

        abstract class One {
          public function check() {
              echo "the class name is ".__class__."<br/>";
              echo "the object name is ".get_class($this)."<br/>";
          }
        }

        class Two extends One{
          public function checker() {
            echo "the class name is ".__class__."<br/>";
            echo "the object name is ".get_class()."<br/>";
          }

          public function ourMethod() {
            parent :: check();
          }
        }

        $two = new Two;
        $two->check();
        $two->checker();
        $two->ourMethod();
   	?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.trainingwithliveproject.com"; ?></h2>
 </section>
</div>
</body>
</html>