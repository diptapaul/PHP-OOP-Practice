
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
  <h2><?php echo "Object Oriented PHP Practice (Constructor and Destructor)"; ?></h2>
 </section> 
 <section class="maincontent">
   	
   	<?php
   		
   		class UserData{
   			public $user, $userId;

   			public function __construct($user, $id) {
   				$this->user = $user;
   				$this->userId = $id;

   				echo "$this->user<br>$this->userId<br>";
   			}

   			public function __destruct() {
   				unset($this->user);
   				unset($this->userId);
   			}
   		}

   		$user = new UserData("Mamun", "25");
   	?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "Practice Hard :) Thank you :)"; ?></h2>
 </section>
</div>
</body>
</html>