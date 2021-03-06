<!doctype html>
<head>
<title>LOGIN</title>
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
width:100%;
}

.content p , li{
color:white;
font-family:verdana;
font-size:15px;
}

.content h2 {
color:#72A0C1;
text-align: center;
font-family:verdana;
margin-top:40px;
}

a {
color:aqua;
}

footer p {
color:white;
font-family:verdana;
font-size:15px;
}

.titlu {
width:100%;
height:100px;
color:#9FE7F7;
font-family:candara;
font-size:50px;
margin-top:30px;
text-decoration:none;
text-align:center;
}

footer{
	bottom: 0;
	position: absolute;
	width:100%;
}	
</style>
</head>
<body>
<div class="sus">
<div class="logo">
	<img src="rog.png" class="roglogo">
</div>
<div class="titlu"
<p>SUCCES!</p>
</div>

</div>
<br>
<div class="content">
<center>
<h2>Utilizatorul a fost adaugat cu succes!</h2>

<a href="main.html">inapoi</a>
</center>
</div>

<footer><hr><p>ATESTAT --- Gorcea Radu Andrei</p></footer>

</body>
</html>