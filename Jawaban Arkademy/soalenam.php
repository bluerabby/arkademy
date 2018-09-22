<?php
	include "koneksi/koneksi.php";
 	if (isset($_GET['id']))
	{
		$id = $_GET['id'];
	}
	else
	{
		die ("Error. No Id Selected! ");
	}

	$query = "SELECT A.`id`, A.`title`, A.`content`, A.`createdBy`, B.`comment` FROM `posts` A, `comments` B WHERE A.`id`= B.`postId` && A.`id`='$id'";
	print_r($query);
	$sql = mysqli_query ($conection,$query);
	$hasil = mysqli_fetch_assoc($sql);
	$id = $hasil['id'];
	$title = stripslashes ($hasil['title']);
	$content = nl2br(stripslashes ($hasil['content']));
	$createdBy = stripslashes ($hasil['createdBy']);
	$comments = nl2br(stripslashes ($hasil['comment']));

?>
