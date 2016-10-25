<?php namespace twitter;

	use _interface\likeable as Likeable;

	class Twitter implements Likeable {
		function __construct() {
			$this->favorite = 0;
		}

		public function Like() {
			$this->favorite++;
		}

		public function Dislike() {
			$this->favorite--;
		}

		public function getLike() {
			return $this->favorite;
		}

		public function getObject() {
			return "Twitter";
		}

		public function totalLike() {
			echo "Favorite Twitter sebanyak : " .$this->favorite ."\n";
		}
	}
?>