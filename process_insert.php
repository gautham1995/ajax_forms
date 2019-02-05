<?php

$name = $_GET['c_name'];
$team = $_GET['team'];
$runs = $_GET['runs'];
$wiki = $_GET['wiki'];

echo '
<h3 class="text-center">Result:</h3>
<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Team</th>
        <th>Runs</th>
        <th>Wiki</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td>'.$name.'</td>
        <td>'.$team.'</td>
        <td>'.$runs.'</td>
        <td>'.$wiki.'</td>
      </tr>
    </tbody>
  </table>

';

?>