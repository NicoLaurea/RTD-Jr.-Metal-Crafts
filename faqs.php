<!DOCTYPE html>
<html>
<head>
<title> Metal Crafts Gallery </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel= "stylesheet" href = "https://fonts.googleapis.com/css2?family=B612&family=Braah+One&family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,
400&family=IM+Fell+Double+Pica+SC&family=Manrope:wght@400;500;600;700;800&family=Marcellus&family=Moulpali&family=Mulish:wght@200;300;400;500;600;700;800;900;1000&
family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Ysabeau:wght@300;400;500;600;700;800;900;1000&display=swap">
<style>
html,body,h1,h2,h3,h4 {font-family: 'Figtree', sans-serif;}
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
<div class="w3-sidebar w3-bar-block w3-animate-left w3-top" style="display:none;z-index:10" id="mySidebar">
	<h2 class="w3-padding-64 w3-center w3-text-dark-grey "><b>METAL<br>CRAFTS</b></h2>
	<a href="javascript:void(0)" onclick="w3_close()"
	class="w3-bar-item  w3-center w3-text-dark-grey w3-padding "><h4>Close</h4></a>
	<a href = "web.php#" class="w3-bar-item w3-button  w3-center w3-text-dark-grey w3-padding"><h4>Home</h4></a>
	<a href = "web.php#plans" class="w3-bar-item w3-button w3-text-dark-grey w3-center w3-padding"><h4>Prices</h4></a>
	<a href = "about.php" class="w3-bar-item w3-button w3-center w3-text-dark-grey w3-padding"><h4>About</h4></a>
	<a href = "web.php#contact" class="w3-bar-item w3-button w3-center w3-text-dark-grey w3-padding"><h4>Contact</h4></a>
    <a href = "faqs.php" class="w3-bar-item w3-button w3-center w3-text-dark-grey w3-padding"><h4>FAQs</h4></a>
</div>
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
<!--Top Menu-->
<header class ="w3-container w3-gradient w3-top" id = "myHeader">
	<h1 align = "center">FAQs<button class="w3-left w3-button w3.but w3-xlarge" onclick="w3_open()">☰</button></h1>
	<!-- NavBar-->
	<div class = " w3-padding w3-center">
		<div class = "w3-bar">
			<a href = #rsg class = "w3-bar-item w3-button">Ring Size Guide</a> 
			<a href = #rr class = "w3-bar-item w3-button">Return or Refund</a> 
			<a href = #mop class = "w3-bar-item w3-button">Mode of Payment</a> 
			<a href = #osu class = "w3-bar-item w3-button">Order Status Updates</a> 
			<a href = #sd class = "w3-bar-item w3-button">Shipping and Delivery</a> 
	</div>
</header>

<div class="w3-content">
    <div class = "w3-row" id = "rsg">
        <br><br><br><br><br><br>
        <h2 align = "center">Ring Size Guide</h2>
        <p align= "center"><img src="ring size guide.png" alt="ring size guide" width="580" height="820"></p>
    </div>
    <div class = "w3-row" id = "rr">
        <br><br><br><br><br><br>
        <h2 align = "center">Return or Refund</h2>    
        <p align="center" style="font-family:Marcellus;">At RTD Jr. Metal Crafts, we want you to be completely satisfied with your purchase. If you are not satisfied with our products, you may return it within 30 days of purchase for a refund or exchange, subject to the following conditions:</p>
        <br>
        <p align="justify" style="font-family:Marcellus;">1. The product must be in its original condition, with all original packaging, accessories, and documentation included.
        <br>
        2. The product must not have been used or damaged in any way.
        <br>
        3. You must have a valid proof of purchase, such as a receipt or order confirmation.
        <br>
        4. You are responsible for the cost of return shipping, unless the product was damaged or defective upon receipt.
        <br>
        5. We reserve the right to refuse any returns that do not meet these conditions.</p>
        <br>
        <p align="center" style="font-family:Marcellus;">If you would like to initiate a return, please contact our customer service team at 0949936240, and we will provide you with instructions for returning the product. Once we receive the returned product and verify that it meets our return policy conditions, we will issue a refund to the original payment method or exchange the product, as requested.
        <br><br>
        Please note that some items may be excluded from our return policy, such as final sale items, personalized or custom-made items, or items that have been used or damaged by the customer. Any exclusions will be clearly stated on the product page or at the time of purchase.
        <br><br>
        Thank you for shopping with us, and please don't hesitate to contact us if you have any questions or concerns about our return policy.</p>
    </div>
    <div class = "w3-row" id = "mop">
        <br><br><br><br><br><br>
        <h2 align = "center">Mode of Payment</h2>
        <p align="center">If the purchase was not made in physical store or payment is not in cash, we accept payments through these following methods:
        <br><br>
        - Gcash
        <br>
        - BDO
        <br>
        - BPI
        <br>
        - MetroBank
        <br>
        - Security Bank
        <br><br>
        If the payment amount is sent, please send the proof of payment through the email: <b>dumlaoengravers@yahoo.com</b>, with the subject of "Payment" and your name.
    </p>
    </div>
    <div class = "w3-row" id = "osu">
        <br><br><br><br><br><br>
        <h2 align = "center">Order Status Update</h2>
        <p align="center">Customer satisfaction is our priority, we asure the clients order status by these following methods:
            <br><br>
            - Message us on any of our social media accounts.
            <br>
            - email us for status updates.
            <br>
            - Call us on our Hotline
            <br><br>
            Please be noted to keep your order number when requesting for an update, or for any other concerns.
        </p>    
    </div>
    <div class = "w3-row" id = "sd">
        <br><br><br><br><br><br>
        <h2 align = "center">Shipping and Delivery</h2>
        <p align="center">For our delivery duration, order forms are processed after receiving the payment and are processed within 2-3 business days. Production and delivery durations are different per products:
            <br><br>
            - for rings, production duration may take 3-5 days or longer depending on the quantity. And delivered 1-2 days on business days.
            <br>
            - for medals, production duration may take 5-6 days or longer depending on the quantity. And delivered 1-2 days on business days.
            <br>
            - for pins, production duration may take 5-6 days or longer depending on the quantity. And delivered 1-2 days on business days.
            <br>
            - for plaques, production duration may take 8-10 days or longer depending on the quantity. And delivered 1-2 days on business days.</p>
        <p>Regarding on shipping methods, we deliver within Metro Manila. If the location is outside Metro Manila, transporation cargo are used as shipping method. If the delivery locations are outside of luzon, airline cargos are used as shipping methods.</p>
    </div>
</div>
<br><br><br><br><br><br>


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
function w3_open() {
	document.getElementById("mySidebar").style.width = "300px";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>
</body>
</html>