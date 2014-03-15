<?php echo $this->Html->docType(); ?>

<head>

		<?php
		echo $this->Html->charset();

		echo $this->Html->css(array(
			'bootstrap.css'));

		echo $this->Html->script(array(
			'jquery.js',
			'bootstrap.min.js',
			'typeface-0.15.js',
			'optimusprinceps_regular.typeface.js'
			));

		echo $this->Html->meta('icon', 'favicon.ico');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>


	<title>Bal des 508 <?php echo($title_for_layout) ?></title>
</head>




<?php echo('<body  class="typeface-js" id="top" style="background-image:url(\'' . $this->Html->url('/app/webroot/img/fondlu.jpg', true) . '\');" >') ?>

	<header>



		<div class="navbar navbar-fixed-top" >
			<div class="navbar-inner" >
				<div class="joujounav">
					<ul class="nav">
						<li><a class="brand" href="<?php echo $this->Html->url(array("controller" => "pages","action" => "home")); ?>"><?php echo $this->Html->image("logo.png", array('alt' => 'Bal des 508', 'width' => 180)); ?></a></li>
						<li><a href="<?php echo $this->Html->url(array("controller" => "pages","action" => "infos")); ?>"><i class="icon-glass icon-white"></i> Infos pratiques</a></li>
						<li><a href="<?php echo $this->Html->url(array("controller" => "pages","action" => "artistes")); ?>"><i class="icon-music icon-white"></i> Artistes</a></li>
<!-- 						<li><a href="<?php echo $this->Html->url(array("controller" => "pages","action" => "salles")); ?>"><i class="icon-fire icon-white"></i> Ambiances</a></li> -->
						<li><a href="<?php echo $this->Html->url(array("controller" => "pages","action" => "histoire")); ?>"><i class="icon-book icon-white"></i> Histoire des Galas</a></li>
						
					</ul>
				</div>
				<ul class="nav pull-right">
					<li class="facebook ">
					<?php echo $this->Html->link(
						$this->Html->image('minifacebook.png', array('alt' => 'Page Facebook', 'width' => '41')),
						'https://www.facebook.com/events/162591527226661/',
						array('target' => '_blank', 'escape' => false)
						);
					?></li>
					<li><a href="#sponsors" data-toggle="modal"><i class="icon-star icon-white"></i> Partenaires</a></li>
					<li><a href="#contact" data-toggle="modal"><i class="icon-globe icon-white"></i> Contact / Infoline</a></li>
				</ul>
			</div>
		</div>

		

	</header>



	<?php echo $this->fetch('content'); ?>
		

	<footer>
		
	        <center><br>

	        	<p>Bal des 508 - © 2013 <a href="http://aix.ueensam.org/" target="_blank">CE ENSAM Aix-en-Provence</a> - 
	        		<a class="joujoupop" data-toggle="popover" data-placement="top" data-content="Developpé avec amour par David Hérault dit (Joü)² 111" data-trigger="hover"}>Réalisation</a></p>
	        	
    		<p><?php echo $this->Html->image('am.png'); ?></p>
	        </center>
	    
    </footer>





    <!-- Contacts en modal -->
	<div id="contact" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
			<h1 id="myModalLabel">Contact</h1>
		</div>

		<div class="modal-body">

			<div class='row-fluid'>

				<li class="span8">
					<address>
						<strong>Association des Elèves-ingénieurs de l`ENSAM</strong><br>
						2 cours des Arts et Métiers<br>
						13628 Aix en Provence<br>
						France<br>
						<a href="mailto:aeensam.ai@gadz.org">aeensam.ai@gadz.org</a>
					</address>
					
				</li>

				<li class="span4">
					<?php echo $this->Html->image('cercle.png', array('alt' => 'Le Cercle' ,  'width' => 150)); ?>
				</li>

			</div>

			<p class="lead">Pour toute demande :</p>

			<address>
				<strong>Kevin Revel</strong><br>
				Directeur de communication<br>
				chargé des préventes<br>
				<a href="mailto:kevin.revel@ensam.eu">kevin.revel@ensam.eu</a><br>
				<strong>Tél: 06 75 64 85 55</strong>
			</address>

			<address>
				<strong>Quentin Salek</strong><br>
				Président des Galas<br>
				<a href="mailto:quentin.salek@ensam.eu">quentin.salek@ensam.eu</a><br>
			</address>

			<address>
				<strong>Clément Buisson</strong><br>
				Président du Cercle des Elèves<br>
				<a href="mailto:clement.buisson@ensam.eu">clement.buisson@ensam.eu</a><br>
			</address>

		</div>

		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
		</div>

	</div>

    <!-- Sponsors en modal -->
	<div id="sponsors" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			
			<h1 id="myModalLabel">Partenaires</h1>
		</div>
		<div class="modal-body">
			<p><center>
				<?php $t=160; ?>
				<?php echo $this->Html->link(
					$this->Html->image('zigotaix.png', array('alt' => 'Les Zigots d\'Aix', 'width' => $t+20)),
					'http://www.leszigotaix.fr/',
					array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
					$this->Html->image('bnp_paribas.png', array('alt' => 'BNP', 'width' => $t+20)),
					'http://www.bnpparibas.net/',
					array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
					$this->Html->image('erdf.png', array('alt' => 'ERDF', 'width' => $t)),
					'http://www.erdfdistribution.fr/',
					array('target' => '_blank', 'escape' => false)
					);
				?><br><br><br>
				<?php echo $this->Html->link(
					$this->Html->image('parc.png', array('alt' => 'Le Parc', 'width' => $t-30)),
					'http://www.parcrugby.com',
					array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
					$this->Html->image('americanapparel.png', array('alt' => 'American Apparel', 'width' => $t+50)),
					'http://www.americanapparel.net/',
					array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
					$this->Html->image('virgin.png', array('alt' => 'Virgin Radio', 'width' => $t-30)),
					'http://www.virginradio.fr/',
					array('target' => '_blank', 'escape' => false)
					);
				?><br><br><br>
				<?php echo $this->Html->link(
					$this->Html->image('fnac.png', array('alt' => 'La Fnac', 'width' => $t-100)),
					'http://www.fnac.com/',
					array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
					$this->Html->image('ticketnet.png', array('alt' => 'TicketNet', 'width' => $t-80)),
					'http://www.ticketnet.fr/',
					array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
					$this->Html->image('francebillet.jpg', array('alt' => 'France Billet', 'width' => $t-80)),
					'http://www.francebillet.com/',
					array('target' => '_blank', 'escape' => false)
					);
				?>

			</center></p>

		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
		</div>
	</div>

	<script type="text/javascript">
		$('.joujoupop').popover({'triger':'hover'})


	</script>

</body>
</html>

