<?php
session_start();

require_once("./other/visit_counter.php");
require_once("./other/items.php");
addBrojacPosjeta();

?>

<html>

    <head>
        <title>Tech Webshop</title>
        <link rel="stylesheet" href="./css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    
    <body>
        <header> <?php require_once("./pages/header.php") ?> </header>    

        <main>
            <?php 
            require_once("./other/page.php"); 
            require_once("./class/Artikl.php");
            //print_r($arrWithoutHome);
            ?>
        </main>

        <footer> <?php require_once("./pages/footer.php") ?> </footer>
        <script src="./script/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>


</html>