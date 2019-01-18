<!doctype html>
<html>

<head>
    <title>My second webpage!</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
</head>

<body>
<h1>My second Website!</h1>
<ul>
    <li><a href="01_page.php">Page 1</a></li>
    <li>Page you are on.</a></a></li>
    <li><a href="03_page.php">Page 3 </li>
    <li><a href="04_page.php"">Page 4 </a></li>
    <li><a href="05_page.php"">Page 5 </a></li>
</ul>

    <h1>Here are some arithmetic operators</h1>

    <h3>"+"</h3>
<?php
$x = 1;
$y = 2;
$z = $x + $y;

echo "X je $x" . " a y je $y " . "zbroj te dvije vrijednosti mozemo dobit
sa operatorom + " . "i to je jednako $z.";
$x = 2;
$y = 1;
$z = $x - $y;
?>
<hr />
<h3>"-"</h3>
<?php
echo "X je $x" . " a y je $y " . "te dvije vrijednosti mozemo oduzeti
sa operatorom - " . "i to je jednako $z.";
?>
<hr />
<h3>"*"</h3>
<?php
$x = 3;
$y = 4;
$z = $x * $y;
echo "X je $x" . " a y je $y " . "te dvije vrijednosti mozemo pomnoziti
sa operatorom * " . "i to je jednako $z.";
?>
<hr />
<h3>"/"</h3>
<?php
$x = 50;
$y = 10;
$z = $x / $y;
echo "X je $x" . " a y je $y " . "te dvije vrijednosti mozemo podjeliti
sa operatorom / " . "i to je jednako $z.";
?>
<hr />
<h3>"%"</h3>
<?php
$x = 39;
$y = 6;
$z = $x % $y;
echo "X je $x" . " a y je $y " . "te dvije vrijednosti mozemo podjeliti
i vidjeti ostatak sa operatorom % " . "i to je jednako $z.";
?>


</body>
</html>