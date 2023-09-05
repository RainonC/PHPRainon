<?php
// eemalda urlist muutujad
function clearVarsExcept($url, $varname) {
    return strtok(basename($_SERVER['REQUEST_URI']),"?")."?$varname=".$_REQUEST[$varname];
}

echo "<h1>Matemaatika tehed</h1>";
$number1 = 50;
$number2 = 100;
//Vastused - punase värviga ja lisada täpploend
echo "<li>Kui me liidame 2 arvu kokku, siis tuleb -></li> ";
    echo "<span>".($number2+$number1)."</span>";
echo "<br>";
echo "<li>Kui arv2 jagada arv1-ga, siis tuleb -> </li> ";
echo "<span>".($number2/$number1)."</span>";
echo "<br>";
echo "<li>Arv1 ruudus on -></li> ";
echo "<span>".pow($number1, 2)."</span>";
echo "<br>";
echo "<li>arv2 - arv1 * 2 = </li> ";
echo "<span>".($number2-$number1 * 2)."</span>";

?>

<h2>Kontrollimiseks sisesta 2 arvu</h2>
    <form name="kontroll" action="<?=clearVarsExcept(basename($_SERVER['REQUEST_URI']),"leht")?>" method='post'>
        <label for="n1">Arv 1</label>
        <input type="number" name="n1">
        <br>
        <label for="n2">Arv 2</label>
        <input type="number" name="n2" value="0">
        <input type="submit" value="OK">
    </form>
<?php
// kontroll
//probleem-1 leht värvida valgeks, kui arvud sisestamata
if (isset($_REQUEST["n1"])) {

    if ($_REQUEST["n1"] == $number1) {
        if ($_REQUEST["n2"] == $number2) {
            echo "Õige!";
            echo "<body style='background-color: lightgreen'>";
        } else if ($_REQUEST["n1"] !== $number1) {
            echo "vale!";
            echo "<body style='background-color: lightcoral'>";
        } else {
            echo "<body style='background-color: white'>";
        }
    } else {
        echo "vale!";
        echo "<body style='background-color: lightcoral'>";
    }
}

