<?php namespace googlePlus;
	
	use _interface\likeable as Likeable;

	class GooglePlus implements Likeable {
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
			return "Google Plus";
		}

		public function totalLike() {
			echo "Favorite Google Plus sebanyak : " .$this->favorite ."\n";
		}
	}
?>