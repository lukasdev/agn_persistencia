<meta charset=UTF-8>
<?php
	function __autoload($classe){
		require_once "classes/$classe.class.php";
	}
	$userUm = new User();
	$userUm->setName('Lucas Silva');
	$userUm->setEmail('contato@downsmaster.com');

	$userDois = new User();
	$userDois->setName('João da silva');
	$userDois->setEmail('contato@joaozin.com');

	$postUm = new Postagem();
	$postUm->setTitle('Minha publicação 1');
	$postUm->setContent('Este é o conteúdo da minha publicação um');

	$commentsPostUm = array(
		new Comment($userUm, 'Comentario um do usuario um'),
		new Comment($userDois, 'Comentario um do usuario Dois')
	);

	$postUm->setComments($commentsPostUm);

	$postDois = new Postagem();
	$postDois->setTitle('Publicação dois');
	$postDois->setContent('Conteudo da publicação número dois e tals');

	$posts = array($postUm, $postDois);

	foreach($posts as $post){
		echo '<h1>'.$post->getTitle().'</h1>';
		echo '<p>'.$post->getContent().'</p>';
		$comentarios = $post->getComments();

		if($comentarios){
			echo '<ul>';
			foreach($comentarios as $comentario){
				$usuario = $comentario->getUser();
				echo '<li>'.$usuario->getName().' - '.$usuario->getEmail().' disse:<p>'.$comentario->getComment().'</p></li>';
			}
			echo '</ul>';
		}
	}
?>