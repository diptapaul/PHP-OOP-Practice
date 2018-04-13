<?php include 'header.php';?>


<?php

	class One{
		private $name, $age;

		public function setNameandAge($name, $age) {
			$this->name = $name;
			$this->age = $age;
		}

		public function getName() {
			return $this->name;
		}

		public function getAge() {
			return $this->age;
		}
	}

	$one = new One();
	$one->setNameandAge("Dipta Paul", 22);

	$two = $one;
	$two->setNameandAge("Pias Dash", 23);

	$three = clone $one;
	$three->setNameandAge("Jaber Ahmed", 25);

	echo $one->getName()."<br/>".$one->getAge()."<br/>";
	echo $two->getName()."<br/>".$two->getAge()."<br/>";
	echo $three->getName()."<br/>".$three->getAge()."<br/>";

?>


<?php include 'footer.php';?>
