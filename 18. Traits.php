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
  <h2><?php echo "Object Oriented PHP Practice (Trait)"; ?></h2>
 </section> 
 <section class="maincontent">
   	
   	<?php

        trait Java{
          public function javaCoder() {
            echo "I am a Java Coder :). <br/>";
          }
        }

        trait Php{
          public function phpCoder() {
            echo "I am a Php Coder :). <br/>";
          }
        }

        trait JavaPhp{
          use Java, Php;
        }

        class CoderOne{
          use Java, Php;
        }

        class CoderTwo{
          use JavaPhp;
        }


        $coder1 = new CoderOne;
        $coder1->javaCoder();
        $coder1->phpCoder();

        $coder2 = new CoderTwo;
        $coder2->javaCoder();
        $coder2->phpCoder();

   	?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.trainingwithliveproject.com"; ?></h2>
 </section>
</div>
</body>
</html>