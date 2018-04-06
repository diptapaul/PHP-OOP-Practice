
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
  <h2><?php echo "Object Oriented PHP Practice (Static Methods and Properties)"; ?></h2>
 </section> 
 <section class="maincontent">
   	
   	<?php
   		
   		class StaticCheck{
   			public static $id = "1422020038";
   			public static $name = "Dipta Paul";
   			public static $sem = "Spring 2018";

   			public static function staticChecker() {
   				echo "My Name is : ".self::$name."<br>";
   				echo "My ID is : ".self::$id."<br>";
   			}
   		}

   		StaticCheck::staticChecker();
   		echo "Graduation Year : ".StaticCheck::$sem."<br>";
   	?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.trainingwithliveproject.com"; ?></h2>
 </section>
</div>
</body>
</html>