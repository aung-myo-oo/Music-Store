<?php include("confs/auth.php") ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Categories list</title>
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
        <a href="logout.php">logout</a>
        </nav>
        <div id="main">
            <header class="w3-container w3-black">
                <span class="w3-opennav w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</span>
                <center><p style="font-size: 50px; letter-spacing: 4px;" class="w3-text-shadow" >Music List</p></center>
            </header>
        

            <div class="w3-card-24" id="card-size">
            <?php
                include ("confs/config.php");
                $result = mysql_query("SELECT music.name as music_name, music.writer as music_writer, music.price as music_price, category.name as category_name, artist.name as artist_name, albums.name as albums_name  FROM music,category,albums,artist where music.albums_id = albums.id and music.artist_id = artist.id and music.category_id = category.id; "); 
                ?>
                <ul>
                    <?php while($row = mysql_fetch_assoc($result)):?>
                    <li title="<?php echo $row['remark'] ?>">
                        <div class="ui inverted divider"></div>
                        <div class="row">
                            <div class="col-md-9">
                            <h2></h2>
                            <ul class="w3-ul w3-card-4" style="width:50%">
                              <li class="w3-padding-16">

                              <span class="w3-xlarge" style="letter-spacing: 3px;"><?php echo $row['music_name']?></span><br>
                                <span>Song writer: <?php echo $row['music_writer']; ?></span><br>
                                <span>Price: <?php echo $row['music_price'] ?></span><br>
                                <span>Albums: <?php echo $row['albums_name']?></span><br>
                                <span>Artist: <?php echo $row['artist_name']?></span><br>
                                <span>Category: <?php echo $row['category_name']?></span><br>
                              </li>

                            </ul>
                            </div>
                            <div class="col-md-3"><a href="music-del.php?id=<?php echo $row['id']?>;"  class="w3-btn w3-hover-red" id="right-btn">Delete</a>
                            <a href="music-edit.php?id=<?php echo $row['id']?>;" class="w3-btn w3-hover-blue">Edit</a></div>
                        </div>
                        <div class="ui inverted divider"></div>
                    </li>
                    <?php endwhile; ?><br><br>
                    <li><center><a href="music-new.php" class="w3-btn w3-hover-green" id="add-btn">New Category</a></center></li>
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