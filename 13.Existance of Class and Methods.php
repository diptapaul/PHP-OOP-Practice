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
  <h2><?php echo "Object Oriented PHP Practice (Existance of Class and Methods)"; ?></h2>
 </section> 
 <section class="maincontent">
   	
   	<?php

        class Alu{
            public function balu() {

            }
        }

        if(class_exists("Alu")) {
            echo "Class Alu is found.<br>";
        }
        if(class_exists("Balu")) {
          echo "Class Balu is found.<br>";
        }
        else {
          echo "Class Balu is not found.<br>";
        }
        $alu = new Alu();

        if(method_exists($alu, "balu")) {
          echo "Balu Method is found.<br>";
        }
        if(method_exists($alu, "gablu")) {
          echo "Gablu Method found.<br>";
        }
        else {
          echo "Gablu Method is not found.<br>";
        }


   	?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "Practice Hard :) Thank you :)"; ?></h2>
 </section>
</div>
</body>
</html>