<h1><?= $judul ?></h1>
<hr>
<table>
  <thead>
    <tr>
      <th>Room</th>
      <th>Type</th>
      <th>Rate</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rooms as $room): ?>
      <tr>
        <td><?= $room['room'] ?></td>
        <td><?= $room['rtype'] ?></td>
        <td><?= $room['rate'] ?></td>
      </tr>
    <?php endforeach; ?>

  </tbody>

</table>
