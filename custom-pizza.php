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
<div class="form">
Wat wilt u op uw pizza? <br>
<form action="custom-pizza.php" method="POST">

  Tomatensaus<input type="checkbox" id="tomatensaus" name="tomatensaus" value="tomatensaus, " class="knopje"><br>
   Kaas<input type="checkbox" id="kaas" name="kaas" value="kaas, " class="knopje"><br>
 Salami<input type="checkbox" id="salami" name="salami" value="salami, " class="knopje" onclick="wegVis()"><br>
  vis<input type="checkbox" id="vis" name="vis" value="vis, " class="knopje" onclick="wegSal()"><br>
   Champignons<input type="checkbox" id="champignons" name="champignons" value=" champignons, " class="knopje"><br>
  Ananas<input type="checkbox" id="ananas" name="ananas" value="ananas, " class="knopje" ><br>
  Knoflooksaus<input type="checkbox" id="knoflooksaus" name="knoflooksaus" value="knoflooksaus, " class="knopje"><br><br>
  
  <input type="submit"  id="submit" name="verstuur"><br>
</form>
</div>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
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

  echo "Uw bestelling is een pizza met: <br><br>";
  echo $tomatensaus . $kaas . $salami . $champignons . $ananas . $knoflooksaus;
}
?>
<br>
<br>

 </h2>
</h1>
</header>
</body>
<script>

function wegVis(){
  if(document.getElementById("vis").style.display == "none"){
    document.getElementById("vis").style.display = "inline";
  }else{
  document.getElementById("vis").style.display = "none";
}
}

function wegSal(){
  if(document.getElementById("salami").style.display == "none"){
    document.getElementById("salami").style.display = "inline";
  }else{
  document.getElementById("salami").style.display = "none";
}
}

</script>
</html>