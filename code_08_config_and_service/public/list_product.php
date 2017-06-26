<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
    </tr>
     <?php foreach ($list as $products): ?>
    <tr>
        <td><?= $products['id'] ?></td>
        <td><?= $products['name'] ?></td>
        <td><?= $products['desc'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>