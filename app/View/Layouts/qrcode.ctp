<?php echo $this->Html->docType(); ?>

<head>

		<?php
		echo $this->Html->charset();

		echo $this->Html->css(array(
			'cake.generic.css'));

		echo $this->Html->script(array(
			'jquery.js'
			));

		echo $this->Html->meta('icon', 'favicon.ico');

		echo $this->fetch('meta');
	?>


	<title>La Nuit des 100 joürs</title>
</head>




	<header>




		

	</header>



	<?php echo $this->fetch('content'); ?>
		

	<footer>
		
	        <center><br>

	        	<p>La Nuit des 100 joürs - © 2013 <a href="http://aix.ueensam.org/" target="_blank">CE ENSAM Aix-en-Provence</a> - Pour toute question : Kevin au 06 75 64 85 55
	        	
    		<p><?php echo $this->Html->image('am.png'); ?></p>
	        </center>
	    
    </footer>






</body>
</html>

