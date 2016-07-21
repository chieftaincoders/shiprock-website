/**
 * This file grabs twitter data and places it on the home page
 * * * * */

$.get("api/index.php", function(data) {

  for(var i = 0; i < data.length; i ++) {

    // Create some new html to contain the tweet
    var twitterPic = $("<img></img>");
    $(twitterPic).attr("src", data.profile_pic);
    $("#tweets").append(twitterPic);

    var twitterUsername = $("<p></p>");
    $(twitterUsername).html(data[i].username);
    $("#tweets").append(twitterUsername);

    var twitterStatus = $("<p></p>");
    $(twitterStatus).html(data[i].text);
    $("#tweets").append(twitterStatus);
  }
})
