<?php $this->set('title_for_layout', ': Artistes');?>

<?php
	if (eregi("MSIE",getenv("HTTP_USER_AGENT")) ||
	eregi("Internet Explorer",getenv("HTTP_USER_AGENT"))) {
	Header("Location: " . $this->Html->url(array("controller" => "pages","action" => "ieban")));
	exit;
	}
?>


<div class='container'>
	<br>
	

	<div class='imgart'> 
		<div class ="corner pull-right">
			<iframe class="soundcloud" allowtransparency="true" scrolling="no" frameborder="no" src="https://w.soundcloud.com/icon/?url=http%3A%2F%2Fsoundcloud.com%2Fkeadz&color=black_white&size=56" style="width: 56px; height: 56px;"></iframe>
			<?php echo $this->Html->link(
					$this->Html->image('fbcube.png', array('class'=>'fbcube')),
					'https://www.facebook.com/pages/KEADZ/250111802677',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
		<?php echo $this->Html->image('keadz.jpg', array('width'=>'100%')); ?>
	</div>
	<div class="hero-unit">

		<br><br><br><br><br><br><br><br>
		<h2>Keadz</h2>
		
		<p>Membre du collectif La Petite Compagnie, Keadz est formé par deux jeunes producteurs Toulousains.<br>
		Après un premier EP, Château Jeanne, qui propose une disco-house très efficace, Keadz revient avec Amulette Magique.<br> Ce nouvel EP à succès distille une musique expérimentale, mélodieuse et envoutante.
		Entre Paris, Toulouse et Bruxelles, ce jeune duo nous rend visite pour la première fois à Aix-en-Provence pour un DJ set, et ça se passe aux Arts et Métiers...</p><br>
		
		<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fusers%2F406297&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=true"></iframe>
	</div>
				

	<br><br><br>
	<div class='imgart'> 
		<div class ="corner pull-right">
			<iframe class="soundcloud" allowtransparency="true" scrolling="no" frameborder="no" src="https://w.soundcloud.com/icon/?url=http%3A%2F%2Fsoundcloud.com%2Fwe-are-celsius&color=black_white&size=56" style="width: 56px; height: 56px;"></iframe>
			<?php echo $this->Html->link(
					$this->Html->image('fbcube.png', array('class'=>'fbcube')),
					'https://www.facebook.com/we.are.celsius',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
		<?php echo $this->Html->image('celsius.jpg', array('width'=>'100%')); ?>

	</div>
	<div class="hero-unit">

		<br><br><br><br><br><br><br><br>
		<h2>Celsius</h2>
		<p>Ce jeune duo électronique, originaire de Marseille, commence à se faire connaitre dans la cité phocéenne grâce à ses sets tecnho house pointus.
		Les deux producteurs marseillais vous attendent, et vous feront danser pour ce Bal des 508.</p><br>
		

		<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fusers%2F7732584&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=true"></iframe>
	</div>	


	<br><br><br>
	<div class='imgart'> 
		<div class ="corner pull-right">
			<iframe class="soundcloud" allowtransparency="true" scrolling="no" frameborder="no" src="https://w.soundcloud.com/icon/?url=http%3A%2F%2Fsoundcloud.com%2Fjuicydunces&color=black_white&size=56" style="width: 56px; height: 56px;"></iframe>
			<?php echo $this->Html->link(
					$this->Html->image('fbcube.png', array('class'=>'fbcube')),
					'https://www.facebook.com/juicydunces',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
		<?php echo $this->Html->image('juicy.jpg', array('width'=>'100%')); ?>

	</div>
	<div class="hero-unit">

		<br><br><br><br><br><br><br><br>
		<h2>Juicy Dunces</h2>
		<p>Le Bal des 508 connait déjà les Juicy Dunces, et c’est à notre plus grand plaisir que nous les accueillons une nouvelle fois parmi nous !
		Compositions percutantes et dynamiques, ils vous embarqueront dans leur univers fait de pop et de rock anglais, aux couleurs de The Walkmen, Hendrix ou encore David Bowie.</p><br>
		

		<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fusers%2F11897899"></iframe>
	</div>


	<br><br><br><br><br>

	

</div>
