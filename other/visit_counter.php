<?php 



function getBrojacPosjeta() {
    return file_get_contents("./counter/counter.txt");
}
  

function addBrojacPosjeta() {
    if(!isset($_SESSION['views'])) {
        $brojac_posjeta = getBrojacPosjeta() + 1;
        $_SESSION['views'] = "yes";
        file_put_contents("./counter/counter.txt", $brojac_posjeta);
    }
}

?>