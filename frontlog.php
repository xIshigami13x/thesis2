
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Front Login page</title>
	<style type="text/css">
		

		header{
	background-color: green;
    margin: 0px 0px 10px 0px;
    padding: 10px;
}
body{
	text-align: center;
	width: 100%;
	margin: 0 auto;
}
input{
   width: 50%;
	margin: 0 auto;
	padding: 10px;
	margin:5px;
	border-radius: 3px;
}

.image{
   float: left;
   width: 110px;
   height: 110px;
   margin-right:-70px;
   border-radius: 100%;
   
}

form{
	background-color: white;
	font-family: verdana,sans-serif;
	border: 1px solid black;
	width: 50%;
	margin:0 auto;
	margin-bottom:2rem;
	margin-top:3rem;
	padding-bottom:3rem;
	box-shadow: 5px 5px 8px gray;
	border-radius: 4px;

}
button{

	margin-top:2rem;
	padding: 8px 17px 8px 17px;
	background-color:green;
	color: white;
	border-radius: 4px;
}  
button:hover{
	background-color:lightgreen;
	color: black;
	border-radius: 4px;

}
.container{
	width: 65%;
	margin: 0 auto;
}
h1{
	color: white;
	font-family: verdana,sans-serif;
}
.h1{
	margin-bottom: 3rem;
	color: black;
}
footer{
	background-color:green;
	color: white;
	padding: 1px;
	margin-top: 13%;

}
a{
	text-decoration: none;
	color: white;
	background-color: green;
	border-radius: 4px;
}
a:hover{
	background-color: lightgreen;
	color: black;
}
.foot{
	margin-top: 17%;

}
.user{
	padding: 10px;
	padding-left: 100px;
	padding-right: 100px;
}
.personn{
	padding:10px;
	padding-left: 74px;
	padding-right: 74px;
}
.admin{
	padding: 10px;
	padding-left: 49px;
	padding-right: 49px;
}

</style>
</head>
<body>
<header>
   <img src="lgu.jpg" class="image">

	<h1><b>CONCEPCION TARLAC <br> BUSINESS PERMIT APPLICATION</b></h1></header>

<form class="Form" action="" method="post">
		<div class="container">
		<h1 class="h1">Login As</h1>

			<a class="user" href="login.php">USER</a>
			<br>
			<br>
			<br>
			<br>
			<a class="personn" href="personnellog.php">PERSONNEL</a>
			<br>
			<br>
			<br>
			<br>
         <a class="admin" href="adminlog.php">ADMINISTRATION</a>
         <br>
			<br>
			<br>



			
		</div>
	   </form>

</body>

<footer class="foot">
	
<p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p>
	
</footer>

</html>