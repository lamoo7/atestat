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
display:flex;
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

input , button {
	color:white;
	padding:20px;
border: 1px #4B9CD3 solid; 
border-radius: 15px;
background-color:#03102b;
margin:20px;
}

.contnt {
	max-width:49%;
	min-width:49%;
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
letter-spacing:50px;
animation-name:titlu;
animation-duration:2s;
}


@keyframes titlu
{
	0% {letter-spacing:auto;}
	50% {letter-spacing:10px;}
	100% {letter-spacing:auto;}
	}
.logo1 {
	position:relative;
	padding-left:40px;
	padding-right:40px;
	float:left;
	background-image: url('back.png');
	background-size:100% 100%;
	background-repeat: no-repeat;
	height:100px;
	width:100px;
	border-radius:50%;
	margin-top:30px;
	}
		
.logo1:hover {
	position:relative;
	padding-left:40px;
	padding-right:40px;
	float:left;
	background-image: url('back2.png');
	background-size:100% 100%;
	background-repeat: no-repeat;
	height:100px;
	width:100px;
	border-radius:50%;
	}

	button:hover{
		background-color: #4B9CD3;
		cursor: pointer;
	}
	
</style>
</head>
<body>
<div class="sus">
<div class="logo">
	<img src="rog.png" class="roglogo">
</div>
<div class="titlu"
<p>LOGIN</p>
</div>
<a href="main.html">
<div class="logo1" alt="Back to Home">

</div>
</a>
</div>
<br>
<div class="content">
<div class="contnt" style="float:left; border-right:3px white solid;">
<center><h2>Log In</h2>
<form action="date.php" method="post">
<input type="text" name="username" placeholder="Username" required="true"><br>
<input type="password" name="pswd" placeholder="Password" required="true"><br>
<button type="submit" name="">Log In</button>
</form>
</center>
</div>
<div class="contnt" style="float:right; border-left:3px white solid;">
<center>
<h2> Sign Up</h2>
<form action="register.php" method="post">
<input type="text" name="username"  placeholder="Username" required="true"><br>
<input type="text" name="email" placeholder="Email" required="true"><br>
<input type="password" name="pwd" placeholder="Password" required="true"><br>
<button type="submit" name="register">Sign Up</button>
</form>
</center>
</div>
</div>
<hr>

<footer><p>ATESTAT --- Gorcea Radu Andrei</p></footer>

</body>
</html>