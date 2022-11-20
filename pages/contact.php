<?php 

if($_GET['page'] == "contact") {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = filter_var($_POST["ime"], FILTER_UNSAFE_RAW );
    $prezime = filter_var($_POST["prezime"], FILTER_UNSAFE_RAW );
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $broj_mobitela = filter_var($_POST["broj_mobitela"], FILTER_UNSAFE_RAW );
    $poruka = filter_var($_POST["poruka"], FILTER_UNSAFE_RAW );
  
  
    $ime_ispis = htmlspecialchars($ime, ENT_QUOTES, 'UTF-8');
    $prezime_ispis = htmlspecialchars($prezime, ENT_QUOTES, 'UTF-8');
    $mobitel_ispis = htmlspecialchars($broj_mobitela, ENT_QUOTES, 'UTF-8');
    $email_ispis = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $poruka_ispis = htmlspecialchars($poruka, ENT_QUOTES, 'UTF-8');

    }
  }

?>


<div class="container align-items-center">
    <div class="row text-center">
        <div class="col">
            <h1>Contact</h1>
            <form method="POST">
                <b>Name: </b><br><input type="text" name="ime" required><br><br>
                <b>Surname: </b><br><input type="text" name="prezime" required><br><br>
                <b>E-mail: </b><br><input type="text" name="email" required><br><br>
                <b>Phone number: </b><br><input type="text" name="broj_mobitela" required><br><br>
                <b>Message: </b><br><input type="text" name="poruka" required><br><br>
                <input class="btn btn-primary" type="submit" value="Send">
            </form>
        </div>

        
        <div>
        <?php 
        $checker = true;
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(preg_match("/^\+3859\d\/\d{3}-\d{3,4}$/", $broj_mobitela) == false && filter_var($email, FILTER_VALIDATE_EMAIL) == false){
                echo "<div class='text-center text-danger'>Invalid <b>phone number</b> and <b>e-mail</b> address!</div>";
                $provjera = false;
            } else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                echo "<div class='text-center text-danger'>Invalid <b>e-mail</b> address!</div>";;
                $provjera = false;
            } else if(preg_match("/^\+3859\d\/\d{3}-\d{3,4}$/", $broj_mobitela) == false) {
                echo "<div class='text-center text-danger'>Invalid <b>phone</b> number!</div>";;
                $provjera = false;
            } else if($_GET['page'] == "contact" && $_SERVER["REQUEST_METHOD"] == "POST" && $checker == true) {
                echo 
                "
                <div>
                    <div class='text-success'><h6>Your message has been sent <b>successfuly!</b></h6></div>
                    <div class='text-success'><h6><b>Name:</b> <i>". $ime_ispis . "</i></h6></div>
                    <div class='text-success'><h6><b>Surname:</b> <i>". $prezime_ispis . "</i></h6></div>
                    <div class='text-success'><h6><b>E-mail:</b> <i>". $email_ispis . "</i></h6></div>
                    <div class='text-success'><h6><b>Phone number:</b> <i>". $mobitel_ispis . "</i></h6></div>
                    <div class='text-success'><h6><b>Message:</b> <i>". $poruka_ispis . "</i></h6></div>
                </div>
                ";
            }
        }

        ?>
        </div>
    </div>
</div>



