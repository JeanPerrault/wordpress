<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title><?= bloginfo('name') ?></title> -->

    
    <?php 
    // ajoute les tags de l'entête
    wp_head() 
    ?>

</head>
<body>
    
    <header id="main-header">
        HEADER
        <br>
        <?php wp_nav_menu(["menu" => "main-menu"]) ?>
    </header>

    <div class="row">
        <div class="col-9">

            <main id="main-content">