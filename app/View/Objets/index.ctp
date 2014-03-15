<!-- File: /app/View/Objets/index.ctp -->

<h1>Blog objets</h1>
<p><?php echo $this->Html->link('Add Objet', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Maxi</th>
        <th>Frequence par jour</th>
        <th></th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $objets array, printing out objet info -->

    <?php foreach ($objets as $objet): ?>
    <tr>
        <td><?php echo $objet['Objet']['id']; ?></td>
        <td><?php echo $objet['Objet']['nom']; ?></td>
        <td><?php echo $objet['Objet']['maxi']; ?></td>
        <td><?php echo $objet['Objet']['frequence']; ?></td>
        <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $objet['Objet']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $objet['Objet']['id'])); ?>
        </td>
        <td>
            <?php echo $objet['Objet']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>