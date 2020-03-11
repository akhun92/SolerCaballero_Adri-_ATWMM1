<?php
require_once(__DIR__.'/../lib/controller/employeesController.php');

$employeesController = new employeesController();
$employeeslist = $employeesController->indexAction();
?>
<head>
    <title>LlistaEmpleats</title>
    <link rel="stylesheet" type="text/css" href="employeesList.css">
</head>

<div class="container">
    <div class="title">
        <h1>Agenda Empleats</h1>
    </div>
    <div class="containerList">
        <?php foreach($employeeslist as $employee){ ?>
            <ul>
                <li style="list-style-type:none"><img src="<?=$employee->getPhoto();?>"></li>
                <li><?=$employee->getName();?></li>
                <li><?=$employee->getDate();?></li>
                <li><?=$employee->getPosition();?></li>
                <li><?=$employee->getSalary();?></li>
                <li style="list-style-type:none; display: block-inline">
                    <video controls poster="../assets/photo/cv.jpg">
                    <source src="<?=$employee->getCv();?>" type="video/mp4">
                    </video>
                </li>
            </ul>
        <?php } ?>
    </div>
</div>

