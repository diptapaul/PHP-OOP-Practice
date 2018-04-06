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
  <h2><?php echo "Object Oriented PHP Practice (Class, Method and Object)"; ?></h2>
 </section> 
 <section class="maincontent">
 
 
 
   <?php

   		class Student{
   			public $name;
   			public $id;
   			public function printInformation() {
   				echo "Students Name is : ".$this->name."<br>";
   				echo "Students Id is   : ".$this->id."<br>";
   			}
   		}

   		$student = new Student;
   		$student->name = "Dipta Paul";
   		$student->id = "1422020038";
   		$student->printInformation();

   ?>
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.trainingwithliveproject.com"; ?></h2>
 </section>
</div>
</body>
</html>