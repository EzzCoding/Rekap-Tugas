<?php namespace foo;

	include 'file3.php';

	use animate\Animal as anim;

	class Cat extends anim {
		public function Says() {
			echo "Meoooow \n";
		}

		public static function Eat() {
			echo "Cat is Eat \n" .self::Breathe();
		}
	}
?>