<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
 <navbar>
        <div class="logo">
            <a href="index.php"><img src="img/logo.png" alt="logo"></a>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="custom-pizza.php" class="btn secondary small">Maak je eigen pizza <span>❯</span></a></li>
        </ul>
    </navbar>
    <header>
<h1>
<h2>
Wat wilt u op uw pizza? <br>
 <form action="custom-pizza.php" method="POST">
  Tomatensaus<input type="checkbox" id="tomatensaus" name="tomatensaus" value="tomatensaus"><br>
  Ananas<input type="checkbox" id="ananas" name="ananas" value="ananas, " ><br>
  Salami<input type="checkbox" id="salami" name="salami" value="salami, "><br>
  Kaas<input type="checkbox" id="kaas" name="kaas" value="kaas, "><br>
  Knoflooksaus<input type="checkbox" id="knoflooksaus" name="knoflooksaus" value="knoflooksaus, "><br>
  Champignons<input type="checkbox" id="champignons" name="champignons" value=" champignons, "><br><br>
  <input type="submit"  id="submit" name="verstuur"><br>
</form>


<?php
$tomatensaus = $_POST["tomatensaus"];
$ananas = $_POST["ananas"];
$kaas = $_POST["kaas"];
$salami = $_POST["salami"];
$champignons = $_POST["champignons"];
$knoflooksaus = $_POST["knoflooksaus"];

$pizza2 = $_POST["pizza2"];
$tomatensaus2 = $_POST["tomatensaus2"];
$ananas2 = $_POST["ananas2"];
$kaas2 = $_POST["kaas2"];
$salami2 = $_POST["salami2"];
$champignons2 = $_POST["champignons2"];
$knoflooksaus2 = $_POST["knoflooksaus2"];
?>
Uw bestelling is geplaatst met als volgende: <?php Echo $tomatensaus . $ananas . $kaas . $salami . $champignons . $knoflooksaus;
 ?>
 </h2>
</h1>
</header>
</body>
</html>