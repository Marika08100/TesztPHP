<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Varos {
        private $nev;
        private $lakossag;
        private $fovarosSzenyezetsege; 
        private $metrokSzama;
        public function __construct($nev, $lakossag) {
            $this->nev = $nev;
            $this->lakossag = $lakossag;
        }
    
        public function getNev() {
            return $this->nev;
        }
    
        public function setNev($nev) {
            $this->nev = $nev;
        }
    
        public function getLakossag() {
            return $this->lakossag;
        }
    
        public function setLakossag($lakossag) {
            $this->lakossag = $lakossag;
        }
    
        public function Megfelelo() {
            return null;
        }
    
        public function __toString() {
            $megfeleloSzoveg = $this->Megfelelo() ? "Igen" : "Nem";
            return "Név: " . $this->nev . ", Lakosság: " . $this->lakossag . ", Szenyezetseg: " . $this->fovarosSzenyezetsege
                    . ", Metrok száma: " . $this->metrokSzama . ", Megfelelő: " . $megfeleloSzoveg; 
        }
    }
    ?>
</body>
</html>
