<?php

    include('_config.php');

    // Cofiguração da Página
    $page = new stdClass();
    $page->title = 'Home';
    $page->desc = 'Descrição';

    // Adiciona o nome do site ao Título
    $page->title = $page->title.' | '.$site->name;

?>
<!doctype html>

<!--[if lt IE 7]>
    <html class='no-js lt-ie9 lt-ie8 lt-ie7'>
<![endif]-->
<!--[if IE 7]>
    <html class='no-js lt-ie9 lt-ie8'>
<![endif]-->
<!--[if IE 8]>
    <html class='no-js lt-ie9'>
<![endif]-->
<!--[if gt IE 8]>
    <!--> <html class='no-js pt'>
<!--<![endif]-->

<head>

    <!-- Header -->
    <?php include('_head.php') ?>

</head>

    <body>

    <!-- Page Content -->


    <!-- Scripts Footer -->
    <?php include('_footer.php') ?>

    <!-- Footer -->
    <?php include('_script_footer.php') ?>

    </body>
</html>
