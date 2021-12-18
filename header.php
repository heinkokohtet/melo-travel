 <!-- Start nav -->

<nav class="navbar navbar-expand-lg fixed-top navbar-light">
  <a href="index.php"><img src="images/logo.png" class="logo"></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="places.php">Places</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="about us.php">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>

      <?php

          if(!isset($_SESSION["login_user_name"])){
      ?>

      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>

      <?php }else {
        ?>

      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      
      <a class="nav-link text-success"><b><?php echo $_SESSION["login_user_name"] ?></b></a>
      

      <?php
      }

    ?>

      
    </ul>
    <form class="form-inline my-2 my-lg-0"  action="search.php" method="POST">

      <?php
      if(isset($_POST["search_data"]))
      {
        $search_value=$_POST["search_data"];
      }else
      {
        $search_value="";
      }

      ?>

      <input class="form-control mr-sm-2" name="search_data" type="search" placeholder="Search" aria-label="Search" style="border-radius: 20px;" required=""
      value="<?php echo $search_value;?>">      

    </form>
  </div>
</nav>

<!-- END nav -->

