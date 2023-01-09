<?php
class Movie{
    public $titolo;
    public $anno;
    public $durata;

    function __construct($titolo){
        $this->titolo = $titolo;
    }

    public function SetYear($anno){
        $this->anno = $anno;
    }

    public function SetLength($durata){
        $this->anno = $durata;
    }
}   

$avengers = new Movie('Avengers');
$avengers->SetYear(2012);
$avengers->SetLength('02:23:00');
echo $avengers->titolo;
echo $avengers->anno;
echo $avengers->durata;

?>