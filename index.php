<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="shortcut icon" type="image/png" href="IMAGES/favicon1.jpg"/>
		<link rel="stylesheet" type="text/css" href="css/AmateureTheatricals.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<title> Amateur Theatricals </title>
	<body>
		<div>
			<img class="logo" type="image/png" src="IMAGES/favicon1.jpg">
		</div>
		<div>
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#gallery">Gallery</a></li>
				<li class="eventDropdown">
				<a  class="dropbtn">Event</a>
				<div class="eventDropdown-content">
					<a href="#">Link 1</a>
					<a href="#">Link 2</a>
					<a href="#">Link 3</a>
				</div>
					<li><a href="#contacts">Contacts</a></li>
				</li>
			</ul>
			<div class="container"> 
				<section>
					<img src="IMAGES/AT1.jpg" alt="AT Design">
					<div class="center">Afalme with passion</div>				
				</section>
			</div>
			<div>
				<section class="programImages">
					<img class="mySlides" src="IMAGES/img_band_la.jpg">
					<img class="mySlides" src="IMAGES/img_band_ny.jpg">
					<img class="mySlides" src="IMAGES/img_band_chicago.jpg">
				</section>		
		</div>
		<div>
			<footer class="socialSites">
				<a href="https://www.facebook.com/search/top/?q=Amateur%20Theatricals"><i class="fa fa-facebook-square"></i></a>
				<a href="https://www.instagram.com/amateur_theatricals/"><i class="fa fa-instagram"></i></a>
				<a href="https://twitter.com/"><i class="fa fa-twitter-square"></i></a>
				<a href="https://plus.google.com/u/0/"><i class="fa fa-google-plus-square"></i></a>
				<a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a>
				<p class="Amateure_Theatricals">
					Powered by <a href="www.google.com" target="_blank">AT</a>
				</p>
			</footer>
		</div>
		<script>
			var myIndex = 0;
			carousel();
			function carousel() 
			{
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) 
				{
					x[i].style.display = "none";
				}
				myIndex++;
				if (myIndex > x.length) 
				{
					myIndex = 1
				}
				x[myIndex-1].style.display = "block";
				setTimeout(carousel, 3000);
			}
		</script>
	</body>
</html>