<?php $this->set('title_for_layout', ": Histoire"); ?>

<?php
	if (eregi("MSIE",getenv("HTTP_USER_AGENT")) ||
	eregi("Internet Explorer",getenv("HTTP_USER_AGENT"))) {
	Header("Location: " . $this->Html->url(array("controller" => "pages","action" => "ieban")));
	exit;
	}
?>

<div class='container'>

	<div class='hero-unit'>
	

	<div class="page-header">
		<h4>Historique des Grands Galas des Arts et Metiers</h4>
	</div>

	<br><br>

	<div class="row-fluid">

		<div class="span4">
			<?php echo $this->Html->image('grandamphi.jpg'); ?>
		</div>

		<div class="span8">
			<p class='lead'>Cela fait bien longtemps que chaque année les élèves-ingénieurs de l'Ecole Nationale Supérieure d'Arts et Métiers d’Aix en Provence organisent 3 bals : le bal du Bapt's, le bal des 508 ainsi que la nuit des 100 jours qui sont des événements majeurs de la région PACA qui rassemblent jusqu'à 6000 personnes: étudiants, anciens élèves, parents d'élèves, industriels, professeurs...</p>
		</div>

	</div>


	<div class="row-fluid">

		<div class="span9">
			<br><br><br><br>
			<p class='lead'><b>Le Bal du Bapt's</b>, vous l'aurez compris est la contraction de Bal du Baptême. Il célèbre le Baptême Gadzarique pour les élèves de la nouvelle promotion. Ce bal est entièrement organisé par la promotion marraine, afin de laisser les conscrits profiter pleinement de leur soirée.</p>
		</div>

		<div class="span3">
			<p class='pull-right'><br><?php echo $this->Html->image('taps_mini.jpg'); ?></p>
		</div>

	</div>

	<br>

	<div class="row-fluid">

		<div class="span4">
			<?php echo $this->Html->image('uniformes.jpg'); ?>
		</div>

		<div class="span8">
			<p class='lead'><b>Le bal des 508</b> est par tradition une soirée déguisée car il accompagne le carnaval d'Aix-en-Provence. Traditionnellement, ce gala a lieu 508 jours avant que les élèves de deuxième année soient diplômés, aussi ce gala est offert par les élèves de première année à leur promotion marraine. Cette soirée symbolise aussi la première étape pour la reprise de l'organisation des soirées Arts & Métiers entre la promotion marraine et la nouvelle.</p>
		</div>

	</div>
	

	<div class="row-fluid">

		<div class="span9">
			<br><br><br><br>
			<p class='lead'><b>La nuit des Cents Jours</b> est le dernier gala organisé dans l'année, c'est aussi le plus abouti, les deux promotions travaillent en collaboration sur les préparatifs (décorations, logistique, programmation, etc.). Ce gala célèbre les 100 jours avant la fin de la scolarité pour les élèves de troisième année, en particulier la remise du diplôme.</p>
		</div>

		<div class="span3">
			<p class='pull-right'><br><?php echo $this->Html->image('lebal.jpg'); ?></p>
		</div>

	</div>

	<br><br><br>
	
	
	<div class="row-fluid">
	<div class="span1"></div>
	<div class="span10">
	<p class='lead'>Soyez assurés que d'année en année, l'organisation de ces galas évolue et chaque promotion y apporte ce qu'elle a de mieux à offrir. En espérant vous faire partager un de nos galas, <br><br>
	<b>Salutations de toute la communauté Gadzarique.</b></p>
</div></div></div>
	<br><br><br><br><br>
	
</div>