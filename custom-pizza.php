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
            <a href="index.html"><img src="img/logo.png" alt="logo"></a>
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="contact.html" class="active">Contact</a></li>
            <li><a href="custom-pizza.php" class="btn secondary small">Maak je eigen pizza <span>❯</span></a></li>
        </ul>
    </navbar>
<h1>Wat wilt u op uw pizza?
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
</h2>
</body>
</html>