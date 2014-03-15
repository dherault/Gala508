<div class="container">
	<div class="hero-unit">
		
		<?php if ($gagne == true) {?>
			<h2>Gagné !</h2>
			<p>Tu as gagné :</p>
			<p class="lead"><?php echo($objet); ?></p>
			<p>Entre ton nom et ton prénom pour pouvoir réclamer ton prix. Tu pourras l'obtenir à l'entrée du Gala auprès des Gadz'Arts en uniforme.</p>
			<?php
				echo $this->Form->create('Qrcode', array('controller' => 'qrcodes', 'action' => 'add'));
				echo $this->Form->input('prenom');
				echo $this->Form->input('nom');
				echo $this->Form->input('objet',array('default'=>$objet, 'type' => 'hidden'));
				echo $this->Form->end('Reclamer mon lot');
			?>
		<?php } else { ?>
			<h2>Perdu...</h2><br>
			<p>Retente ta chance avec un autre flyer !</p>
		<?php } ?>
	</div>
</div>

<br><br>