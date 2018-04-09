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
  <h2><?php echo "Object Oriented PHP Practice (Magic Methods)"; ?></h2>
 </section> 
 <section class="maincontent">
   	
   	<?php

        class MagicMethodChecker{
            public function __get($pm) {
                echo "$pm does not exist.<br>";
            }
            public function __set($pm, $value) {
                echo "$pm is set to $value.<br>";
            }
            public function __call($pm, $value) {
                echo "There is no $pm method and Arguments are :".implode(', ', $value)."<br>";
            }
        }

        $magicmethodchecker = new MagicMethodChecker();

        // undefined property
        $magicmethodchecker->hasan;

        // undefined property has given value
        $magicmethodchecker->hasan = "hello";

        // undefined method calling
        $magicmethodchecker->notExistMethod("2", "3");
   	?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.trainingwithliveproject.com"; ?></h2>
 </section>
</div>
</body>
</html>