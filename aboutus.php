<?php
require 'config.php';
if(!empty($_SESSION["ID"])){
	$id = $_SESSION["ID"];
	$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);	
}
else{
	header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<style type="text/css">


.h1{
margin-top: 5%;
margin-bottom: 50px;
color: darkgreen;
}

p{
	margin:10px;
	padding: 30px;
	color: green;
	margin-bottom: 40px;

}
h2{
	color: darkgreen;
	padding-left: 40px;
	
}
</style>

</head>
<body>
	<header><img src="lgu.jpg" height="8%" width="8%" class="logo">
		<h1><b>CONCEPCION TARLAC <br>BUSINESS PERMIT APPLICATION <br>
	   </b></h1>
	   
	   <a href="logout.php" class="logout">Logout</a>


<div class="navbar">
    <a href="index.php">Home</a>
    <a href="aboutus.php">About Us</a>
    <a href="track.php">Tracking</a>
</div>

</header>
<h1 class="h1">ABOUT CONCEPCION</h1><br>

<h2>Geography</h2>
<p>Concepcion is one of the largest municipalities of the province of Tarlac. It is 7.5 kilometers from the Capas junction along McArthur Highway. It lies on the southeastern tip of Tarlac, bordered in the south by Magalang, Pampanga, in the east by San Antonio, Nueva Ecija, in the northeast by La Paz, in the northwest by Tarlac City, in the west by Capas, and in the southwest by Bamban. It covers an area of 245.7 km² and populated by 103,081 (1990 NCSO Census) /115,138 (Municipal Survey) and recently last 2007 Census it has 135, 213 inhabitants . It has two great rivers, the first being Lucong river which originates from Dingding and Namria creeks in Capas, Tarlac is visible from the bridge at Barangay Santiago, it merges with the Rio Chico before joining the Pampanga River. The second is Parua river which originates from Sacobia-Bamban river that comes from Mount Pinatubo. Parua River is heavily silted with 7 meters of sand deposits, it’s bridge was destroyed by Lahar and is visible at Barangay San Nicolas Balas, it also merges with the Rio Chico before joining Pampanga River. Both rivers are utilized for irrigating agricultural lands of the town, consisting mainly of rice and sugar crops. Parua river which at times appears as a bed of sand due to the scarcity of water, is also a Quarry site for sand and Ash used as construction material etc.</p><br>


<h2>History</h2>
<p>In 1860, the towns of Concepcion and Magalang once comprised a single town named San Bartolome (presently an abandoned town and a barangay of Concepcion) which was a military “Commandancia” of Pampanga under the Spanish regime. A great inundation devastated the whole settlement of then San Bartolome in 1863 and the people were left with no other choice but to abandon the place. It was also at this point when the people were divided as to the place where they are to resettle. Some went North and others went South. The first group headed by Don Pablo Luciano, the Governadorcillo, organized its own settlement in the slope of Mt. Arayat down South and named the settlement after him. Eventually, the place was renamed Magalang. The second group who took refuge up North comprised the Santoses, Laxamanas, Salvadors, Yumuls, Castros, Dizons, Pinedas, Felicianos, Aquinos, Cortezes, Bermudezes, Perezes, and many others, and settled to a place (now called Sto. Nino) then occupied by the Lindos and the Amuraos (Don Esquolastiquo Amurao and Don Gaston Amurao), to be their new site. Most of the settlers became dissatisfied with the place as it abounds with snakes and was scarce in water. They moved further South to a place we now know as Concepcion. The settlers began clearing the land and built huts and roads. After several years, they named their place Concepcion, after the Immaculate Concepcion, who is believed to be miraculous and to possess power over snakes that abound the place.</p>

</body>
<footer><h5>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</h5></footer>
</html>



