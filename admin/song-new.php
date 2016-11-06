<?php include("confs/auth.php") ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Song</title>
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

    <div id="main">
     <span class="w3-opennav w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</span>
        <div class="w3-card-2" id="card-login-size">
            <div class="w3-container w3-black">
            <p style="font-size: 50px; letter-spacing: 4px;" align="center">New Song</p>
            </div><br>
            <form class="w3-container" action="song-add.php" method="post">
                <label for="songname">Song Name</label>
                <select name="music_id" class="w3-btn w3-hover-white">
                    <option>--Choice--</option>
                    <?php
                        include ("confs/config.php");
                        $result = mysql_query("SELECT music_id, name FROM music");
                        while($row = mysql_fetch_assoc($result)):
                    ?>
                    <option value="<?php echo $row['music_id']?>"><?php echo $row['name'] ?></option>
                    <? endwhile; ?>
                </select>
                <br><br>
                <label for="artist">Artist</label>
                <select name="artist_id" class="w3-btn w3-hover-white">
                    <option>--Choice--</option>
                    <?php
                        include ("confs/config.php");
                        $result = mysql_query("SELECT artist_id, name FROM artist");
                        while($row = mysql_fetch_assoc($result)):
                    ?>
                    <option value="<?php echo $row['artist_id']?>"><?php echo $row['name'] ?></option>
                    <? endwhile; ?>
                </select>
                <br><br>
                <label for="albums">Albums</label>
                <select name="albums_id" class="w3-btn w3-hover-white">
                    <option>--Choice--</option>
                    <?php
                        include ("confs/config.php");
                        $result = mysql_query("SELECT albums_id, name FROM albums");
                        while($row = mysql_fetch_assoc($result)):
                    ?>
                    <option value="<?php echo $row['albums_id']?>"><?php echo $row['name'] ?></option>
                    <? endwhile; ?>
                </select>
                <br><br>
                <label for="category">Category</label>
                <select name="category_id" class="w3-btn w3-hover-white">
                    <option>--Choice--</option>
                    <?php
                        include ("confs/config.php");
                        $result = mysql_query("SELECT category_id, name FROM category");
                        while($row = mysql_fetch_assoc($result)):
                    ?>
                    <option value="<?php echo $row['category_id']?>"><?php echo $row['name'] ?></option>
                    <? endwhile; ?>
                </select>
                <br><br>
                <div class="extra content">
                    <input type="submit" class="w3-btn w3-hover-white" value="Add" name="submit">
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
