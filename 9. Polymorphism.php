
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
  <h2><?php echo "Object Oriented PHP Practice (Access Modifiers)"; ?></h2>
 </section> 
 <section class="maincontent">
   	
   	<?php

    // public - a public property can be used from anywhere.
    // private - a private property can be used from its own class.
    // protected - a protected property can be used from its own class and its sub class.

   		class StudentInformation{
   			public $name;
        public $id;
        protected $status = "Representative";

        public function __construct($name, $id) {
            $this->name = $name;
            $this->id = $id;
        }

   			public function informationDisplay() {
   				echo "My Name is : ".$this->name."<br>";
   				echo "My ID is : ".$this->id."<br>";
   			}
   		}

      class Representative extends StudentInformation{
          public function informationDisplay() {
              echo "My Name is : ".$this->name."<br>";
              echo "My ID is : ".$this->id."<br>";
              echo "My Status is : ".$this->status."<br>";
          }
      }

      $sta = new StudentInformation("Dipta Paul", "1422020038");
      $sta->informationDisplay();
      echo "<br><br>";
   		$rep = new Representative("Dipta Chandra Paul", "000000001");
      $rep->informationDisplay();

      if($rep instanceof StudentInformation) {
        echo "inherited<br>";
      }
   	?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "Practice Hard :) Thank you :)"; ?></h2>
 </section>
</div>
</body>
</html>