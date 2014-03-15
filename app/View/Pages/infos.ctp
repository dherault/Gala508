<?php $this->set('title_for_layout', ': Infos');?>

<?php
	if (eregi("MSIE",getenv("HTTP_USER_AGENT")) ||
	eregi("Internet Explorer",getenv("HTTP_USER_AGENT"))) {
	Header("Location: " . $this->Html->url(array("controller" => "pages","action" => "ieban")));
	exit;
	}
?>

<div class="container">


	
	<br>
	<?php echo $this->element('menuinfos'); ?>


	<section id="votresoiree">

		<br><br>
		<div class="hero-unit">

			<h2>Un contexte unique...</h2>
			<br>
			<p class="lead">... pour une soirée unique</p>
			<br>
			<p>
				<b>Comme chaque année, l'Ecole des Arts et Métiers d'Aix-en-Provence est fière de vous présenter son Bal des 508.</b>
				<br><br>
				À cette occasion l'École sera spécialement transformée par les étudiants (La sonorisation, les décorations et éclairages sont conçus et mis en place par les élèves dans un souci de professionnalisme).
				<br>
				Cette année, <b>le thème "Duo, Trio et plus si Affinités..."</b> vous entrainera tout au long de la nuit, dans une ambiance festive et suggestive, riches en déguisements et en surprises.
				<br>
				Ne réfléchissez plus : réservez votre 30 au soir et cherchez les plus beaux déguisements possible !!<br><br>
				<b>Tenue de soirée :</b> soirée déguisée, prévoyez des déguisements de groupe pour être en parfait accord avec le thème.<br><br>
				<b>De 22h à 4h.</b><br>
				Carte d'identité obligatoire.<br> 
				L'organisation se réserve le droit d'entrée. <br>

		</div>

	</section>



	<section id="pointsdevente">
		<br><br>

		<div class="hero-unit">

			<h2>Tarifs et points de vente</h2><br><br>

			<div class="row">

				<div class="span6">
					<h5>Preventes :</h5>
					<p class="lead">
						<ul class="lead">
							<li><b>10€</b> à la résidence</li>
							<li><b>11€</b> dans les autres points de ventes</li>
							<li><b>12€</b> Sur internet (100% sécurisé) : </li>
						</ul>
						<a class="btn btn-primary btn-large preventes" a href="http://www.fnacspectacles.com/place-spectacle/manifestation/Galas-Soirees-etudiantes-GALA-DES-ARTS-ET-METIERS-BAL30.htm" target="_blank"><i class="icon-qrcode icon-white" ></i> Fnac &raquo;</a>
						<a class="btn btn-primary btn-large" a href="http://www.ticketnet.fr/manifestation/bal-des-508-billet/idmanif/281495" target="_blank"><i class="icon-qrcode icon-white"></i> Ticketnet &raquo;</a>
					</p>
				</div>

				<div class="span6">
					<h5>Tarif normal : </h5> 
					<p class="lead">
						<ul class="lead">
							<li><b>15€</b> euros sur place. </li>
						</ul>

				</div>

			</div>
			<br>
			<h5>Lieux de vente:</h5>
			<p class="lead">
				<ul class="lead smooth">
					<li>La résidence des Arts et Métiers : <a href="#plan">Plan</a></li>
					<li>Réseau FranceBillet : Fnac - Géant - Carrefour</li>
					<li>Réseau Ticketnet : Virgin - Auchan - Cultura - E.Leclerc - Virgin Megastore</li>
					<li>Plusieurs points de ventes dans les Facs</li>
				</ul>
			</p>
			<p class="lead">
				Nombre de préventes limité.<br>
				Paiement par carte bancaire ou espèces<br>
			</p>


		</div>

	</section >

	


	<section id="plan">
		<br><br>
		<div class="hero-unit">
			<h2>Plan d'acces</h2>
			
			<center><iframe class='googlemap' width="1000" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps/ms?msa=0&amp;msid=207018085273912542770.0004d53d0be822e640fc5&amp;hl=fr&amp;ie=UTF8&amp;t=m&amp;ll=43.530956,5.451515&amp;spn=0.008556,0.021436&amp;z=16&amp;iwloc=0004d53d0eeab05310151&amp;output=embed"></iframe></center>
		</div>
	</section>


	<br>




	<?php echo $this->element('menuinfos'); ?>
	<br><br>


</div>














 <!-- Kevin en modal -->
	<div id="kevin" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h1 id="myModalLabel">Coucou Kevin</h1>
		</div>
		<div class="modal-body">
			<p class="lead">Tu me file les liens stp ? :) <br> dherault@gmail.com<br>Merci !!!</p>

		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
		</div>
	</div>


