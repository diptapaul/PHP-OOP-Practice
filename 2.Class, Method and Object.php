
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

 	<form action="" method="post">
 		<table>
 			<tr>
 				<td> Enter the First Number </td>
 				<td> <input type="number" name="num1"/> </td>
 			</tr>

 			<tr>
 				<td> Enter the Second Number </td>
 				<td> <input type="number" name="num2"> </td>
 			</tr>

 			<tr>
 				<td> </td>
 				<td> <input type="submit" name="cal" value="Calculation"> </td>
 			</tr>
 		</table>
 	</form>
   	
   	<?php
   		if(isset($_POST['cal'])) {
   			$num1 = $_POST['num1'];
   			$num2 = $_POST['num2'];

   			if(empty($num1) or empty($num2)) {
   				echo "<span style='color: red'>Field must not be Empty.</span>";
   			}
	   		else {

	   			class Calculator{
		   			public $a, $b;

		   			function __construct($a, $b) {
		   				$this->a = $a;
		   				$this->b = $b;
		   				echo "The First Number is $this->a <br> The Second Number is $this->b<br>";
		   				echo "<hr>";
		   			}

		   			function add() {
		   				echo "The Addition is       : ".($this->a+$this->b)."<br>";
		   			}

		   			function sub() {
		   				echo "The Substractioin is  : ".($this->a-$this->b)."<br>";
		   			}

		   			function mul() {
		   				echo "The Multiplication is : ".($this->a*$this->b)."<br>";
		   			}

		   			function div() {
		   				echo "The Division is       : ".($this->a/$this->b)."<br>";
		   			}
		   		}
	   		
	   			$calcu = new Calculator($num1, $num2);
		   		$calcu->add();
		   		$calcu->sub();
		   		$calcu->mul();
		   		$calcu->div();
		   	}
   		}
   	?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "www.trainingwithliveproject.com"; ?></h2>
 </section>
</div>
</body>
</html>