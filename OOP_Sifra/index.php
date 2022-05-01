<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.scss">
    <title>Sifra</title>
</head>
<body>
    <?php
    //Vytvoříme si třídu Sifrovaní ve které jsou 2 public proměnné $text $key
    //$key je počet o kolik se zadaný text posune v ASCII tabulce (text pak může vypadat jakkoliv klidně i ' /"?:!4%74UB ')
    //$text je text který se bude šifrovat
    // v programu jsou dva for loopy které se starají o šfrování a dešifrování
    // uplně na konci vytvoříme ve třídě Sifrovani objekt sifra  a ten  provede metodu za_de_sif()

    class Sifrovani {
        public $text;
        public $key;

        
        public function za_de_sif($text, $key = 19) {
            $this->text = $text;
            $this->key = $key;
            echo "<h2>Zašifrovaný text</h2>";
            for ($pos = 0; $pos < strlen($text); $pos ++ ) {
                $byte = substr($text, $pos);
                $byte = ord($byte) + $key;
                $byte = chr($byte);
                echo $byte;
            }
            echo "<h2>Dešifrovaný text</h2>";
            for ($pos = 0; $pos < strlen($text); $pos ++ ) {
                $byte = substr($text, $pos);
                $byte = ord($byte) + $key;
                $byte = chr($byte);
                $byte = ord($byte) - $key;
                $byte = chr($byte);
                echo $byte;
            }

        }
    }
      
    $sifra = new Sifrovani;
    $sifra->za_de_sif("EA");
    ?>
    
    
</body>
</html>