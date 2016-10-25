<?php namespace _interface;

	interface Likeable {
		public function Like();
		public function Dislike();
		public function totalLike();
		public function getLike();
		public function getObject();
	}
?>