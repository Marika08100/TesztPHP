<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Fovaros extends Varos {
        private $fovarosSzenyezetsege;
        private $metrokSzama;
    
        public function __construct($nev, $lakossag, $fovarosnev, $fovarosSzenyezetsege, $metrokSzama) {
            parent::__construct($nev, $lakossag);
            $this->fovarosSzenyezetsege = $fovarosSzenyezetsege;
            $this->metrokSzama = $metrokSzama;
        }
    
        public function getFovarosSzenyezetsege() {
            return $this->fovarosSzenyezetsege;
        }
    
        public function setFovarosSzenyezetsege($fovarosSzenyezetsege) {
            $this->fovarosSzenyezetsege = $fovarosSzenyezetsege;
        }
    
        public function getMetrokSzama() {
            return $this->metrokSzama;
        }
    
        public function setMetrokSzama($metrokSzama) {
            $this->metrokSzama = $metrokSzama;
        }
    }
    
    $bukarest = new Fovaros("Bukarest", 2000000, "Bukarest", 138, 6);
    echo $bukarest;
    