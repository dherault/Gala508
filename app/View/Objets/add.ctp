<!-- File: /app/View/Objets/add.ctp -->

<h1>Add Objet</h1>
<?php
echo $this->Form->create('Objet');
echo $this->Form->input('nom');
echo $this->Form->input('maxi');
echo $this->Form->input('frequence');
echo $this->Form->end('Save Objet');
?>
