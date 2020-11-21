<header>
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd; ">
    <a class="navbar-brand" href="index.php"style="color: black;">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li style="font-size: 20px;" class="nav-item">
          <a class="nav-link" href="allmovie.php"style="color: black;">All Movie</a>
        </li>
        <li class="nav-item dropdown">
          <a id="cat_id" class="nav-link dropdown-toggle" href="#" style="font-size:20px;color: black;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
            $category = mysqli_query($db, "SELECT * FROM tb_category");
            while ($data = mysqli_fetch_assoc($category)) {
            ?>
            <a class="dropdown-item" id="category_id" href="cat.php?id=<?php echo $data['cat_id']; ?>"><?php echo $data['cat_name']; ?></a>
            <?php }?>
          </div>
          <li style="font-size: 20px;" class="nav-item">
            <a class="nav-link" href="contact.php" style="color: black;">Contact</a>
          </li>
          <?php if(!isset($_SESSION['userAccess'])){ ?>
          <li style="font-size: 20px;" class="nav-item">
            <a class="nav-link" href="login.php" style="color: black;">Login/Registration</a>
          </li>
        <?php }else{ ?>
        <li style="font-size: 20px;" class="nav-item">
            <a class="nav-link" href="logout.php" style="color: black;">Logout</a>
          </li>
        <?php } ?>
        </li>
      </ul>
     
    </div>
  </nav>
</header>