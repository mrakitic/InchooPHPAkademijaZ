<!doctype html>
<html>

<head>
    <title>My fifth webpage!</title>
</head>

<body>
<h1>My fifth Website!</h1>
<ul>
    <li><a href="01_page.php">Page 1</a></li>
    <li><a href="02_page.php">Page 2</a></li>
    <li><a href="03_page.php">Page 3</a></li>
    <li><a href="04_page.php">Page 4</a></li>
    <li>Page you are on.</li>
</ul>

<h1>Here are some more operators</h1>

<h3>"String"</h3>
<?php
$grad = "Zagreb";
$grad = $grad . " je glavni grad ";
$grad .= " u Hrvatskoj";



echo $grad . "(nemora sve ici u isti red vec se moze povezat sa varijabla + .=)";

?>
<hr />

<h3>"Array"</h3>
<?php
$a1 = [1];
$a2 = array(5,6);
$a3 = $a1 + $a2;
var_dump($a3);

?>
<hr />

<h3>"Type"</h3>
<?php
class Osoba
{

}
class Ucenik
{

}
$a=new Osoba();

echo "Imamo klasu Osoba i klasu Ucenik i ako instanca a od osobe onda je operator true primjer: ";

var_dump($a instanceof Osoba);

?>
<hr />

<h3>"Increment"</h3>
<?php
$i = 1;
$i++;
echo "Ako je i = 1 naredbom i++ uzmemo te uvecamo njegovu vrijednost za jedan,"
. " primjer: i = 1 te dodamo i++ pa dobijemo $i";


?>
<hr />

<h3>"Decrement"</h3>
<?php
$i = 5;
--$i;
echo "Ako je i = 5 naredbom --i smanjimo vrijenost i te ga returnamo, "
    . " primjer: i = 5 te dodamo --i pa dobijemo $i";


?>
<hr />



