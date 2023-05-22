<!DOCTYPE html>
<html>
<head>
<title>RTD Jr. Metal Crafts</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel= "stylesheet" href = "https://fonts.googleapis.com/css2?family=B612&family=Braah+One&family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,
400&family=IM+Fell+Double+Pica+SC&family=Manrope:wght@400;500;600;700;800&family=Marcellus&family=Moulpali&family=Mulish:wght@200;300;400;500;600;700;800;900;1000&
family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Ysabeau:wght@300;400;500;600;700;800;900;1000&display=swap">
<style>
html,body,h1,h2,h3,h4 {font-family:'Mulish', sans-serif;}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
.w3-gold{color:#fff !important; background-color:#8E793E !important}
.w3-dark{color:#fff !important; background-color:#231F20 !important}
.w3-footer{color:#fff !important; background: linear-gradient(to top, #888888 10%, #262626 90%);}
.w3-gradient{color:#fff !important; background: linear-gradient(to right, #262626 0%, #ad974f 300%);}
</style>
</head>
<body text=#fff bgcolor = #262626>

<!-- Links in NavBar -->
<div class="w3-top">
  <div class="w3-row w3-large w3-gradient">
	  <div class="w3-col s2">
      <a href="#" class="w3-button w3-block">Home</a>
    </div>

	  <div class="w3-col s3">
      <a href="gallery.php" class="w3-button w3-block">Gallery</a>
    </div>

    <div class="w3-col s2">
      <a href="about.php" class="w3-button w3-block">About</a>
    </div>
    <div class="w3-col s3">
      <a href="#contact" class="w3-button w3-block">Contact</a>
    </div>
    <div class="w3-col s2">
      <a href="faqs.php" class="w3-button w3-block">FAQs</a>
    </div>
	
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>RTD Jr. Metal Crafts</b></h1>
    <p>We build for integrity</p>
  </div>
  
  <!-- Slideshow Content -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="My project-2 - Copy.png" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="My project-3 - Copy.png" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="IMG_4196 - Copy - Copy.png" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="ring1.png" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
      </div>
    </div>

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>
  </div>
  
  <!-- Grid Assembly for Objectives -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">What We Offer</span>
    </div>
    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
      <h3>Lifetime Warranty</h3>
      <p>We provide lifetime fixation service for our products.</p>
    </div>

    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
      <h3>Styling</h3>
      <p>Style is elegant, but quality and hardness is our priority.</p>
    </div>

    <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
      <h3>Consultation</h3>
      <p>Providing customer care with above satisfaction rate.</p>
    </div>

    <div class="w3-col l3 m6 w3-black w3-container w3-padding-16">
      <h3>Promises</h3>
      <p>We promise to be delinquent with any concerns you have.</p>
    </div>
  </div>

  <!-- Grid Assembly for Prices -->
  <div class="w3-row-padding" id="plans">
    <div class="w3-center w3-padding-64">
      <h3>Pricing</h3>
      <p>Consult us with your prefered ideas. Pricing may differ from its time of production.</p>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Rings</li>
        <li class="w3-padding-16"><b>Type of Material</b></li>
        <li class="w3-padding-16"><b>Top Finish</b></li>
        <li class="w3-padding-16"><b>Personalized Design</b></li>
        <li class="w3-padding-16"><b>Lifetime Warranty</b></li>
        <li class="w3-padding-16">
          <h2 class="w3-opacity"><em>Quantity Differed Price</em></h2>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Medals</li>
        <li class="w3-padding-16"><b>Type of Material</b></li>
        <li class="w3-padding-16"><b>Personalized Attributes<b></li>
        <li class="w3-padding-16"><b>Customized Ribbon</b></li>
        <li class="w3-padding-16"><b>Adjusted Dimensions</b></li>
        <li class="w3-padding-16">
        <h2 class="w3-opacity"><em>Quantity Differed Price</em></h2>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Pins</li>
        <li class="w3-padding-16"><b>Type of Material</b></li>
        <li class="w3-padding-16"><b>Adjusted Dimensions</b></li>
        <li class="w3-padding-16"><b>Customized Lock</b></li>
        <li class="w3-padding-16"><b>Personalized Designs</b></li>
        <li class="w3-padding-16">
        <h2 class="w3-opacity"><em>Quantity Differed<br> Price</em></h2>
      </ul>
    </div>
  </div>

  <!-- Grid Assembly for About -->
  <div class="w3-row-padding" >
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Our Executives</span>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <div class="w3-container">
          <h3>Rodrigo Dumlao</h3>
          <p class="w3-opacity">Chief Executive Officer</p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <div class="w3-container">
          <h3>Emelinda Pilande</h3>
          <p class="w3-opacity">Chief Financial Office</p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <div class="w3-container">
          <h3>Nino Dumlao</h3>
          <p class="w3-opacity">Chief Operation Officer</p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <div class="w3-container">
          <h3>Mary Dumalo</h3>
          <p class="w3-opacity">VP Support</p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
      </div>
    </div>
  
    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <div class="w3-container">
          <h3>Amelia Dumlao</h3>
          <p class="w3-opacity">VP Accounting</p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
      </div>
    </div>
  
    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <div class="w3-container">
          <h3>Rogelio Jr. Dumlao</h3>
          <p class="w3-opacity">VP Product Engineering</p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <div class="w3-container">
          <h3>Cherelyn Dumlao</h3>
          <p class="w3-opacity">VP Sales</p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <div class="w3-container">
          <h3>Nicolo Laurea</h3>
          <p class="w3-opacity">VP Operations</p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
      </div>
    </div>

  </div>

  <!-- Form and PHP Code for comments or inquiries -->
  <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
  </div>

  <form class="w3-container" action="connect.php" method="post">
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
    </div>
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" required>
    </div>
    <div class="w3-section">
      <label>Subject</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Subject" required>
    </div>
    <div class="w3-section">
      <label>Message</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
    </div>
    <button type="submit" class="w3-button w3-block w3-black">Send</button>
  </form>
</div>
<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-footer w3-center">
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/dumlao.engraver"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/rtdjrmetalcrafts/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.adamson.edu.ph/2018/" title="W3.CSS" target="_blank" class="w3-hover-text-green">AdU CPE</a></p>
</footer>

<script>
// Slideshow Effects
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>