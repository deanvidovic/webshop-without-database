<?php require_once("./other/items.php"); ?>

<div class="container text-center">
    <h1>Webshop</h1>
    <div class="row">
        <?php 
        require_once("./class/Artikl.php");
        foreach($artikli as $artikl) {

            if(!isset($_SESSION["username"]) || $_SESSION["username"] != "admin") {
                echo 
                '
                <div class="col">
                    <section>
                        <div class="article-holder">
                            <img src="'. $artikl->get_url() .'"><br>
                            <span><b>NAZIV</b>: '. $artikl->get_naziv() .'</span> <br>
                            <span><b>CIJENA</b>: '. $artikl->ispis_cijena() .'</span> <br><br>
                        </div>
                    </section>
                </div>
                
                ';
            } else {
                echo 
                '
                <div class="col">
                    <section>
                        <div class="article-holder">
                            <img src="'. $artikl->get_url() .'"><br>
                            <span><b>NAZIV</b>: '. $artikl->get_naziv() .'</span> <br>
                            <span><b>CIJENA</b>: '. $artikl->ispis_cijena() .'</span> <br><br>
                            <button class="btn btn-primary" onclick="dodajUKosaricu('. $artikl->get_id().')">Dodaj u kosaricu</button>
                        </div>
                    </section>
                </div>
                
                ';
            }

        }
        
        ?>
        
    </div>
</div>

