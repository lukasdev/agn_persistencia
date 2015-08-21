<?php
	interface Post{
		public function setTitle($titulo);
		public function getTitle();

		public function setContent($content);
		public function getContent();

		public function setComments(array $array);
		public function getComments();
	}
?>