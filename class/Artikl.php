<?php 

$inArray = false;

class Artikl {
    private $id;
    private $naziv;
    private $url;
    private $cijena;
    public $counter;

    function __construct(string $id, string $naziv, string $url, string $cijena) {
        $this -> id = $id;
        $this -> naziv = $naziv;
        $this -> url = $url;
        $this -> cijena = floatval($cijena);
        $this -> counter = 1;
    }

    function get_id() {
        return $this -> id;
    }

    function get_naziv() {
        return $this -> naziv;
    }

    function get_url() {
        return $this -> url;
    }

    function get_cijena() {
        return $this -> cijena;
    }

    function get_counter() {
        return $this -> counter;
    }

    function counter_up() {
        return $this -> counter++;
    }

    function ispis_cijena() {
        return strval(number_format($this -> cijena, 2, ',', '.')). " kn";
    }
}

$artikli = array();

$artikli["1"] = new Artikl("1", "Iphone 14", "./img/iphone14.png", "10000");
$artikli["2"] = new Artikl("2", "Iphone 13", "./img/iphone13.png", "9000");
$artikli["3"] = new Artikl("3", "Iphone 12", "./img/iphone12.png", "8000");
$artikli["4"] = new Artikl("4", "Iphone 11", "./img/iphone11.png", "7000");
$artikli["5"] = new Artikl("5", "Samsung Galaxy S20", "./img/samsung_s20.png", "5000");
$artikli["6"] = new Artikl("6", "Samsung Galaxy S21", "./img/samsung_s21.png", "6000");
$artikli["7"] = new Artikl("7", "Samsung Galaxy A52", "./img/samsung_a52.png", "3000");
$artikli["8"] = new Artikl("8", "Samsung Galaxy A72", "./img/samsung_a72.png", "3500");



// $artikli["9"] = new Artikl("9", "Samsung Galaxy A33", "./img/samsung_a33.png", "2900");
// $artikli["10"] = new Artikl("10", "Samsung Galaxy A10", "./img/samsung_a10.png", "1500");


?>