<div class="container">
    <h1 style="text-align: center;">Cart</h1>
    <div class="row justify-content-center">
        
        <?php
        require_once("./other/items.php");
        require_once("./class/Artikl.php");

        $ukupnaCijena = 0;
    
        
        
        if(isset($_COOKIE["cart"])) {  

            foreach ($cart as $id) {
                foreach ($artikli as $a) {
                    if($id == $a->get_id()) {
                        $ukupnaCijena += $a->get_cijena();
                        echo 
                        "
                        <div class='col-xxl-4 col-xl-4 col-lg-4'>
                        
                            <div id='parent' class='text-center'>
                                <section>
                                    <img class='phones' src='".$a->get_url()."'><br>
                                    <b>Name: </b>" . $a->get_naziv() . " <br>
                                    <b>Price: </b>" . $a->ispis_cijena() . "<br>
                                    <!--<b>Quantity: </b> <span id='pov'>1</span>x<br>
                                    <hr>
                                    <div>
                                        <button class='btn btn-primary' onclick='izbrisiIzKosarice(". $a->get_id().", this)'>Remove</button>
                                    </div>-->
                                </section>
                                
                            </div>  
                        </div>
        
                        ";
                    }

                }
            }
            echo 
            "
            <div class='text-end text-success'>
                Ukupna cijena je: <b>". strval(number_format($ukupnaCijena, 2, ',', '.')). " kn" ."</b>
            </div>
            ";

        } else {
            echo "<div class='row text-center'> <b>No products in cart.</b><div>";
            
        }

        ?>

    </div>


</div>