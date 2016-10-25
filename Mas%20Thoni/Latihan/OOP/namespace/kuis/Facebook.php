<?php namespace facebook;

	use _interface\likeable as Likeable;

	class Facebook implements Likeable {
		function __construct() {
			$this->like = 0;
		}

		public function Like() {
			$this->like++;
		}

		public function Dislike() {
			$this->Like--;
		}

		public function getLike() {
			return $this->like;
		}

		public function getObject() {
			return "Facebook";
		}

		public function totalLike() {
			echo "Like Facebook sebanyak : " .$this->like ."\n";
		}
	}
?>