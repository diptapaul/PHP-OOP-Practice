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
  <h2><?php echo "Object Oriented PHP Practice (PHP Method Chaining)"; ?></h2>
 </section> 
 <section class="maincontent">
   	
   	<?php

        class Calculation{
          
          public $a, $b, $result;

          public function getValue($a, $b) {
            $this->a = $a;
            $this->b = $b;
            return $this;
          }

          public function getResult() {
            $this->result = $this->a + $this->b;
            return $this->result;
          }
        }

        $calculation = new Calculation();
        echo "The Addition is ".$calculation->getValue(10, 5)->getResult();

   	?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "Practice Hard :) Thank you :)"; ?></h2>
 </section>
</div>
</body>
</html>