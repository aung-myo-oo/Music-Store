
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Song Edit</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/semantic.min.js"></script>

    <!-- Bootstrap -->
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
    <?php
            include ("confs/config.php");
            $id = $_GET['id'];
            $result = mysql_query("SELECT song_id, music_id, artist_id, albums_id, category_id FROM song WHERE song_id = $id");
            $row = mysql_fetch_assoc($result);
        ?>

    <div id="main">
     <span class="w3-opennav w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</span>
        <div class="w3-card-2" id="card-login-size">
            <div class="w3-container w3-black">
            <p style="font-size: 50px; letter-spacing: 4px;" align="center">Edit Song</p>
            </div><br>
            <form class="w3-container" action="song-update.php" method="post" enctype="multipart/form-data">
            		<input type="hidden" name="id" value="<?php echo $row['song_id'] ?>">

                <label>Song</label>
                <select name="music_id" class="w3-btn w3-hover-white">
                    <option>--Choice--</option>
                    <?php

                        $music = mysql_query("SELECT music_id, name FROM music");
                        while($mc = mysql_fetch_assoc($music)):
                    ?>
                  <option value="<?php echo $mc['music_id']?>"
                    <? if($mc['music_id'] == $row['music_id']) echo "selected" ?> >
                    <?php echo $mc['name'] ?>
                  </option>
                    <? endwhile; ?>
                </select>
                <br><br>

                <label>Artist</label>
                <select name="artist_id" class="w3-btn w3-hover-white">
                    <option>--Choice--</option>
                    <?php

                        $artist = mysql_query("SELECT artist_id, name FROM artist");
                        while($art = mysql_fetch_assoc($artist)):
                    ?>
                  <option value="<?php echo $art['artist_id']?>"
                    <? if($art['artist_id'] == $row['artist_id']) echo "selected" ?> >
                    <?php echo $art['name'] ?>
                  </option>
                    <? endwhile; ?>
                </select>
                <br><br>

                <label>Albums</label>
                <select name="albums_id" class="w3-btn w3-hover-white">
                    <option>--Choice--</option>
                    <?php

                        $albums = mysql_query("SELECT albums_id, name FROM albums");
                        while($alb = mysql_fetch_assoc($albums)):
                    ?>
                  <option value="<?php echo $alb['albums_id']?>"
                    <? if($alb['albums_id'] == $row['albums_id']) echo "selected" ?> >
                    <?php echo $alb['name'] ?>
                  </option>
                    <? endwhile; ?>
                </select>
                <br><br>

                <label>Category</label>
                <select name="category_id" class="w3-btn w3-hover-white">
                    <option>--Choice--</option>
                    <?php

                        $category = mysql_query("SELECT category_id, name FROM category");
                        while($cat = mysql_fetch_assoc($category)):
                    ?>
                  <option value="<?php echo $cat['category_id']?>"
                    <? if($cat['category_id'] == $row['category_id']) echo "selected" ?> >
                    <?php echo $cat['name'] ?>
                  </option>
                    <? endwhile; ?>
                </select>
                <br><br>








                <div class="extra content">
                    <input type="submit" class="w3-btn w3-hover-white" value="Update" name="update">
                </div>
            </form>
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





    <script src="../Bootstrap file/js/bootstrap.min.js"></script>
  </body>
</html>
