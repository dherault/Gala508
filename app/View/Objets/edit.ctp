<h1>Edit Objet</h1>
<?php
	echo $this->Form->create('Objet');
	echo $this->Form->input('nom');
	echo $this->Form->input('maxi');
	echo $this->Form->input('frequence');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Objet');
    ?>