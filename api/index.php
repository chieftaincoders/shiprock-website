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
$tweets = $connection->get($twitter_path, ["q" => "@SHSChieftains", "count" => "2"]);
header("Content-type: application/json");

$simple_statuses = [];
$simple_status;

for ($i = 0; $i < count($tweets->statuses); $i ++) {

  $simple_status = new stdClass();
  $simple_status->text = $tweets->statuses[$i]->text;
  $simple_status->username = $tweets->statuses[$i]->user->screen_name;
  $simple_status->profile_pic = $tweets->statuses[$i]->user->profile_image_url;

  array_push($simple_statuses, $simple_status);
}
echo json_encode($simple_statuses);
// You may have to download and copy http://curl.haxx.se/ca/cacert.pem
