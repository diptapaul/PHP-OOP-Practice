<?php include 'header.php';?>


<?php

	$arr = array("HTML", "CSS", "PHP", "JAVASCRIPT", "Java", "Python");
	$ai = new ArrayIterator($arr);
	$ci = new CachingIterator($ai);
	$li = new LimitIterator($ai, 0, 4);

	foreach ($li as $value) {
		echo $value." ";
	}

	echo "<br>";

	foreach ($ci as $value) {
		echo $value;
		if($ci->hasNext()) {
			echo ", ";
		}
	}

?>


<?php include 'footer.php';?>
