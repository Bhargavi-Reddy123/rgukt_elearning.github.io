<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
</head>
<body>
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>About Us</h1>
				</div>
				<div class="content">
					<h3>Rajiv Gandhi University of Knowledge Technologies<br>--Catering to the Educational Needs of Gifted Rural Youth of Telangana</h3>
					<p><b>Rajiv Gandhi University of Knowledge Technologies (RGUKT) Basar</b> is unique university which actively uses Information and Communication Technology (ICT) in teaching. It is perhaps the first of its kind in the country with an educational model that is intensely ICT based. Established by the Government of erstwhile Andhra Pradesh vide a special act of legislation, this campus is loacated at the holy land of Basar (the abode of Gnyana Saraswathi, Goddess of knowledge) in Nirmal District (Telangana State). The campus is set in about 272 acres of salubrious and serene surrounding just a short distance from the banks of river Godavari.<span id="dots">...</span></p>
					<span id="more">
					<p>The primary objective of establishing RGUKT is to provide high quality educational opportunities for the rural youth of the state. The selection process follows approved rules and has very high competition where only the top rural graduates (mostly within the top 5%) get the opportunity to study at RGUKT.</p>
					<p>The University houses about 6000 students along with 250 faculty members and 120 support staff within its campus. The residential university comprises of Academic blocks with more than 140 ICT equipped classrooms, well – equipped laboratories, libraries with more than 1,00,000 volumes, boys’ and girls’ hostels and mess blocks that provide quality and nutritious food. The campus is more or less self-sustained with a Laundromat, bank, ATM, Shopping Complex, post office, primary health center etc. It also has indoor and outdoor recreational facilities, well equipped gymnasium, courts for basketball, badminton, table tennies, cricket, other sports and games.</p>
					<p>RGUKT has slowly but surely risen in reputation as its graduating engineers have acted as perfect brand ambassadors for the university. Batches of engineers graduated from RGUKT are placed in various companies, Government services and public sector. Some of them have also set up their own business and ventures as entrepreneurs. The metamorphosis of these students from reticent youngsters unsure of themselves into professionals rubbing shoulders with the best is a matter of great satisfaction and also a testimony to the founding principles of the University.</p>
					</span>
					<!--<div class="button">
						<a href="">Read more</a>
					</div>-->
					<button type="button" id="read" onclick="read()">Read more</button>
				</div>
				<div class="social">
					<a href=""><i class="fab fa-facebook-f"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="image-section">
				<img src="imgs/rguktb1.jpg">
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var i=0;
		function read(){
			if(!i){
				document.getElementById("more").style.display="inline";
				document.getElementById("dots").style.display="none";
				document.getElementById("read").innerHTML="Read less";
				i=1;
			}
			else{
				document.getElementById("more").style.display="none";
				document.getElementById("dots").style.display="inline";
				document.getElementById("read").innerHTML="Read more";
				i=0;
			}
		}
	</script>
</body>
</html>