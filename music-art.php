<?php
  session_start();
  include("admin/confs/config.php");

  if(isset($_GET['art'])) {
  $art_id = $_GET['art'];
  $music = mysql_query("SELECT song.song_id AS song_id, song.music_id AS smusic_id,
    song.artist_id AS sartist_id, song.albums_id AS salbums_id, song.category_id AS scategory_id,
    albums.albums_id AS albums_id, albums.name AS albums_name, artist.artist_id AS artist_id,
    artist.name AS artist_name, category.category_id AS category_id, category.name AS category_name,
    category.remark AS category_remark, music.music_id AS music_id, music.name AS music_name, music.writer AS music_writer,
    music.size AS music_size, music.cover AS music_cover, music.link AS music_link FROM song,music,category,artist,albums
    WHERE song.music_id = music.music_id AND song.artist_id = artist.artist_id AND song.albums_id = albums.albums_id AND song.category_id = category.category_id
 AND artist.artist_id = $art_id");

  } else {
    $music = mysql_query("SELECT song.song_id AS song_id, song.music_id AS smusic_id,
      song.artist_id AS sartist_id, song.albums_id AS salbums_id, song.category_id AS scategory_id,
      albums.albums_id AS albums_id, albums.name AS albums_name, artist.artist_id AS artist_id,
      artist.name AS artist_name, category.category_id AS category_id, category.name AS category_name,
      category.remark AS category_remark, music.music_id AS music_id, music.name AS music_name, music.writer AS music_writer,
      music.size AS music_size, music.cover AS music_cover, music.link AS music_link FROM song,music,category,artist,albums
      WHERE song.music_id = music.music_id AND song.artist_id = artist.artist_id AND song.albums_id = albums.albums_id AND song.category_id = category.category_id");
  }

?>



<!DOCTYPE html>
<html>
<head>

	<title>Music Skull</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="css/music-css.css">
	<style type="text/css">
		html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

	</style>
</head>
<body>


<? $art = mysql_query("select * from artist") ?>
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/mancity.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4 class="w3-padding-0"><b>SKULL</b></h4>
  </div>
  <a href="index.php" class="w3-padding">HOME</a>
  <a href="#" class="w3-padding">ABOUT</a>
  <a href="#" class="w3-padding">SHARE</a>

  <ul style="list-style-type:none;">
  <h3>Music List</h3>
  <? while($artist = mysql_fetch_assoc($art)):?>
  <li><a href="music-art.php?art=<?php echo $artist['artist_id'] ?>" class="w3-padding"><?php echo $artist['name']?></a></li>
  <? endwhile; ?>

  </ul>


  <div class="w3-section w3-padding-top w3-large">
    <a href="#" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-facebook-official"></i></a>
    <a href="#" class="w3-hover-white w3-hover-text-red w3-show-inline-block"><i class="fa fa-pinterest-p"></i></a>
    <a href="#" class="w3-hover-white w3-hover-text-light-blue w3-show-inline-block"><i class="fa fa-twitter"></i></a>
    <a href="#" class="w3-hover-white w3-hover-text-grey w3-show-inline-block"><i class="fa fa-flickr"></i></a>
    <a href="#" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-linkedin"></i></a>
  </div>
</nav>


<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px; background-color:#EEEEEE">

  <!-- Header -->
  <header class="w3-container">
    <a href="#"><img src="img_avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars">_.-._</i></span>
    <h1><b>My Portfolio</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> <br>
      <a href="music.php" class="w3-btn w3-white w3-hover-black">ALL</a>
      <a href="music-cat.php" class="w3-btn w3-white w3-hover-black">Category</a>
      <a href="music-art.php" class="w3-btn w3-white w3-hover-black">Artsit</a>
      <a href="music-alb.php" class="w3-btn w3-white w3-hover-black">Albums</a>
    </div>
  </header>



  <ul style="list-style-type:none;">
    <?php while($row = mysql_fetch_assoc($music)):?>
      <li style="padding:5%;">
        <div class="w3-row">
          <div class="w3-col m6">
            <? if(!is_dir("admin/cover/{$row['music_cover']}") and file_exists("admin/cover/{$row['music_cover']}")): ?>
              <img src="admin/cover/<?php echo $row['music_cover'] ?>" alt="" align="center" name="cover" style="width:90%; margin-top:5%;" class="w3-card-4">
            <? else: ?>
              <img src="admin/cover/no-cover.gif" alt="" align="center" >
            <? endif; ?>
          </div>
          <div class="w3-col m6 w3-center">
            <div class="w3-section w3-border w3-round-xlarge" style="padding:10px">
							<table class="w3-table w3-striped">
                <tr>
                  <th width="20%">Song</th>
                  <td><?php echo $row['music_name']?></td>
                </tr>
                <tr>
                  <th width="20%">Artist</th>
                  <td><?php if($row['sartist_id'] == $row['artist_id']) echo $row['artist_name']?></td>
                </tr>
                <tr>
                  <th width="20%">Album</th>
                  <td><?php echo $row['albums_name']?></td>
                </tr>
                <tr>
                  <th width="20%">Writer</th>
                  <td><?php echo $row['music_writer']?></td>
                </tr>
                <tr>
                  <th width="20%">Category</th>
									<td><?php echo $row['category_name']?></td>
                </tr>
                <tr>
                  <th width="20%">Size</th>
                  <td><?php echo $row['music_size']?>&nbsp;MB</td>
                </tr>
                <tr>
                <td  colspan="2"><button class="w3-btn-block w3-light-grey" width="100%">Download</button></td>
                </tr>
              </table>
            </div>

          </div>
        </div>
      </li>
    <?php endwhile; ?>

  </ul>


</div>


<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>


</body>
</html>
