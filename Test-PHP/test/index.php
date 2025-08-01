<?php



echo <<<EOT
<h1><b>Przykład wielowierszowego wiersza 
który można łatwo formatować</b></h1>
EOT;

$zmienna=1;
$zmienna="2";

$tablica1 =[
'jeden',
'dwa',
'trzy',

];



//var_dump() - wyswietla szczegolowa strukturę
//print_r() - wyswietla podstawową strukturę

/*
warto dac po miedzy pre ktory formatuje tekst a nie wyswietla go w linii tak jak tablice
echo "<pre>";

echo "</pre>";
*/

$tablica2=[
'klucz1' => 'wartość1',
'klucz2' => 'wartość2',
'klucz3' => 'wartość3',
];


//jak zapomnimy jakiejś funkcji na egzaminie można sobie podejrzeć- Chyba można ? :D

echo"<br>tablica indeksowana";
echo "<pre>";
//print_r($tablica1); //pokaze tablice od srodka
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo"<br>tablica asocjacyjna";
echo "<pre>";
//print_r($tablica2); //pokaze tablice od srodka
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<pre>";
//var_dump(get_extension_funcs('mysqli')); //dostepne funkcje powiązane z mysqli
echo "</pre>";
echo "<br>";
echo "<br>";
echo "<pre>";
//print_r(get_class_methods('mysqli')); //pokazuje obiekty dostepne dla klasy mysqli
echo "</pre>";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<pre>";
//print_r(get_declared_classes()); //pokazuje wszystkie dostępne klasy 
echo "</pre>";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<pre>";
//print_r(get_defined_functions()); //pokazuje wszystkie dostępne funkcje 
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo "<pre>";

echo "</pre>";








?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>