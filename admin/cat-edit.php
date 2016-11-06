

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Categories</title>
        <link href="../Bootstrap file/css/bootstrap.min.css" rel="stylesheet">
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
            $result = mysql_query("SELECT * FROM category WHERE category_id=$id");
            $row = mysql_fetch_assoc($result);
        ?>
        <div id="main">
            <span class="w3-opennav w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</span>
                <div class="w3-card-24" id="card-login-size">
                    <div class="w3-container w3-black">
                        <h2>Edit Category</h2>
                    </div><br>
                    <form action="cat-update.php" method="post" class="w3-container">

                        <input type="hidden" name="id" value="<?php echo $row['category_id'] ?>">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="w3-input" placeholder="Enter username" name="name" value="<?php echo $row['name'];?>" required="">
                        </div>
                        <div class="form-group">
                            <label for="remark">Remark</label>
                            <textarea class="w3-input" name="remark" required=""><?php echo $row['remark'] ?></textarea>
                        </div>

                        <div class="extra content">
                            <input type="submit" class="w3-btn w3-hover-white" value="Update" name="submit">
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



    </body>
</html>
