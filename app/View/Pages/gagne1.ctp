<div class="container">
	<div class="hero-unit">

		<h2>Gagne !</h2><br>
		<center>
		<p class="lead"><b>Félicitations, tu as gagné une bière bien fraiche !</b> <br>Présente ce flyer à l'entrée du Bal pour obtenir ton lot.</p>
		<?php echo $this->Html->link('La soirée en détails', array('controller' => 'pages', 'action' => 'home')); ?><br><br><br>
	</center>
		<div class="sponsors">
			<center>
				<?php $tt=120; ?>
				<?php echo $this->Html->link(
					$this->Html->image('zigotaix.png', array('alt' => 'Les Zigots d\'Aix', 'width' => $tt+20)),
					'http://www.leszigotaix.fr/',
					array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
					$this->Html->image('bnp_paribas.png', array('alt' => 'BNP', 'width' => $tt+20)),
					'http://www.bnpparibas.net/',
					array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
					$this->Html->image('erdf.png', array('alt' => 'ERDF', 'width' => $tt)),
					'http://www.erdfdistribution.fr/',
					array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
					$this->Html->image('parc.png', array('alt' => 'Le Parc', 'width' => $tt-30)),
					'http://www.parcrugby.com',
					array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
					$this->Html->image('virgin.png', array('alt' => 'Virgin Radio', 'width' => $tt-30)),
					'http://www.virginradio.fr/',
					array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
					$this->Html->image('americanapparel.png', array('alt' => 'American Apparel', 'width' => $tt+50)),
					'http://www.americanapparel.net/',
					array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
					$this->Html->image('fnac.png', array('alt' => 'La Fnac', 'width' => $tt-70)),
					'http://www.fnac.com/',
					array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
					$this->Html->image('ticketnet.png', array('alt' => 'TicketNet', 'width' => $tt-50)),
					'http://www.ticketnet.fr/',
					array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
					$this->Html->image('francebillet.jpg', array('alt' => 'France Billet', 'width' => $tt-50)),
					'http://www.francebillet.com/',
					array('target' => '_blank', 'escape' => false)
					);
				?>
			</center>
		</div>
	</div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	