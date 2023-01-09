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
$avatar = new Movie('Avatar');

$avengers->SetYear(2012);
$avengers->SetLength('02:23:00');
echo $avengers->titolo;
echo $avengers->anno;
echo $avengers->durata;

$avatar->SetYear(2009);
$avatar->SetLength('02:42:00');
echo $avatar->titolo;
echo $avatar->anno;
echo $avatar->durata;


?>