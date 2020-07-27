


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Articles</title>
	<link rel="stylesheet" href="article.css">
</head>
<body>
	<header>
		<div><img src="img\logo-newspaper-cf.png"></div>
		<div><a href="http://www.codefactory.wien"><img id="banner1" src="img\banner-1.png"></a></div>
	</header>

	<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="#tech.html">Tech</a></li>
			<li><a href="#culture.html">Culture</a></li>
			<li><a href="#video.html">Video</a></li>	
		</ul>
	</nav>

	<div class="bg-success">
        <h1>Serris Jokes</h1>
    <?php
require_once 'RESTful.php';
// $url = 'http://api.serri.codefactory.live/random';
// $response = curl_get($url);
// $xml = simplexml_load_string($response);
// //foreach ($xml->channel->item as $item) {


//Jokes Serri
$response = curl_get('http://api.serri.codefactory.live/random/');
//var_dump($response); //to see type and variable (string, xml...)
$result = json_decode($response); // string to object
//var_dump($result);
//echo $response;
echo $result->joke;
//echo "<h4> . $result ->joke; . </h4>";

?>
    


    </div>
    
<div id="wrapper">
<div id="news1">
<h1>News Technology BBC</h1>
<?php
require_once 'RESTful.php';
$url = 'http://feeds.bbci.co.uk/news/technology/rss.xml';
$response = curl_get($url);
$xml = simplexml_load_string($response);
foreach ($xml->channel->item as $item) {
echo '<div class="art">';
echo '<a href="'.$item->link.'" target="_blank">'.$item->title.'</a><br>';
echo '</div>';
}
?>

<!-- <div class="art">
	<h2>NASA is trying to squash conspirancy theories about the space station lead</h2>
	<img class="image" src="img\nasa.png" alt="NASA">
	<article>
	<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	
	</p></article>	
</div> -->
</div>


<div id="news2">
<h1>News Technology CNN</h1>
<?php
require_once 'RESTful.php';
$url = 'http://rss.cnn.com/rss/edition_technology.rss';
$response = curl_get($url);
$xml = simplexml_load_string($response);
foreach ($xml->channel->item as $item) {
echo '<div class="art">';
echo '<a href="'.$item->link.'" target="_blank">'.$item->title.'</a><br>';
echo '</div>';
}
?>

</div>

</div>

<footer>
	<div id="navbar">		
		<ul>
			<li><a href="#index.html">Home</a></li>
			<li><a href="#tech.html">Tech</a></li>
			<li><a href="#culture.html">Culture</a></li>
			<li><a href="#video.html">Video</a></li>	
		</ul>
	</div>

	<div id="logo2">
		<img id="logo" src="img\logo-newspaper-cf.png">
	</div>

	<div id="name">
		<p> Manuela - CodeFactory 2020</p>
	</div>


</footer>

</body>
</html>