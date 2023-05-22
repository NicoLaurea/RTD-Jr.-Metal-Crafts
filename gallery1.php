<!DOCTYPE html>
<html>
<head>
<title> Metal Crafts Gallery </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
.w3-dark{color:#fff !important; background-color:#231F20 !important}
.w3-but{ background-color:#262626 !important}
.w3-bg{color:#fff !important; background-color:#262626 !important}
.w3-footer{color:#fff !important; background: linear-gradient(to top, #888888 10%, #262626 90%);}
.w3-gradient{color:#fff !important; background: linear-gradient(to right, #262626 0%, #ad974f 300%);}
.w3-sidebar{color#000 !important; background-color:#E8E4C9 !important}
.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
.w3-third img:hover{opacity: 1}
</style>
</head>
<body text=#fff bgcolor = #262626>
<!--Sidebar Menu-->
<div class="w3-sidebar w3-bar-block w3-animate-left w3-text-light-grey  " 
	style ="display:none ; z-index:1000" id="mySidebar"><br>
	<h2 class="w3-padding-64 w3-center w3-text-dark-grey "><b>METAL<br>CRAFTS</b></h2>
	<a href="javascript:void(0)" onclick="w3_close()"
	class="w3-bar-item  w3-center w3-text-dark-grey w3-padding "><h4>Close &times</h4></a>
	<a href = "web.php#" class="w3-bar-item w3-button  w3-center w3-text-dark-grey w3-padding"><h4>Home</h4></a>
	<a href = "web.php#plans" class="w3-bar-item w3-button w3-text-dark-grey w3-center w3-padding"><h4>Prices</h4></a>
	<a href = "web.php#about" class="w3-bar-item w3-button w3-center w3-text-dark-grey w3-padding"><h4>About</h4></a>
	<a href = "web.php#contact" class="w3-bar-item w3-button w3-center w3-text-dark-grey w3-padding"><h4>Contact</h4></a>
	<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
</div>

<!--Top Menu-->
<header class ="w3-container w3-gradient">
	<h1 align = "center">Gallery<button class="w3-left w3-button w3.but w3-xlarge" onclick="w3_open()">☰</button></h1>
	<!-- NavBar-->
	<div class = " w3-padding w3-center">
		<div class = "w3-bar">
			<a href = #ring class = "w3-bar-item w3-button"> Ring</a> 
			<a href = #pin class = "w3-bar-item w3-button"> Pin</a> 
			<a href = #medal class = "w3-bar-item w3-button"> Medal</a> 
			<a href = #plaques class = "w3-bar-item w3-button"> Plaques</a> 
			<a href = #marker class = "w3-bar-item w3-button"> Markers</a> 
			<a href = #paperweight class = "w3-bar-item w3-button"> Paperweight</a> 
	</div>
</header>


<!-- Content-->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">
	<!-- RING CONTENT-->
	<h2 align = "center">Rings</h2>
	<div class = "w3-row" id = "ring">
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/ring1.1.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring1.2.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/ring3.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring4.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/ring2.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring5.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
	</div>
		<h2 align = "center">Pins</h2>
	<div class = "w3-row" id = "pin">
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/pin2.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring1.2.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/pin1.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring4.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/pin3.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring5.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
	</div>
		<h2 align = "center">Medals</h2>
	<div class = "w3-row" id = "medal">
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/medal (1).jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/medal (2).jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/medal (3).jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/medal (4).jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/medal (5).jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/medal (6).jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
	</div>
		<h2 align = "center">Plaques</h2>
	<div class = "w3-row" id = "plaques">
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/plaques1.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring1.2.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/ring3.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring4.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/ring2.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring5.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
	</div>
		<h2 align = "center">Markers</h2>
	<div class = "w3-row" id = "marker">
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/ring1.1.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring1.2.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/ring3.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring4.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/ring2.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring5.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
	</div>
		<h2 align = "center">Paperweight</h2>
	<div class = "w3-row" id = "paperweight">
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/ring1.1.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring1.2.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/ring3.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring4.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
		<div class ="w3-third w3-container">
		<a href = "web.php#contact">
		<img src ="Product/ring2.jpg" style = "width:100%" alt ="ring img"/>
		<img src ="Product/ring5.jpg" style = "width:100%" alt ="ring img"/>
		</a>
		</div>
	</div>
</div>
<script>

function w3_open() {
	document.getElementById("mySidebar").style.width = "300px";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
function w3_close(){
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>
<body>
</html>