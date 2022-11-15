<?php 

function printaj() {
    echo 
    '
    <div class="container align-items-center">
        <div class="row text-center">
            <div class="col">
                <h1>Login</h1>
                <form method="POST">
                    <b>Username: </b><br><input type="text" name="username"><br><br>
                    <b>Password: </b><br><input type="password" name="password"><br><br>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
    ';
}

if($_GET["page"] == "login") {
    if(!isset($_SESSION["username"])) printaj();

    if(isset($_SESSION["username"])) {
        if($_SESSION["username"] != "admin") {
            printaj();
            echo "<div class='text-center text-danger'>Invalid login informations!</div>";
        } else {
            echo "<div class='text-center text-success h3'><b>Prijavljeni ste!</b></div><br>";
            echo 
            "
            <div class='logout'>
                <button class='btn btn-danger' onclick='logout()'>LOGOUT</button>
            </div>

            ";
        }
    }
}


//$2y$10$w6zjc2ez2MTRpss/Waqq8.i.R3zLBMgxKlxrWjui4bLQH/dJfyPXK

if($_GET["page"] == "login" && $_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $psw = $_POST["password"];

    if($username == "admin" && password_verify($psw, '$2y$10$w6zjc2ez2MTRpss/Waqq8.i.R3zLBMgxKlxrWjui4bLQH/dJfyPXK')) {
        $_SESSION["username"] = "admin";
        die(header("Location: index.php?page=login"));
    } else {
        echo "<div class='text-center text-danger'>Invalid login informations!</div>";
    }
}


if(isset($_GET["action"])) {
    if($_GET["action"] == "logout") {
        unset($_SESSION["username"]);
    }
}


?>



