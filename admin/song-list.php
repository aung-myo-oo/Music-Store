<?php include("confs/auth.php") ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Song list</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/semantic.min.js"></script>
        <link href="../Bootstrap file/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Semantic/semantic.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/w3.css" rel="stylesheet">
    </head>
    <body>
        <nav class="w3-sidenav w3-white w3-card-2" style="display:none" id="mySidenav">
            <a href="javascript:void(0)"
            onclick="w3_close()"
            class="w3-closenav w3-large">Close &times;</a>
            <a href="cat-new.php">New Category</a>
        <a href="cat-list.php">Category List</a>
        <a href="artist-new.php">New Artist</a>
        <a href="artist-list.php">Artist List</a>
        <a href="albums-new.php">New Albums</a>
        <a href="albums-list.php">Albums List</a>
        <a href="music-new.php">New Music</a>
        <a href="music-list.php">Music List</a>
        <a href="song-new.php">New Song</a>
        <a href="song-list.php">Song List</a>
        <a href="logout.php">logout</a>
        </nav>
        <div id="main">
            <header class="w3-container w3-black">
                <span class="w3-opennav w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</span>
                <center><p style="font-size: 50px; letter-spacing: 4px;" class="w3-text-shadow" >Song List</p></center>
            </header>


            <div class="w3-card-2" id="card-size">
            <?php
                include ("confs/config.php");
                 $result = mysql_query("SELECT song.song_id AS song_id, song.music_id AS smusic_id,
                   song.artist_id AS sartist_id, song.albums_id AS salbums_id, song.category_id AS scategory_id,
                   albums.albums_id AS albums_id, albums.name AS albums_name, artist.artist_id AS artist_id,
                   artist.name AS artist_name, category.category_id AS category_id, category.name AS category_name,
                   category.remark AS category_remark, music.music_id AS music_id, music.name AS music_name, music.writer AS music_writer,
                   music.size AS music_size, music.cover AS music_cover, music.link AS music_link FROM song,music,category,artist,albums
                   WHERE song.music_id = music.music_id AND song.artist_id = artist.artist_id AND song.albums_id = albums.albums_id AND song.category_id = category.category_id");


                ?>
                <ul>
                    <?php while($row = mysql_fetch_assoc($result)):?>
                    <li title="<?php echo $row['music_id'] ?>">
                        <div class="ui inverted divider"></div>
                        <div class="row" style="padding-right:15%">
                            <div class="col-md-3">
                                <? if(!is_dir("cover/{$row['music_cover']}") and file_exists("cover/{$row['music_cover']}")): ?>
                                  <img src="cover/<?php echo $row['music_cover'] ?>" alt="" align="center" width="100%" name="cover">
                                <? else: ?>
                                  <img src="cover/no-cover.gif" alt="" align="right" height="140">
                                <? endif; ?>
                            </div>
                            <div class="col-md-6" align="center">
                            <h2></h2>
                            <ul class="w3-ul w3-card-2" style="width:100%" align="left">
                              <li class="w3-padding-16">

                              <span class="w3-xlarge" style="letter-spacing: 3px;"><?php echo $row['music_name']?></span><br>
                                <span>Artist: <?php echo $row['artist_name']; ?></span><br>
                                <span>Albums: <?php echo $row['albums_name']; ?></span><br>
                                <span>writer: <?php echo $row['music_writer']; ?></span><br>
                                <span>Category: <?php echo $row['category_name']; ?></span><br>
                                <span>link: <?php echo $row['music_link']?></span><br>
                                <span>Size: <?php echo $row['music_size'] ?> &nbsp; MB</span><br>
                              </li>

                            </ul>
                            </div>
                            <div class="col-md-3"><a href="song-del.php?id=<?php echo $row['song_id']?>"  class="w3-btn w3-hover-red" id="right-btn">Delete</a>
                            <a href="song-edit.php?id=<?php echo $row['song_id'] ?>" class="w3-btn w3-hover-blue">Edit</a></div>
                        </div>
                        <div class="ui inverted divider"></div>
                    </li>
                    <?php endwhile; ?><br><br>
                    <li><center><a href="song-new.php" class="w3-btn w3-hover-green" id="add-btn">New Song</a></center></li>
                </ul>

            </div>
        </div>
        <script>
            function w3_open() {
              document.getElementById("main").style.marginLeft = "25%";
              document.getElementById("mySidenav").style.width = "25%";
              document.getElementById("mySidenav").style.display = "block";
              document.getElementById("openNav").style.display = 'none';
            }
            function w3_close() {
              document.getElementById("main").style.marginLeft = "0%";
              document.getElementById("mySidenav").style.display = "none";
              document.getElementById("openNav").style.display = "inline-block";
            }
        </script>
    </body>
</html>

<!--LIMIT $start, $limit-->
