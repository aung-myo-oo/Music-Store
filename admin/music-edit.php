
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bootstrap 101 Template</title>
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
        <a href="logout.php">logout</a>
    </nav>
    <?php 
            include ("confs/config.php");
            $id = $_GET['id'];
            $result = mysql_query("SELECT music.* FROM music WHERE id = $id");
            $row = mysql_fetch_assoc($result);
        ?>
      
    <div id="main">
     <span class="w3-opennav w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</span>
        <div class="w3-card-2" id="card-login-size">
            <div class="w3-container w3-black">
            <p style="font-size: 50px; letter-spacing: 4px;" align="center">New Music</p>
            </div><br>
            <form class="w3-container" action="music-update.php" method="post" enctype="multipart/form-data">
            		<input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                <p>
                    <label>Song title</label>
                    <input name="name" class="w3-input" type="text" required="" value="<?php echo $row['name'];?>">
                </p>

                <p>
                    <label>Song writer</label>
                    <input type="text" class="w3-input" name="writer" required="" value="<?php echo $row['writer'];?>">
                </p>
                <p>
                    <label>Song Price</label>
                    <input type="text" class="w3-input" name="price" required="" value="<?php echo $row['price'];?>">
                </p>
                
                <label for="categories">Category &nbsp;</label>
                <select name="category_id" class="w3-btn w3-hover-white">
                    <option>--Choice--</option>
                    <?php 
                        $category = mysql_query("SELECT id, name FROM category");
                        while($cat = mysql_fetch_assoc($category)):
                    ?>
                    <option value="<?php echo $cat['id']?>"
                    <? if($cat['id'] == $row['category_id']) echo "selected" ?> >
                    <?php echo $cat['name'] ?></option>
                    <? endwhile; ?>
                </select>
                <br><br>
                <label for="artist">Artist &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select name="artist_id" class="w3-btn w3-hover-white">
                    <option>--Choice--</option>
                    <?php
                        $artist = mysql_query("SELECT id, name FROM artist");
                        while($art = mysql_fetch_assoc($artist)):
                    ?>
                    <option value="<?php echo $art['id']?>"
                    <? if($art['id'] == $row['artist_id']) echo "selected" ?> >
                    <?php echo $art['name'] ?></option>
                    <? endwhile; ?>
                </select>
               <br><br>
                <label for="albums">Albums &nbsp;&nbsp;&nbsp;</label>
                <select name="albums_id" class="w3-btn w3-hover-white">
                    <option>--Choice--</option>
                    <?php 
                        $albums = mysql_query("SELECT id, name FROM albums");
                        while($alb = mysql_fetch_assoc($albums)):
                    ?>
                    <option value="<?php echo $alb['id']?>"
                    <? if($alb['id'] == $row['albums_id']) echo "selected" ?> >
                    <?php echo $alb['name'] ?></option>
                    <? endwhile; ?>
                </select>
                <br><br>
                <? if(!is_dir("cover/{$row['cover']}") and file_exists("cover/{$row['cover']}")):?>
                 <img src="cover/<?php echo $row['cover'] ?>" alt="" height="150">
                  <? else: ?>
                  <img src="cover/no-cover.gif" alt="" height="150">
                <? endif; ?>
                <br><br>
                

                    <input type="file" name="cover" id="cover">
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
