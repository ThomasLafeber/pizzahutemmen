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
             <li><a href="menu.php">Menu</a></li>
          
            <li><a href="custom-pizza.php" class="btn secondary small">Maak je eigen pizza <span>❯</span></a></li>
        </ul>
    </navbar>
    <header>
<h1>
<h2>
<div class="form">
Wat wilt u op uw pizza? <br>
<form action="custom-pizza.php" method="POST">

  Tomatensaus <input type="checkbox" id="tomatensaus" name="tomatensaus" value="tomatensaus" class="knopje" onclick="addTom()"><br>
   Kaas<input type="checkbox" id="kaas" name="kaas" value="kaas, " class="knopje" onclick="addKaas()"><br>
 Salami<input type="checkbox" id="salami" name="salami" value="salami, " class="knopje" onclick="addSalami()"><br>
  Vis<input type="checkbox" id="vis" name="vis" value="vis, " class="knopje" onclick="addVis()"><br>
   Champignons<input type="checkbox" id="champignons" name="champignons" value=" champignons, " class="knopje" onclick="addChamp()"><br>
  Ananas<input type="checkbox" id="ananas" name="ananas" value="ananas, " class="knopje" onclick="addAnanas()"><br>
  Knoflooksaus<input type="checkbox" id="knoflooksaus" name="knoflooksaus" value="knoflooksaus, " class="knopje" onclick="addKnof()"><br><br>
  
  <input type="submit"  id="submit" name="verstuur"><br>
</form>
</div>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST["tomatensaus"]))
    $tomatensaus = $_POST["tomatensaus"];
  if(isset($_POST["ananas"]))
    $ananas = $_POST["ananas"];
  if(isset($_POST["kaas"]))
    $kaas = $_POST["kaas"];
  if(isset($_POST["salami"]))
    $salami = $_POST["salami"];
  if(isset($_POST["champignons"]))
    $champignons = $_POST["champignons"];
  if(isset($_POST["knoflooksaus"]))
    $knoflooksaus = $_POST["knoflooksaus"];
  echo "Uw bestelling is een pizza met: <br><br>";
  echo $tomatensaus . $kaas . $salami . $champignons . $ananas . $knoflooksaus;
}
?>
<br>
<br>
 </h2>
</h1>
<div class="lege-pizza">
            <div class="inner">
                <img src= "img/lege-pizza.png" alt="PIZZA JUMPSCARE">
                <img id="ananass" src="img/ananass.jpg" style="display:none;">
                <img id="salamie" src="img/salami.png" style="display:none;">
                <img id="viss" src="img/vis.png" style="display:none;">
                <img id="kaass" src="img/kaass.jpg" style="display:none;">
                <img id="tom" src="img/tom.jfif" style="display:none;">
                <img id="champ" src="img/champ.jpg" style="display:none;">
                <img id="knof" src="img/knof.jpg" style="display:none;">
              
            
                      
            </div> 
        </div>
</header>
<footer>
<div id="main">
<div> </div>
<div> <br> <b> Creators of the website </b> <br><br> <a style="text-decoration: none;" href="mailto:133582@hondsrugcollege.nl">Jonah van der Lugt</a> <br> <a style="text-decoration: none;" href="mailto:133271@hondsrugcollege.nl">Thomas Lafeber</a> <br> <a style="text-decoration: none;" href="mailto:133041@hondsrugcollege.nl">Mees Herr</a> <br><br></div>
<div style="text-decoration: none;"> <br><b>Owner PH-emmen</b>  <br><br> <a style="text-decoration: none;" href="mailto:SmiR@hondsrugcollege.nl"> PR Smit </a> </div>
<div style="text-decoration: none;"> <br><b>Locatie</b> <br><br> <a> Emmalaan 25 </a> </div>
<div style="text-decoration: none;"> <br><b>Socials</b> <br><br> <a style="text-decoration: none;" href="https://www.pizzahut.be/nl">Officiële Pizza Hut </a></div> 
<div> </div>
</div>
</footer>
</body>
<script>
function addSalami()
{
  //Knopje vis weg
  if(document.getElementById("vis").style.display == "none")
  {
    document.getElementById("vis").style.display = "inline";
  }
  else
  {
    document.getElementById("vis").style.display = "none";
  }
  //Salami plaatje toevoegen
  if(document.getElementById("salamie").style.display == "none"){
      document.getElementById("salamie").style.display = "inline";
    }else{
    document.getElementById("salamie").style.display = "none";
  }
}
function addVis()
{
  //Knopje salami weg
  if(document.getElementById("salami").style.display == "none")
  {
    document.getElementById("salami").style.display = "inline";
  }else
  {
  document.getElementById("salami").style.display = "none";
  }
 //Vis plaatje toevoegen
  if(document.getElementById("viss").style.display == "none")
  {
      document.getElementById("viss").style.display = "inline";
  }else
  {
    document.getElementById("viss").style.display = "none";
  }
}
function addAnanas()
{
  //Plaatje ananas toevoegen
   if(document.getElementById("ananass").style.display == "none")
   {
    document.getElementById("ananass").style.display = "inline";
   }else
   {
    document.getElementById("ananass").style.display = "none";
   }
}
function addKaas()
{
  //Plaatje kaas toevoegen
   if(document.getElementById("kaass").style.display == "none")
  {
    document.getElementById("kaass").style.display = "inline";
  }else
  {
    document.getElementById("kaass").style.display = "none";
  }
}
function addTom()
{
  //Plaatje ananas toevoegen
   if(document.getElementById("tom").style.display == "none")
   {
    document.getElementById("tom").style.display = "inline";
   }else
   {
    document.getElementById("tom").style.display = "none";
   }
}
 function addChamp()
{
  //Plaatje ananas toevoegen
   if(document.getElementById("champ").style.display == "none")
   {
    document.getElementById("champ").style.display = "inline";
   }else
   {
    document.getElementById("champ").style.display = "none";
   }
}
 function addKnof()
{
  //Plaatje ananas toevoegen
   if(document.getElementById("knof").style.display == "none")
   {
    document.getElementById("knof").style.display = "inline";
   }else
   {
    document.getElementById("knof").style.display = "none";
   }
}
function salamiBijPlaatje(){
  
}
</script>
</html>