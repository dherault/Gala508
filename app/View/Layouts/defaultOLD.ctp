
<?php echo $this->Html->docType(); ?>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">




<head>

		<?php
		echo $this->Html->charset();

		echo $this->Html->css(array(
			'bootstrap.css'));

		echo $this->Html->script(array(
			'jquery.js',
			'bootstrap.min.js',
			'jquery.easing.1.3.js'));

		echo $this->Html->meta('icon', 'favicon.ico');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>


	<title>Bal des 508 <?php echo($title_for_layout) ?></title>
</head>




<?php echo('<body   id="top" style="background-image:url(\'' . $this->Html->url('/app/webroot/img/background.png', true) . '\');" >') ?>

	<header>

		<div class="navbar navbar-fixed-top navbar-inverse" >
			<div class="navbar-inner" >
				<div class="container">
					<a class="brand" href="<?php echo $this->Html->url(array("controller" => "pages","action" => "home")); ?>"><?php echo $this->Html->image("baldes508captionmini.png", array('alt' => 'Bal des 508', 'width' => 180)); ?></a>
					<ul class="nav">

						<li><a href="<?php echo $this->Html->url(array("controller" => "pages","action" => "infos")); ?>"><i class="icon-glass icon-white"></i> Infos pratiques</a></li>
						<li><a href="<?php echo $this->Html->url(array("controller" => "pages","action" => "artistes")); ?>"><i class="icon-music icon-white"></i> Artistes</a></li>
						<li><a href="<?php echo $this->Html->url(array("controller" => "pages","action" => "salles")); ?>"><i class="icon-fire icon-white"></i> Ambiances</a></li>
						<li><a href="<?php echo $this->Html->url(array("controller" => "pages","action" => "histoire")); ?>"><i class="icon-book icon-white"></i> Histoire des Galas</a></li>
						
					</ul>
					<ul class="nav pull-right">
						<li class="facebook"><?php echo $this->Html->image('minifacebook.png', array('alt' => 'Page Facebook', 'url' => 'https://www.facebook.com/events/162591527226661/', 'width' => '41')); ?></li>
						<li><a href="#sponsors" data-toggle="modal"><i class="icon-star icon-white"></i> Partenaires</a></li>
						<li><a href="#contact" data-toggle="modal"><i class="icon-globe icon-white"></i> Contact / Infoline</a></li>
					</ul>
				</div>
			</div>
		</div>

		

	</header>


	<?php echo $this->fetch('content'); ?>
		

	<footer>
		
	        <center><br>

	        	<p>Bal des 508 - © 2013 <a href="http://aix.ueensam.org/" target="_blank">CE ENSAM Aix-en-Provence</a> - 
	        		<a class="joujoupop" data-toggle="popover" data-placement="top" data-content="Developpé avec amour par David Hérault dit (Joü)² 111" title="Webdesign :" data-trigger="hover"}>Réalisation</a></p>
	        	
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

			<p class="lead">Pour toute correspondance :</p>

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
				Tél: 06 75 64 85 55
			</address>

			<address>
				<strong>Quentin Salek</strong><br>
				Président des Galas<br>
				<a href="mailto:quentin.salek@ensam.eu">quentin.salek@ensam.eu</a><br>
				Tél: 06 28 57 82 75
			</address>

			<address>
				<strong>Clément Buisson</strong><br>
				Président du Cercle des Elèves<br>
				<a href="mailto:clement.buisson@ensam.eu">clement.buisson@ensam.eu</a><br>
				Tél: 06 64 48 85 07
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
			<p>
				<a href='http://www.parcrugby.com' target='_blank'><?php echo $this->Html->image('parc.jpg', array('alt' => 'Le Parc', 'width' => '170')); ?></a>
				<?php echo $this->Html->image('erdf.jpg', array('alt' => 'ERDF', 'url' => 'http://www.erdfdistribution.fr', 'width' => '170')); ?>
				<?php echo $this->Html->image('feter.jpg', array('alt' => 'Feter et Recevoir', 'url' => 'http://www.feter-recevoir.com/', 'width' => '170')); ?>
				<br>
				<?php echo $this->Html->image('zigot.jpg', array('alt' => 'Les Zigots d\'Aix', 'url' => 'http://www.leszigotaix.fr/', 'width' => '170')); ?>
				<?php echo $this->Html->image('manix.jpg', array('alt' => 'Manix', 'url' => 'http://www.manix.fr/', 'width' => '170')); ?>

			</p>

		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
		</div>
	</div>

	<script type="text/javascript">
		$('.joujoupop').popover({'triger':'hover'})


		$(function() {
			$('ul.smooth a').bind('click',function(event){
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 
				1700,'easeInOutExpo');
			event.preventDefault();
			});
		});
	</script>

</body>
</html>

