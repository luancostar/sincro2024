<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>SINCRO - Gestão Empresarial</title>
    <link rel="shortcut icon" href="../assets/img/favicon.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/plugins/icons/feather/feather.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</head>

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">
    <div class="main-wrapper">
        
        <?php
        include('../constants/head-bar.php'); // Barra Cabeçalho 
        ?>
        
        <?php
        include('../constants/side-bar.php'); // Barra Lateral
        ?>

        <div class="page-wrapper">

        <div id="divAlvo" class="content container-fluid">
        <?php
        include('../constants/cards-index.php'); // Cards dados centrais index
        ?>

        <?php
        include('../constants/charts-index.php'); // Charts centrais index
        ?>

        </div>         
       
        </script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/feather.min.js"></script>
    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="../assets/plugins/apexchart/chart-data.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/change-content-event.js"></script>
  </body>

</html>