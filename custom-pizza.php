<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Hut Emmen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="normalize.css" rel="stylesheet">
</head>

<body>
 <navbar>
        <div class="logo">
            <a href="index.html"><img src="img/logo.png" alt="logo"></a>
        </div>
        <ul>
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="custom-pizza.php" class="btn secondary small">Maak je eigen pizza <span>❯</span></a></li>
        </ul>
    </navbar>
<h1>Wat wilt u op uw pizza?
U kunt ook onze <li><a href="index.php">vaste pizza's</a></li>nemen</h1>
<h2>
<form>
 <form action="verwerk.php" method="POST">
  Tomatensaus<input type="checkbox" id="tomatensaus" name="tomatensaus"><br>
  Ananas<input type="checkbox" id="ananas" name="ananas"><br>
  Salami<input type="checkbox" id="salami" name="salami"><br>
  Kaas<input type="checkbox" id="kaas" name="kaas"><br>
  Knoflooksaus<input type="checkbox" id="knoflooksaus" name="knoflooksaus"><br>
  Champignons<input type="checkbox" id="champignons" name="champignons"><br><br>
  <input type="submit"  id="submit" name="verstuur"><br>
  
</form>
Wilt u een 2e pizza? Zo ja, wat wilt u er op?
<form>
 <form action="verwerk.php" method="POST">
 2e pizza? <input type="checkbox" id="pizza2" name="pizza2"><br>
  Tomatensaus<input type="checkbox" id="tomatensaus2" name="tomatensaus2"><br>
  Ananas<input type="checkbox" id="ananas2" name="ananas2"><br>
  Salami<input type="checkbox" id="salami2" name="salami2"><br>
  Kaas<input type="checkbox" id="kaas2" name="kaas2"><br>
  Knoflooksaus<input type="checkbox" id="knoflooksaus2" name="knoflooksaus2"><br>
  Champignons<input type="checkbox" id="champignons2" name="champignons2"><br><br>
  <input type="submit"  id="submit" name="verstuur"><br>
 
</form>
</h2>
</body>
</html>