<!DOCTYPE html>
<html>
<title>Book Library</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- css -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
/* Add some padding inside the card container */
td {
  text-align: center;
}
/* The navbar container */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Navbar links */
.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	text-align: center;
}
</style>

<!--Call jason-->
	<?php
		 $url = 'books.json'; // path to your JSON file
		 $data = file_get_contents($url); // put the contents of the file into a variable
		 $bookArray = json_decode($data,true); // decode the JSON feed
	?>
	
<body>
  <!-- Navbar (sit on top) -->
<div class="topnav">
    <div class="topnav">
      <a href="index.php" class="topnav"><b>Book</b>Library</a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="nav navbar-nav">
        <a href="index.php" class="w3-bar-item w3-button">Home</a>
        <a href="Contact.html" class="w3-bar-item w3-button">About me</a>
      </div>
    </div>
  </div>
  
<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image" src="banner.png" alt="Architecture" width="1500" height="800">
    <div class="w3-display-middle w3-margin-top w3-center">
      
  </header>
  
<!-- BookTable -->
  <div class="table-responsive">
<table class="table" style="width:100%">
	<tr>
		<?php 
      	$i = 1;
			foreach ($bookArray as $bookArrays) {
				echo '<td class="row">';
				echo '<a href="'.$bookArrays['link'].'"> <img src="'.$bookArrays['imageLink'] .'" style="width:250px;height:400px;"/></a>'.'<br>';
				echo "<b>Title : </b>", $bookArrays['title'].'<br>';
				echo "<b>Author : </b>",$bookArrays['author'].'<br>';	
				echo "<b>Year : </b>",$bookArrays['year'].'<br>';
				echo "<b>Language : </b>",$bookArrays['language'].'<br>';
				
				if($i % 3 == 0){
				 echo '</tr><tr>' ;
			   	}		   
			   	$i++;
			}	
		?>
  </table>
</div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
 <p> Suwatchai Kiatchalermporn</p>
</footer>
</body>
</html>
