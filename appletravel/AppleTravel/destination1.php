<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Destination</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

	* {
	margin-bottom: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: "Montserrat", sans-serif;
}


.nav-bar {
	position: relative;
	color: #fff;
	padding: 15px 75px;
	display: flex;
	border-radius: 8px;
	z-index: 100;
}

.nav-bar ul {
	list-style: none;
	gap: 35px;
	display: flex;
}



.nav-bar ul li a{
	text-transform: uppercase;
	text-decoration: none;
	font-size: 20px;
	color: #fff;
	transition: 0.3s ease;
}

.nav-bar ul li a: :before {
	content: '';
	position: absolute;
	width: 0;
	height: 2px;
	left: 0;
	bottom: -5px;
	background-color: #3275c7;
	transition: 0.3s ease;
}

.nav-bar ul li a:hover {
	color: #3275c7;
}

.nav-bar ul li a:hover: :before {
	width: 100%;

}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 100%;
	height: 100%;
	background: #f5f5f5;
	box-shadow: 0 30px 50px #dbdbdb;
}

.container .slide .item {
	width: 200px;
	height: 300px;
	position: absolute;
	top: 50%;
	transform: translate(0, -50%);
    border-radius: 20px;
    box-shadow: 0 10px 20px #505050;
    background-position: 50% 50%;
    background-size: cover;
    display: inline-block;
    transition: 0.5s;
}

.slide .item:nth-child(1),
.slide .item:nth-child(2) {
	top: 0;
	left: 0;
	transform: translate(0,0);
	border-radius: 0;
	width: 100%;
	height: 100%;
}

.slide .item:nth-child(3) {
	left: 50%;
}

.slide .item:nth-child(4) {
	left: calc(50% + 220px);
}

.slide .item:nth-child(5) {
	left: calc(50% + 440px);
}

.slide .item:nth-child(n+6) {
	left: calc(50% + 660px);
	opacity: 0;
}

.item .content {
	position: absolute;
	top: 50%;
	left: 100px;
	width: 300px;
	text-align: left;
	color: #fff;
	transform: translate(0, -50%);
	font-family: system-ui;
	display: none;
}

.slide .item:nth-child(2) .content{
	display: block;
}

.content .name {
	font-size: 40px;
	text-shadow: 2px 2px 40px black;
	text-transform: uppercase;
	font-weight: bold;
	opacity: 0;
	animation: animate 1s ease-in-out 1 forwards;
}

.content .details {
	font-size: 18px;
	text-shadow: 2px 2px 20px black;
	margin-top: 10px;
	margin-bottom: 20px;
	opacity: 0;
	animation: animate 1s ease-in-out 0.3s 1 forwards;
}




@keyframes animate {
	from{
		opacity: 1;
		transform: translate(0, 100px);
		filter: blur(33px);
	}

	to{
		opacity: 1;
		transform: translate(0);
		filter: blur(0);
	}
}

.button {
	width: 100%;
	text-align: center;
	position: absolute;
	bottom: 20px;
}

.button button {
	width: 30px;
	height: 25px;
	border-radius: 5px;
	border: none;
	cursor: pointer;
	margin: 0 5px;
	transition: 0.3s
}

.button button:hover {
	background: #3275c7;
	color: #fff;
}


</style>
</head>


<body>

		<nav class="nav-bar">
			<ul>
				<li><a href="welcome.html">Home</a></li>
				<li><a href="packages.php">See Packages we Offer</a></li>
			</ul>
		</nav>
		

	<section class="country" id="destination">
		<div class="container">
	
			<div class="slide">
				<div class="item" style="background-image: url(destinationpic/asia.jpg);">
					<div class="content">
						<div class="name">Maldives</div>
					    <div class="details">A tropical haven with crystal-clear waters, luxurious overwater villas, and pristine coral reefs, perfect for relaxation.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/europe.jpg);">
					<div class="content">
						<div class="name">Paris</div>
					    <div class="details">Known as the "City of Love," Paris entices with its romantic charm, iconic Eiffel Tower, world-class art museums, and chic cafés.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/egypt.jpeg);">
					<div class="content">
						<div class="name">Egypt</div>
					    <div class="details">Famous for its ancient wonders like the Pyramids of Giza</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/antartica.jpg);">
					<div class="content">
						<div class="name">Antartic Peninsula</div>
					    <div class="details">A pristine wilderness of icy landscapes, towering glaciers, and abundant wildlife like penguins, seals, and whales, offering a once-in-a-lifetime adventure to the edge of the Earth.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/melbourne.jpg);">
					<div class="content">
						<div class="name">Melbourne</div>
					    <div class="details">Australia’s cultural hub, loved for its vibrant art scene, coffee culture, and iconic laneways.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/cartagena.jpg);">
					<div class="content">
						<div class="name">Cartagena</div>
					    <div class="details">A colonial gem of Colombia, Cartagena captivates with its colorful streets, historic forts, and Caribbean coastline.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/sanfrancisco.jpg);">
					<div class="content">
						<div class="name">San Francisco</div>
					    <div class="details">A city of innovation and beauty, it’s known for the Golden Gate Bridge, cable cars, and its diverse, vibrant neighborhoods.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/bali.jpg);">
					<div class="content">
						<div class="name">Bali</div>
					    <div class="details">An island paradise, Bali offers lush rice terraces, serene temples, and idyllic beaches, making it a haven for relaxation and spirituality.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/dubai.jpg);">
					<div class="content">
						<div class="name">Dubai</div>
					    <div class="details">Renowned for its luxury, skyscrapers like the Burj Khalifa, and shopping malls, Dubai is a symbol of modern ambition in a desert setting.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/fuji.jpg);">
					<div class="content">
						<div class="name">Fuji</div>
					    <div class="details">Japan’s iconic volcano, it’s a spiritual and natural symbol, often surrounded by cherry blossoms or snow-capped beauty.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/london.jpg);">
					<div class="content">
						<div class="name">London</div>
					    <div class="details">A global city of history and modernity, London attracts with landmarks like the Tower Bridge, Big Ben, and the British Museum.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/rome.jpg);">
					<div class="content">
						<div class="name">Rome</div>
					    <div class="details">The Eternal City, Rome is a treasure trove of history, from the Colosseum to the Vatican, intertwined with Italian cuisine and culture.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/santorini.jpg);">
					<div class="content">
						<div class="name">Santorini</div>
					    <div class="details">A Greek island famed for its whitewashed buildings, caldera views, and sunsets over the Aegean Sea.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/tajmahal.jpg);">
					<div class="content">
						<div class="name">Taj Mahal</div>
					    <div class="details">A symbol of love in India, this marble masterpiece is a UNESCO World Heritage Site and a testament to architectural beauty.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/wallchina.jpg);">
					<div class="content">
						<div class="name">The Great Wall of China</div>
					    <div class="details">A monumental feat of engineering and history, it winds through China’s mountains and countryside.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/sydney.jpg);">
					<div class="content">
						<div class="name">Sydney</div>
					    <div class="details">Known for its iconic Opera House and Harbour Bridge, Sydney combines vibrant city life with stunning coastal scenery.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/dongdaemun.jpg);">
					<div class="content">
						<div class="name">Dongdaemun</div>
					    <div class="details">A futuristic cultural hub designed by Zaha Hadid, hosting exhibitions, fashion shows, and markets.</div>
					    
				    </div>
			    </div>

			    <div class="item" style="background-image: url(destinationpic/gyeongbokgung.jpg);">
					<div class="content">
						<div class="name">Gyeongbokgung</div>
					    <div class="details">A majestic Joseon Dynasty palace with traditional architecture and daily changing-of-the-guard ceremonies.</div>
					    
				    </div>
			    </div>
			    <div class="item" style="background-image: url(destinationpic/kinabalu.jpeg);">
					<div class="content">
						<div class="name">Mount Kinabalu</div>
					    <div class="details">A UNESCO World Heritage Site, this iconic mountain is a paradise for hikers and nature enthusiasts. </div>
					    
				    </div>
			    </div>
			    <div class="item" style="background-image: url(destinationpic/kkmosque.jpg);">
					<div class="content">
						<div class="name">Kota Kinabalu City Mosque</div>
					    <div class="details">A stunning example of modern Islamic architecture, located on a man-made lagoon.</div>
					    
				    </div>
			    </div>
			  

			</div>
			<div class="button">
				<button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
				<button class="next"><i class="fa-solid fa-arrow-right"></i></button>
			</div>

		</div>
	</section>

	<script src="xdev.js"></script>
</body>
</html>