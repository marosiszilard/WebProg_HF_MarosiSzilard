
<?php
session_start();

if (!isset($_SESSION['rand'])){
    $szam = rand(1, 10);
    $_SESSION['rand']= $szam;
}

if(isset($_POST["talalgatas"])) {

    $gondoltSzam = $_POST['talalgatas'];
    $szam = $_SESSION['rand'];
    if ($szam == $gondoltSzam) {
        echo "Helyes - uj szam erkezett";
        $szam = rand(1, 10);
        $_SESSION['rand']= $szam;
    } else if ($szam < $gondoltSzam) {
        echo "Kisebbet";
    } else {
        echo "Nagyobbat";
    }   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Talgatos</title>
</head>
<body>
<form method="POST" action="index.php">
    <input type="hidden" name="elkuldott" value="">
    Melyik számra gondoltam 1 és 10 között?
    <input name="talalgatas" type="text">
    <br>
    <br>
    <input type="submit" value="Elküld">
</form>
</body>
</html>

