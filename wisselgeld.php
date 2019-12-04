<?php
$input = ($argv[1]);

try {
    if ($input== 0.1){
        echo' ';
    }
    else if (substr($input,0,1 ) == "-" ) {
        echo'Ik kan geen negatief bedrag wisselen';
    }
    if  (is_numeric($input)
){

}
else{ 
    echo "Je hebt geen geldig bedrag meegegeven.";     
    exit;
}
} catch (\Throwable $th) {
        //throw $th;
    }

$geldeenheden = array(50, 20, 10, 5, 2, 1);
$centen = array(50, 20 ,10 ,5);
$geld = intval($input);
$cent = $input - $geld;
$cent = intval(round($cent * 100));
$cent = round($cent / 5) * 5;


euro($geldeenheden, $geld);
function euro($geldeenheden, $geld) {
    foreach ($geldeenheden as $value) {
        $restgeld = floor($geld / $value);
        if ($restgeld >= 1) {
            $geld = $geld - ($value * $restgeld);
            echo $restgeld . " x " . $value . " euro" . PHP_EOL;
        }
    }
}
centen($centen, $cent);
function centen($centen, $cent) {
    foreach ($centen as $value) {
        $restcent = floor($cent / $value);
        if ($restcent >= 1) {
            $cent = $cent - ($value * $restcent);
            echo $restcent . " x " . $value . " cent" . PHP_EOL;
            
        }
    }
}

