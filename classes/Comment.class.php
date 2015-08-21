<?php
	require_once "ComentarioInterface.php";

	class Comment implements Comentario{
		private $user;
		private $comment;

		public function __construct(Usuario $usuario, $comentario){
			$this->setUser($usuario);
			$this->setComment($comentario);
		}

		public function setUser(Usuario $usuario){
			if(!$usuario instanceof Usuario){
				die('O usuario deve ser uma instancia de User');
			}

			$this->user = $usuario;
		}

		public function getUser(){
			return $this->user;
		}

		public function setComment($comentario){
			$this->comment = $comentario;
		}

		public function getComment(){
			return $this->comment;
		}
	}
?>