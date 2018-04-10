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
  <h2><?php echo "Object Oriented PHP Practice (Abstract Class)"; ?></h2>
 </section> 
 <section class="maincontent">
   	
   	<?php

        abstract class Student{
          public $name;
          public $age;

          public function details() {
            echo $this->name." is ".$this->age." years old.<br>";
          }

          abstract public function abstractChecker();
        }

        class Boy extends Student{
            public function describe() {
                return parent::details(). "And I am a University Student.<br>";
            }

            public function abstractChecker() {
                echo "it's an abstarct method.<br>";
            }
        }

        $boy = new Boy();
        $boy->name = "Dipta Paul";
        $boy->age = "22";
        $boy->details();
        echo $boy->describe();
        $boy->abstractChecker();
   	?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "Practice Hard :) Thank you :)"; ?></h2>
 </section>
</div>
</body>
</html>