<?php require_once("./other/brojac_posjeta.php") ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center align-items-center">
            <div class="footer-content">
                Site for technology &nbsp | &nbsp &copy Dean Vidovic &nbsp | &nbsp Broj posjeta: <?php echo floatval(getBrojacPosjeta()) ?>
            </div>
        </div>
    </div>
</div>