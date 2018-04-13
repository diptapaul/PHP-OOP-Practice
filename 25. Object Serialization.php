<?php include 'header.php';?>


<?php

	class Programming{
		public    $html;
		private   $css;
		protected $php;

		public function __construct() {
			$this->html = "I know HTML.";
			$this->css  = "I love CSS.";
			$this->php  = "I am PHP Coder.";
		}
	}

	$pro     = new Programming();
	$ser     = serialize($pro);
	file_put_contents("programming.txt", $ser);
	$getcont = file_get_contents("programming.txt");
	$unser   = unserialize($getcont);

	print_r($unser);

?>


<?php include 'footer.php';?>

