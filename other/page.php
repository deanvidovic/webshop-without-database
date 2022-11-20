<?php 

$page = $_GET["page"];
$arrayOfFileNames = array();
$fileList = glob('pages/*');

if($page == "cart" || $page == "contact") {
    if(!isset($_SESSION["username"]) || $_SESSION["username"] != "admin") {
        die(header("Location: index.php?page=need_to_login"));
    }
}

foreach($fileList as $filename){
    if(is_file($filename) && ((basename($filename) != "footer") || (basename($filename) != "header"))){
        $arrayOfFileNames[] = basename($filename, ".php");
    }   
}



if(isset($page)) {
    foreach($arrayOfFileNames as $e) {
        if($page == $e) {
            require_once("./pages/" . $e . ".php");
        } 
    }
} else if(!isset($page)) {
    die(header("Location: index.php?page=home"));
}





?>