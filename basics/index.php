
<?php   //open tag
require 'data/students.php';
require 'view/index.view.php';

/*
Labai geras kodas
// arba #  yra vienos eilutes komentaras
*/
// phpinfo();        parodo php parametrus
//echo "Testas";
//rint "Testas 2";
//print_r masyvo spausdinimas
/*
$name = "Vytautas";
$age = 26;
$online = true;
$name .= " PHP";
$movie = "Matrix";
echo 'Mano vardas yra '.$name;  // . dedamas klijuojant string elementus

echo $name;
var_dump($name); parodo variable info
echo "Filmo pavadinimas yra \"$movie\"";
*/
/*
$eilute = " labas rytas, Lietuva! ";
$eilute = trim($eilute);
$didziosios_raides = strtoupper($eilute);
$mazosios_raides = strtolower($eilute);
$pavadinimas = ucfirst($eilute);
$pavadinimas = str_replace("Lietuva", "Latvija", $eilute);
$zodis = substr($eilute, 0, 5);
$text   = "\t\t    PHP yra puiki programavimo kalba :) ...  ";

$trimmed = trim($text);

$a = 10;

$b = $a + 1;  // 11

$c = $a - 1;  // 9

$d = $a * 5;  // 50

$e = $a / 2;  // 5

$f = $a % 3;  // 1
echo rand() ."<p>";
echo rand() ."<p>";
echo rand(5, 15) ."<p>";
echo "hello<p>world";*/
/*$data = [
    130 => 'Jonas',
    155 => 'Ieva',
    180 => true,
    156 => 130
];

echo $data;*/
/*$data = ['Jonas', 'Ieva', true, 130]; //indeksuitasis masyvas
foreach($data as $key=>$item){
    echo "$key: $item<br>";
}*/
/*for($i = 0; $i<count($data); $i++){
    echo "$data[$i]<br>";
};*/
/*
$studentses = [       //asociatyvusis masyvas (vienos dimensijos masyvas)
    'name' => 'Petras',
    'lname' => 'Petraitis',
    'status' => 'online'
];
foreach($studentses as $code=>$student){
    echo "$code: $student<br>";
};*/