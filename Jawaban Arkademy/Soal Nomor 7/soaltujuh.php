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
	//print_r($query);
	$sql = mysqli_query ($conection,$query);
	$hasil = mysqli_fetch_assoc($sql);
	$id = $hasil['id'];
	$title = stripslashes ($hasil['title']);
	$content = nl2br(stripslashes ($hasil['content']));
	$createdBy = stripslashes ($hasil['createdBy']);
	$comments = nl2br(stripslashes ($hasil['comment']));

?>
<html>
        <head>
        <title>Aplikasi Sederhana</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/custom-styles.css" rel="stylesheet" type="text/css">
        <link href="css/style-ie.css" rel="stylesheet" type="text/css">
        <style type="text/css">
body, td, th {
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
</style>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        </head>
        <body>
<div class="color-bar-1"></div>
<div class="color-bar-2 color-bg"></div>
<div class="span5 logo"></div>
<div class="span7 navigation">
          <div class="navbar hidden-phone">
    <ul class="nav">
              <li><a href="soaltujuh.php">HOME</a></li>
              <br/>
            </ul>
  </div>
        </div>
<br/>
<br/>
<br/>
<br/>
<div class="span7 headline">
          <h2>Blog7Arkademy</h2>
</div>
<div class="span7">
          <?php
	//tampilkan berita
		echo "<h4>$title<br></h4>";
		echo "<small>Berita dikirimkan oleh <b>".$createdBy."</b>";
    echo "<br>";
		echo "<p>".$content."</p>";
	?>
  </div>
  <div class="span7">
            <?php
  	//tampilkan berita
  		echo "<h4>Comments<br></h4>";
  		echo "<small>".$comments."</b>";
      echo "<br>";
  	?>
    </div>
</body>
</html>
</body>
</html>
