<?php
$paises = array("Alemania", "Brasil", "Italia", "Txile", "Uruguay", "Australia");

// Bistaratu emaitza
print_r($paises);
echo "<br>";

// ******** array_diff funtzioak bi array konparatzen ditu eta ezberdintasuna bueltatzen du
$paises = array_diff($paises, array("Alemania", "Italia", "Australia"));


// Bistaratu emaitza
echo "array_diff eginda<br>";
print_r($paises);
echo "<br>";


// ****** unset() funtzioa elementuak array batetik kendu ahal izateko erabiltzen da, arrayaren posizioa adieraziz.
// 1. 'alemania', 'italia' eta 'australia' kentzea erabiliz unset()
unset($paises[0], $paises[2], $paises[5]);

// Baina posizioa ez jakitekotan, zelan egin dezakegu?
unset($paises[array_search('alemania', $paises)]); // Eta horrela banan banan


$pos1 = array_search('alemania', $paises);
unset($paises[$pos1]); 


//**********  array_push Bi elementuak array-aren atzean idazten du, klabeak jarraian doaz, aurrekoak mantenduz  */
array_push($paises, 'Argentina', 'Bolivia');

// Bistaratu emaitza
echo "array_push eginda<br>";
print_r($paises);
echo "<br>";


// array_merge "Venezuela" eta "Panama" elementuak gehitzea. Bi array batu egiten ditu. Indizeak beridazten ditu
$paises = array_merge($paises, array("Venezuela", "Panama"));

// Bistaratu emaitza
echo "array_merge eginda<br>";
print_r($paises);
echo "<br>";

// Arraya alfabetikoki ordenatu
sort($paises);

// Bistaratu emaitza
print_r($paises);
?>
