<!-- File: /app/View/Qrcodes/index.ctp -->

<h1>Blog qrcodes</h1>
<p><?php echo $this->Html->link('Add Qrcode', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Objet gagné</th>
        <th>Date</th>
    </tr>

<!-- Here's where we loop through our $qrcodes array, printing out qrcode info -->

    <?php foreach ($qrcodes as $qrcode): ?>
    <tr>
        <td><?php echo $qrcode['Qrcode']['id']; ?></td>
        <td><?php echo $qrcode['Qrcode']['nom']; ?></td>
        <td><?php echo $qrcode['Qrcode']['prenom']; ?></td>
        <td><?php echo $qrcode['Qrcode']['objet']; ?></td>
        <td>
            <?php echo $qrcode['Qrcode']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>