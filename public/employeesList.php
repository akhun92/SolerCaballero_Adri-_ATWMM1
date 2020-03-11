<?php
require_once(__DIR__.'/../lib/controller/employeesController.php');

$employeesController = new employeesController();
$employeeslist = $employeesController->indexAction();
?>

<h1>Agenda Empleats</h1>

<?php foreach($employeeslist as $employee){ ?>
    <ul>
      <li style="list-style-type:none"><img src="<?=$employee->getPhoto();?>"></td>
      <li><?=$employee->getName();?></td>
      <li><?=$employee->getDate();?></td>
      <li><?=$employee->getPosition();?></td>
      <li><?=$employee->getSalary();?></td>
      <li style="list-style-type:none"><video controls>
        <source src="<?=$employee->getCv();?>" type="video/mp4">
      </video></td>
    </ul>
<?php } ?>

