<?php
require_once(__DIR__.'/../lib/controller/employeesController.php');

$employeesController = new employeesController();
$employeeslist = $employeesController->indexAction();
?>
<table>
  <tr>
    <th>Nom y Cognoms</th>
    <th>Data de naixement</th>
    <th>Posició actual</th>
    <th>Foto</th>
    <th>Sou</th>
    <th>Videocurrículum</th>
  </tr>

<?php foreach($employeeslist as $employee){ ?>
  <tr>
    <td><?=$employee->getName();?></td>
    <td><?=$employee->getDate();?></td>
    <td><?=$employee->getPosition();?></td>
    <td><img src="<?=$employee->getPhoto();?>"></td>
    <td><?=$employee->getSalary();?></td>
    <td><video controls poster="../assets/photo/cv.jpg">
      <source src="<?=$employee->getCv();?>" type="video/mp4">
    </video></td>
  </tr><?php } ?>
</table>

