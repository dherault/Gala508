<?php $this->set('title_for_layout', '');?>
<?php
	if (eregi("MSIE",getenv("HTTP_USER_AGENT")) ||
	eregi("Internet Explorer",getenv("HTTP_USER_AGENT"))) {
	Header("Location: " . $this->Html->url(array("controller" => "pages","action" => "ieban")));
	exit;
	}
?>


<br><br>
<div class="container">
	

	<div class="hero-unit">

		<center>
			
			<h1>GALA ARTS & METIERS</h1>
			
			<h2>Samedi 30 mars</h2>
			
		</center>
		<br>
		<p class="lead" align=justify>Les élèves des Arts et Métiers d'Aix-en-Provence sont heureux de vous convier une nouvelle fois à vivre à leurs côtés une soirée inoubliable! Comme chaque année, vous êtes convié à partir de 22h à vibrer au rythme du son techno, le tout déguisé et dans une ambiance de folie. Magique, tout simplement...<br><br></p>
		<p><center>			
			
			<a class="btn btn-primary btn-large" href="<?php echo $this->Html->url(array("controller" => "pages","action" => "infos", "#" => "votresoiree")); ?>"><i class="icon-eye-open icon-white"></i> Votre soirée &raquo;</a>
			<a class="btn btn-primary btn-large" href="<?php echo $this->Html->url(array("controller" => "pages","action" => "infos", "#" => "pointsdevente")); ?>"><i class="icon-qrcode icon-white"></i> Préventes &raquo;</a>
			
		</center></p>

	</div>

	<div class="thumbnail">
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

<br>
<br>
<br>
<br>
<br><br><br><br><br><br>
</div>

<script type="text/javascript">
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
</script>
