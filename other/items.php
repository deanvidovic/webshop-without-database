<?php
require_once("./class/Artikl.php");

$cart = array();

if($_GET["page"] == "cart") {
    
    if(isset($_COOKIE["cart"])) {
        $cart = json_decode($_COOKIE["cart"]);
    }
    

    if(isset($_GET["action"]) && isset($_GET["id"])) {
        if($_GET["action"] == "add") {
            if(!in_array($_GET["id"], $cart)) {
                $cart[] = $_GET["id"];
                setcookie("cart", json_encode($cart), time() + 3600);
            }
        }
    }
}





?>