<!doctype html>

<html>

<head>
    <title>Cetvrti zadatak!</title>
</head>


<body>
<h1>Cetvrti zadatak!</h1>

<h2>Unesite 3  u URL tipa zadatak04.php? x=1& y=2&& c=3 te ce se ta 3 unesena broja zbrojiti</h2>

<h3><?php echo isset($_GET['x']) ? "Prvi broj je: " . $_GET['x'] : 0 ?></h3>
<br>
<h3><?php echo isset($_GET['y']) ? "Drugi broj je: " . $_GET['y'] : 0 ?></h3>
<br>
<h3><?php echo isset($_GET['c']) ? "Treci broj je: " . $_GET['c'] : 0 ?></h3>
<br>

<?php
if(isset($_GET['x'])){
    $prviBroj = $_GET['x'];
}else{
    $prviBroj = 0;
}
if(isset($_GET['y'])){
    $drugiBroj = $_GET['y'];
}else{
    $drugiBroj = 0;
}
if(isset($_GET['c'])){
    $treciBroj = $_GET['c'];
}else{
    $treciBroj = 0;
}

$rezultat=$prviBroj+$drugiBroj+$treciBroj;
echo "Rezultati je: " . $rezultat;

?>



</body>

</html>