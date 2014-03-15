<!-- File: /app/View/Qrcodes/add.ctp -->

<h1>Add Qrcode</h1>
<?php
echo $this->Form->create('Qrcode');
echo $this->Form->input('prenom');
echo $this->Form->input('nom');
echo $this->Form->input('objet');
echo $this->Form->end('Save Qrcode');
?>
