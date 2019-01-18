<!doctype html>
<html>

<head>
    <title>My fourth webpage!</title>
</head>

<body>
<h1>My fourth Website!</h1>
<ul>
    <li><a href="01_page.php">Page 1</a></li>
    <li><a href="02_page.php">Page 2</a></li>
    <li><a href="03_page.php">Page 3</a></li>
    <li>Page you are on.</li>
    <li><a href="05_page.php">Page 5 </a></li>
</ul>

<h1>Here are some logical operators</h1>

<h3>"&&(and)"</h3>
<?php
$x = "1";
$y = "2";

echo "X je $x" . " a y je $y " . "rezultat ovoga je true ako su I x I y istiniti"
. " npr. if($x && $y ==1){ispisi nesto}";

?>
<hr />

<h3>"||(or)"</h3>
<?php
$x = "1";
$y = "2";

echo "X je $x" . " a y je $y " . "rezultat ovoga je true ako su ILI x ILI y istiniti"
    . " npr. if($x || $y ==1){ispisi nesto}";

?>
<hr />

<h3>"!$x"</h3>
<?php
$x = "1";


echo "X je $x" . " rezultat ovoga je true ako X nije istinit"
    . " npr. if(!x ==1){ispisi nesto}";

?>
<hr />

<h3>"xor"</h3>
<?php
$x = "1";
$y = "2";

echo "X je $x" . " a y je $y " . "rezultat ovoga je true ako su ILI x ILI y istiniti ali ne oboje"
    . " npr. if($x xor $y ==1){ispisi nesto}";

?>
<hr />