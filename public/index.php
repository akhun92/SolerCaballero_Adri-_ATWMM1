<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleats</title>
    <link rel="stylesheet" type="text/css" href="employeesTable.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <?php setlocale(LC_ALL, "es_ES");?>
</head>

<body>
    <h1 class="titleIndex">Agenda Empleats</h1>
    <div class="container">
        <nav>
            <?php include "navbar.php" ?>
        </nav>
        <table><?php include "EmployeesTable.php" ?></table>
    </div>
</body>
</html>