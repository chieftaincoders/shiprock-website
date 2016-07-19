<?php
require 'twitteroauth/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

// Use the data from http://dev.twitter.com/apps to fill out this info
// notice the slight name difference in the last two items)

$connection = new TwitterOAuth(
  '68vNsduCiOL5om8OxUfwijYAX', // consumer key
	'LPV81U8Wxj50j15gMLBg829k1Ob7Jy7SiVzPAR3gzB5JfIcs7F', // consumer secret
	'183857984-oBA7YEyaygNP0Wz2yn5ydO1JjMr5D76DTQPBOrAp', //access token
	'm2Ns2sEoY2THIGJgXtWdhT7QDpRezMsjzOXn3oqvFXrLE' //access token secret
);

$twitter_path = 'search/tweets';
$tweets = $connection->get($twitter_path, ["q" => "@SHSChieftains"]);
var_dump($tweets);

/*
if ($http_code === 200) { // if everything's good
	$response = strip_tags($connection->response['response']);

  header("Content-type: application/json");

	if ($_GET['callback']) { // if we ask for a jsonp callback function
		echo $_GET['callback'],'(', $response,');';
	} else {
		echo $response;
	}
} else {
  header("Content-type: application/json");
  var_dump($connection);

	//echo "Error ID: ",$http_code, "<br>\n";
	//echo "Error: ",$connection->response["error"], "<br>\n";
}
*/

// You may have to download and copy http://curl.haxx.se/ca/cacert.pem
