<h1>Edit Qrcode</h1>
<?php
	echo $this->Form->create('Qrcode');
	echo $this->Form->input('prenom');
	echo $this->Form->input('nom');
	echo $this->Form->input('objet');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Qrcode');
    ?>