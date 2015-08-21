<?php
	interface Comentario{
		public function setUser(Usuario $user);
		public function getUser();

		public function setComment($comentario);
		public function getComment();
	}
?>