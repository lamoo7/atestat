<!doctype html>
<html>

 <?php
 $iphone = strpos($_SERVER[‘HTTP_USER_AGENT’],”iPhone”);
 $android = strpos($_SERVER[‘HTTP_USER_AGENT’],”Android”);
 $palmpre = strpos($_SERVER[‘HTTP_USER_AGENT’],”webOS”);
 $berry = strpos($_SERVER[‘HTTP_USER_AGENT’],”BlackBerry”);
 $ipod = strpos($_SERVER[‘HTTP_USER_AGENT’],”iPod”);

 if ($iphone || $android || $palmpre || $ipod || $berry == true) 
 {
     echo "https://s3.amazonaws.com/woocms.woorank.com/2020/05/poor-mobile-optimization.png";
  }
 ?>

<head>
<meta charset="utf-8">
<title>MAIN</title>
<style>
html {
    height: 100%;
}
body {
    height: 100%;
    margin: 0;
    background-repeat: no-repeat;
    background-attachment: fixed;
	background-image: linear-gradient(black , #03102b); 
}

.sus {
display:flex;
height:150px;
padding:20px;
position: sticky;
top:0;
background-image: url('hardware.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}

.logo {
	position:relative;
	padding-left:40px;
	padding-right:40px;
	}
	
.roglogo {
	height:150px;
	width:200px;
	animation-name: spin;
    animation-duration: 7s;
	animation-delay:5s;
	animation-iteration-count: infinite;
	}


@keyframes spin {
  0%   {transform: scaleX(1)}
  15%	{transform: scaleX(-1)}
  30%  {transform: scaleX(1)}
  100% {transform: scaleX(1)}
}
.content {
margin-left:50px;
margin-right:50px;
}

.content p , li{
color:white;
font-family:verdana;
font-size:15px;
}
.content h2 {
color:#72A0C1;
font-family:verdana;
}

a {
color:aqua;
}

footer p {
color:white;
font-family:verdana;
font-size:15px;
}

.sus ul {
  list-style-type: none;
  margin-left:150px;
  overflow: hidden;
  float:left;
padding:20px;
border: 1px #4B9CD3 solid; 
border-radius: 15px;
background-color:#03102b;
}

.sus li {
  float: left;
}

.sus li a, .dropbtn {
  display: flex;
  color: white;
  text-align: center;
  padding: 30px; 
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color:#4B9CD3;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  z-index: 1;
  background-color:black;
}

.dropdown-content a {
  color: white;
  text-decoration: none;
  display: block;
  text-align: center;
}

.dropdown:hover .dropdown-content {
  display: block;
}


</style>
</head>
<body>
<div class="sus">
<div class="logo">
	<img src="rog.png" class="roglogo">
</div>
<ul>
  <li><a href="jocuri.html">Jocuri</a></li>
  <li><a href="specificatii.html">Specificatii</a></li>
  <li class="dropdown">
    <a class="dropbtn">Platforme</a>
    <div class="dropdown-content">
      <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjMqM6flNPuAhUNDmMBHWt-Ce0QFjAAegQIARAD&url=https%3A%2F%2Fstore.steampowered.com%2F&usg=AOvVaw2rlhMUsH7fKQLuSJii_I9Z">Steam</a>
      <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjz6-GllNPuAhUIEBQKHUcnBJUQFjAAegQIBBAC&url=https%3A%2F%2Fubisoftconnect.com%2F&usg=AOvVaw3scSFY0BBhJ_lyjaxq_KVA">Uplay</a>
      <a href="https://www.google.com/url?sa=t&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjFsvWtlNPuAhUj5eAKHd3UC5gQFjAAegQIARAD&url=https%3A%2F%2Fepicgames.com%2F&usg=AOvVaw0IhOcdg59iC2eibZcT9l7z">Epic Games</a>
      <a href="http://www.blizzard.com/">Blizzard Entertainment</a>
    </div>
    </li>
	  <li><a href="login.php">Login</a></li>
  
</ul>

</div>

<br>
<br>


<div class="content">
<p><b>Republic Of Gamers</b> este un brand creat de ASUS</p> <br>
<p>ASUS este o companie multinațională de calculatoare și de telecomunicații din Taiwan, fiind unul dintre primii trei producători de notebook-uri la nivel mondial.
<br>
<br>
Principalii competitori ai companiei sunt Apple, Dell și Hewlett-Packard.
<br>
<br>
Asus apare în topul clasamentului "InfoTech 100" și "Asia Top 10 IT Companies" al revistei BusinessWeek reușind clasarea pe locul întâi în categoria IT Hardware al sondajului Top 10 Global Brands din Taiwan, cu o valoare totală a mărcii de 1,3 miliarde de dolari.
</p><br>
<hr>
<b><h2>Produse</h2></b>
<br>
<br><p>
Compania ASUS produce:
<ul>
<li>  Computere </li>
<li>  Laptop-uri    </li>
<li> Netbook-uri</li>
<li> Telefoane Mobile</li>
   <li>  Plăci grafice</li>
 <li>    Plăci de bază</li>
 <li>    Monitoare</li>
 <li>    Dispozitive optice</li>
  <li>   Tablete</li>
 <li>    Servere</li>
  <li>   Stații de lucru</li>
 <li>    Rețealistică</li>
 <li>    Multimedia</li>
<li>     Dispozitive de navigare prin GPS</li>
<li>     Proiectoare</li>
 <li>    Echipamente de gaming</li>
	</ul>
	</p>
	<br><hr>
	<b><h2>Nume</h2></b><br>
	<p>Numele ASUS vine de la ultimele patru litere ale cuvântului Pegasus, calul înaripat din mitologia greacă ce reprezintă inspirația artistică și învățătura. ASUS încorporează puterea, spiritul creativ și puritatea simbolizate de această creatură mitică ce se îndreptă către noi culmi ale calității și inovației cu fiecare produs ce este introdus pieții.</p>
	<br><hr>
	<br>
	<b><h2>Republic of Gamers (ROG)</h2></b><br>
	<p>De ani de zile de la înființare, ASUS și-a propus să pună tot mai mult accent pe industria de gaming. Acest proces a condus la înființarea în 2006 a mărcii Republic of Gamers (ROG), formată cu scopul exclusiv de a livra cel mai inovativ hardcore hardware pentru jucătorii cu adevărat dedicați.

De atunci, eforturile echipei ROG au condus la un flux continuu de tehnologie, tehnologie care a devenit legendară între entuziaști pentru performanța sa. ROG este mai mult decât hardware, ajutând la dezvoltarea industriei prin sponsorizarea unor evenimente precum PAX sau Dreamhack. Mass-media din întreaga lume au recunoscut ROG ca lider în performanța jocurilor pe PC și overclocking, multe dintre produse câștigând premii și obținând un feedback foarte pozitiv de la profesioniștii hardware.

În anul 2018 Asus lansează un nou brand de gaming, The Ultimate Force (TUF), conceput pentru cei ce doresc produse ce oferă rezistență superioară, produsele TUF fiind testate riguros în privința stabilității și a durabilității.</p>
<br><hr><br>
<b><h2>ASUS în România</h2></b> <br>
<p>Compania este prezentă și în România, unde a deschis un birou la jumătatea anului 2008, care răspunde și de piața din Bulgaria. Compania a vândut 78.667 de laptop-uri în anul 2008 (dintre care aproximativ 25.000 au aparținut gamei Eee PC) și 34.000 laptop-uri în 2007. În anul 2010, Asus a comercializat pe piața românească peste 80.000 de PC-uri portabile, 20.000 de monitoare și 60.000 de plăci de bază. În anul 2008, compania a vândut 200.000 de plăci de bază (cotă de piață 30%) și 100.000 de plăci video.

Cifra de afaceri în 2010: 42,5 milioane dolari</p>
<br><hr> <p>Sursa: <a href="https://ro.wikipedia.org/wiki/ASUS">https://ro.wikipedia.org/wiki/ASUS </a></p>

</div>

<hr>

<footer><p>ATESTAT --- Gorcea Radu Andrei</p></footer>

</body>
</html>