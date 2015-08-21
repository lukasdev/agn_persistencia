<?php
	require_once "PostInterface.php";
	class Postagem implements Post{
		private $title;
		private $content;
		private $comments = array();

		public function setTitle($titulo){
			if(!is_string($titulo)){
				die('O titulo da publicação deve ser uma string');
			}

			$this->title = $titulo;
		}

		public function getTitle(){
			return $this->title;
		}

		public function setContent($content){
			$this->content = $content;
		}

		public function getContent(){
			return $this->content;
		}

		public function setComments(array $comentarios){
			$this->comments = $comentarios;
		}

		public function getComments(){
			return (count($this->comments) == 0) ? null : $this->comments;
		}
	}
?>