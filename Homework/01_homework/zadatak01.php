<!doctype html>

<html>

<head>
    <title>Prvi zadatak!</title>
</head>


<body>
<h1>Prvi zadatak!</h1>
<p>Ako zelite upisat kolko imate godina upisite gore u URL poslje zadatak01.php po
primjeru zadatak01.php?godine=22</p>

<?php print_r($_GET); ?>

<hr />

<?php if(isset($_GET['godine'])){
    $godine = $_GET('godine');
    echo "Imas $godine godina";
}else {
    echo "Nisi nam dao broj godina!";
} ?>

</body>

</html>





