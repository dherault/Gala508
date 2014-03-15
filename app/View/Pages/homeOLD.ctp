<?php $this->set('title_for_layout', '');?>


<div class="container">
	

	<div class="hero-unit">

		<center>
			<h1><b>Gala Arts et Métiers</b></h1>
			<h2>Samedi 30 mars</h2>
			<div class='logo'><?php echo($this->html->image('logo508.png', array('width'=>250))); ?></div>
		</center>
		<p class="lead" align=justify>Les élèves des Arts et Métiers d'Aix-en-Provence sont heureux de vous convier une nouvelle fois à vivre à leurs côtés une soirée inoubliable! Comme chaque année, vous êtes convié à partir de 22h à vibrer au rythme du son techno, le tout déguisé et dans une ambiance de folie. Magique, tout simplement...<br><br></p>
		<p><center><ul class = 'smooth'>			
			<a class="btn btn-primary btn-large" href="#visite1"><i class="icon-eye-open icon-white"></i> Visite guidée &raquo;</a>
			<a class="btn btn-primary btn-large" href="<?php echo $this->Html->url(array("controller" => "pages","action" => "infos", "#" => "pointsdevente")); ?>"><i class="icon-qrcode icon-white"></i> Préventes &raquo;</a>
		</ul></center></p>

	</div>


	<div class="row">

		<div class="span4">
			<div class="thumbnail">
				<h2>Le Bal</h2>
				<p>Cette année le thème est <br><b>"Duo, Trio et plus si affinités"</b>.<br>Prenez votre temps pour réflechir à votre costume.<br>En attendant pourquoi-pas découvrir votre soirée en détails ?</p>
				<p><a class="btn" href="<?php echo $this->Html->url(array("controller" => "pages","action" => "infos")); ?>" >Toutes les infos &raquo;</a></p>
			</div>
		</div>

		<div class="span4">
			<div class="thumbnail">
				<h2>Groupes et DJ</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn" href="<?php echo $this->Html->url(array("controller" => "pages","action" => "artistes")); ?>">Voir les artistes &raquo;</a></p>
			</div>
		</div>

		<div class="span4">
			<div class="thumbnail">
				<h2>Salles et Ambiances</h2>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p><a class="btn" href="<?php echo $this->Html->url(array("controller" => "pages","action" => "salles")); ?>">Se plonger dans l'ambiance &raquo;</a></p>
			</div>
		</div>

	</div>



	<?php for ($i = 1; $i <= 30; $i++) {
		echo '<br>';
	} ?>




	<section id="visite1">

		<br><br>

		<div class="hero-unit">

			<h2>Un lieu unique</h2>
			<br><br>
			<p class="lead">Loin des bars trop chics ou trop sombres d'Aix, venez découvrir ou re-découvrir l'école des Arts et Métiers.<br>A 2 minutes du centre ville, en salle ou en plein air, dans la foule ou dans un coin tranquille, ouvrez grands vos yeux pour ne pas en manquer une miette... </p>
			<br>

			<center>
				<div id="carousel1" class="carousel slide" >
					<div class="carousel-inner" >
						<div class="item active">
							<?php echo $this->Html->image('GrandAmphiLights.jpg'); ?>
						</div>
						<!-- <div class="item">
							<?php echo $this->Html->image('Pignon.jpg'); ?>
						</div> -->
						<div class="item">
							<?php echo $this->Html->image('need.png'); ?>
						</div>
					</div>
					<a class="left carousel-control" href="#carousel1" data-slide="prev">&lsaquo;</a>
					<a class="right carousel-control" href="#carousel1" data-slide="next">&rsaquo;</a>
				</div><!-- /.carousel -->
				<br>
						
				<ul class="smooth">		
					<a class="btn btn-primary btn-large" href="#visite2"><i class="icon-eye-open icon-white"></i> Continuer la visite guidée &raquo;</a>
				</ul>
			</center>



		</div>

	</section>


	<?php for ($i = 1; $i <= 45; $i++) {
		echo '<br>';
	} ?>


	<section id="visite2">

		<br><br>
		<div class="hero-unit">
			<h2>A deux, à trois... <small>et plus si affinités</small></h2>
			<br><br>
			<p class="lead">Cette année tous les déguisements sont permis, mais venez avec vos amis en arborant le même costume !</p>
			<br>
			<center>
			<div id="carousel2" class="carousel slide">
				<div class="carousel-inner">
					<div class="item active">
						<?php echo $this->Html->image('theme1.jpg'); ?>
					</div>
					<div class="item">
						<?php echo $this->Html->image('theme2.jpg'); ?>
					</div>
					<div class="item">
						<?php echo $this->Html->image('theme3.jpg'); ?>
					</div>
					<div class="item">
						<?php echo $this->Html->image('need2.png'); ?>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel2" data-slide="prev">&lsaquo;</a>
				<a class="right carousel-control" href="#carousel2" data-slide="next">&rsaquo;</a>
			</div><!-- /.carousel -->

			

			<p>			
				<ul class="smooth">		
				<a class="btn btn-primary btn-large" href="#visite3"><i class="icon-eye-open icon-white"></i> Continuer la visite guidée &raquo;</a>
				</ul>
			</center></p>

		</div>

	</section>


	<?php for ($i = 1; $i <= 45; $i++) {
		echo '<br>';
	} ?>


	<section id="visite3">

		<br><br>
		<div class="hero-unit">
			<h2>Des artistes, <small>du son et des lumières</small></h2>
			<br><br>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<br>
			<p><center>			
				<ul class="smooth">		
				<a class="btn btn-primary btn-large" href="#visite4"><i class="icon-eye-open icon-white"></i> Continuer la visite guidée &raquo;</a>
				</ul>
			</center></p>
		</div>

	</section>


	<?php for ($i = 1; $i <= 45; $i++) {
		echo '<br>';
	} ?>


	<section id="visite4">

		<br><br>
		<div class="hero-unit">
			<h2>Pret pour tenter l'aventure?</h2>
			<br><br>
			<p class='lead'>On vous attend de pied ferme le 30 mars pour une soirée inoubliable.</p>
			<br>
			<center>
			<?php echo $this->Html->image('parc.jpg', array('alt' => 'Le Parc', 'url' => 'http://www.parcrugby.com', 'width' => '180')); ?>
				<?php echo $this->Html->image('erdf.jpg', array('alt' => 'ERDF', 'url' => 'http://www.erdfdistribution.fr', 'width' => '180')); ?>
				<?php echo $this->Html->image('feter.jpg', array('alt' => 'Feter et Recevoir', 'url' => 'http://www.feter-recevoir.com/', 'width' => '180')); ?>
				<?php echo $this->Html->image('zigot.jpg', array('alt' => 'Les Zigots d\'Aix', 'url' => 'http://www.leszigotaix.fr/', 'width' => '180')); ?>
				<?php echo $this->Html->image('manix.jpg', array('alt' => 'Manix', 'url' => 'http://www.manix.fr/', 'width' => '180')); ?>
			</center>
			<br><br><br>
			<p><center>
				<a class="btn btn-primary btn-large" href="<?php echo $this->Html->url(array("controller" => "pages","action" => "infos")); ?>"><i class="icon-road icon-white"></i> Horaires et Plan d'accès &raquo;</a>
				<a class="btn btn-primary btn-large" href="<?php echo $this->Html->url(array("controller" => "pages","action" => "infos", "#" => "pointsdevente")); ?>"><i class="icon-qrcode icon-white"></i> Tarifs et Préventes &raquo;</a>
				<a class="btn btn-primary btn-large" href=""><i class="icon-user icon-white"></i> Trouver un super costume &raquo;</a>
			</center></p>
			<br><br>
		</div>

	</section>


	<br>

	<?php echo $this->element('hautdepage'); ?>

	<br>


</div>










<!-- Les smooth transitions -->
<script type="text/javascript">
	
	$('.carousel').carousel({
  		interval: 5000
	})
	$('.carousel').carousel('cycle')

</script>
