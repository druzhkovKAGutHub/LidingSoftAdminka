<table class="table">
  <tr>
    <th>№</th>
    <th>ФИО</th>
    <th>Год рождения</th>
    <th>Год смерти</th>
    <th>Начала срока</th>
    <th>Конец срока</th>
  </tr></th></tr>
  <?php
    require_once ("PresidentsGet.php");
    foreach ($json1 as $item) {
    echo '<tr><td>' . $item['Number'] . '</td>';
    echo '<td>' . $item['Fast'] . '</td>';
    echo '<td>' . $item['DateOfBirth'] . '</td>';
    echo '<td>' . $item['DateOfDeath'] . '</td>';
    echo '<td>' . $item['GovernmentStart'] . '</td>';
    echo '<td>' . $item['GovernmentStop'] . '</td></tr>';
  } ?>
</table>
