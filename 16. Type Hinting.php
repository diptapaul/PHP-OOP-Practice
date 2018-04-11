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
  <h2><?php echo "Object Oriented PHP Practice (Type Hinting)"; ?></h2>
 </section> 
 <section class="maincontent">
   	
   	<?php

        class Student{
            function information($name) {
                echo "The Student's Name is : $name.<br>";
            }
        }

        class Boy{
            function inFormation(Student $student) {
                $student->information("Dipta Paul");
            }
        }
        $boy = new Boy;
        $boy->inFormation(new Student);

   	?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.trainingwithliveproject.com"; ?></h2>
 </section>
</div>
</body>
</html>