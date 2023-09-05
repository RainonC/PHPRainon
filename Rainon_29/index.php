<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Rainon php tööd</title>
    <link rel="stylesheet" type="text/css" href="style/styles.css"
          <script src="js/script.js"></script>
</head>
<body>
    <script src="js/script.js"></script>
<?php
include('header.php');
?>

<?php
include('navigation.php');
?>
<main>
    <?php
    if(isset($_GET["leht"])){
        include('content/'.$_GET["leht"]);
    } else {
        echo "Tere tulemast, ........";
    }


    ?>
</main>

<?php
include('footer.php');
?>

</body>
</html>


