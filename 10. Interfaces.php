
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
  <h2><?php echo "Object Oriented PHP Practice (Interface)"; ?></h2>
 </section> 
 <section class="maincontent">
   	
   	<?php

        interface School{
            public function mySchool();
        }
   		 
        interface College{
            public function myCollege();
        }

        interface University{
            public function myUniversity();
        }

        class Teacher implements School, College, University{

            public function __construct() {
                $this->mySchool();
                $this->myCollege();
                $this->myUniversity();
            }

            public function mySchool() {
                echo "I am a School Teacher<br>";
            }

             public function myCollege() {
                echo "I am a College Teacher<br>";
            }

             public function myUniversity() {
                echo "I am a University Teacher<br>";
            }
        }

        class Student implements School, College, University{

            public function __construct() {
                $this->mySchool();
                $this->myCollege();
                $this->myUniversity();
            }

            public function mySchool() {
                echo "I am a School Student<br>";
            }

             public function myCollege() {
                echo "I am a College Student<br>";
            }

             public function myUniversity() {
                echo "I am a University Student<br>";
            }
        }

        new Teacher();
        new Student();
   	?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.trainingwithliveproject.com"; ?></h2>
 </section>
</div>
</body>
</html>