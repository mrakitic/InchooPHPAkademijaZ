<!doctype html>
<html>

<head>
    <title>My third webpage!</title>
</head>

<body>
<h1>My third Website!</h1>
<ul>
    <li><a href="01_page.php">Page 1</a></li>
    <li><a href="02_page.php">Page 2</a></li>
    <li>Page you are on.</li>
    <li><a href="04_page.php"">Page 4 </a></li>
    <li><a href="05_page.php"">Page 5 </a></li>
</ul>

<h1>Here are some comparison operators</h1>

<h3>"=="</h3>
<?php
$x = 1;
$y = 2;

echo "X je $x" . " a y je $y " . "rezultat ovoga je true ako su oni jednaki po vrijednosti";
?>
<hr />
<h3>"==="</h3>
<?php
$x = 4;
$y = 8;

echo "X je $x" . " a y je $y " . "rezultat ovoga je true ako su oni jednaki po vrijednosti I istog su tipa";
?>
<hr />
<h3>"!="</h3>
<?php
$x = 3;
$y = 2;

echo "X je $x" . " a y je $y " . "rezultat ovoga je true ako je x razlicit od y";
?>
<hr />
<h3>"<"</h3>
<?php
$x = 5;
$y = 6;

echo "X je $x" . " a y je $y " . "rezultat ovoga je true ako je X striktno manji od Y";
?>
<hr />
<h3>">"</h3>
<?php
$x = 7;
$y = 1;

echo "X je $x" . " a y je $y " . "rezultat ovog je true ako je X striktno veci od Y";
?>
<hr />
<h3>"<="</h3>
<?php
$x = 4;
$y = 1;

echo "X je $x" . " a y je $y " . "rezultat ovog je true ako je X manji ILI jednak Y";
?>
<hr />
<h3>">="</h3>
<?php
$x = 1;
$y = 2;

echo "X je $x" . " a y je $y " . "rezultat ovog je true ako je x veci ILI jednak Y";
?>
<hr />

