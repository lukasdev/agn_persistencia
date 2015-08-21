<?php
	require_once "UsuarioInterface.php";
	class User implements Usuario{
		private $name;
		private $email;

		public function setName($name){
			$this->name = $name;
		}

		public function getName(){
			return $this->name;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getEmail(){
			return $this->email;
		}
	}
?>