<?php

/* One-click mySQL database builder for Thicket -- or you can do it yourself by clicking on Documentation at http://gyan.biz/thicket/ */

include('../config.php');
include('../dbconnect.php');

/* BUILD 'posts' */
$posts = mysqli_query($link, "SELECT * FROM posts");
while($therow = mysqli_fetch_array($posts)) {
	if ($therow['post_id']) {
		$postsexists = true;
	}
}
if (!$postsexists) {
	mysqli_query($link, "CREATE TABLE posts ( post_id varchar(45), name varchar(255), url text, content_type varchar(45), creator_id int(255), date_created int(255), description text, genre varchar (75) )");
}
else {
	echo "Already exists";
}

/* BUILD 'users' */
$users = mysqli_query($link, "SELECT * FROM users");
while($therow = mysqli_fetch_array($users)) {
	if ($therow['user_id']) {
		$usersexists = true;
	}
}
if (!$usersexists) {
	mysqli_query($link, "CREATE TABLE users ( user_id int(45), username varchar(255), email text, password varchar(255), power varchar(75) )");
}
else {
	echo "Already exists";
}

/* BUILD 'upvotes' */
$upvotes = mysqli_query($link, "SELECT * FROM upvotes");
while($therow = mysqli_fetch_array($upvotes)) {
	if ($therow['post_id']) {
		$upvotesexists = true;
	}
}
if (!$upvotesexists) {
	mysqli_query($link, "CREATE TABLE upvotes ( user_id int(45), post_id varchar(45) )");
}
else {
	echo "Already exists";
}


?>