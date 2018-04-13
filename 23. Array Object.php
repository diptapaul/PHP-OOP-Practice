<?php include 'header.php';?>


<?php

	 $arr = array("HTML", "CSS", "PHP", "JAVASCRIPT");
	 $array = new ArrayObject($arr);
	 $array->append("Java");
	 $array->append("Python");

	 $iterator = $array->getIterator();

	 while ($iterator->valid()) {
	 	echo $iterator->current()."<br>";
	 	$iterator->next();
	 }

?>


<?php include 'footer.php';?>
