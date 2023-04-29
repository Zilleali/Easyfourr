
<header class="main-header">
  <nav class="navbar navbar-static-top bg-black">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand"><b>EasyFourr</b></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <!-- <ul class="nav navbar-nav">
          <li><a href="index.php">HOME</a></li>
          <li><a href="">ABOUT US</a></li>
          <li><a href="">CONTACT US</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">CATEGORY <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <?php
             
                $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM category");
                  $stmt->execute();
                  foreach($stmt as $row){
                    echo "
                      <li><a href='category.php?category=".$row['cat_slug']."'>".$row['name']."</a></li>
                    ";                  
                  }
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();

              ?>
            </ul>
          </li>
        </ul> -->
        <form method="POST" class="navbar-form navbar-left" action="search.php">
          <div class="input-group">
              <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search" required>
              <span class="input-group-btn" id="searchBtn" style="display:none;">
                  <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i> </button>
              </span>
          </div>
          <!-- <style>
            .form-control{
              border-radius: 10px;
            }
          </style> -->
        </form>
      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-shopping-cart"></i>
              <span class="label label-success cart_count"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <span class="cart_count"></span> item(s) in cart</li>
              <li>
                <ul class="menu" id="cart_menu">
                </ul>
              </li>
              <li class="footer"><a href="cart_view.php">Go to Cart</a></li>
            </ul>
          </li>
          <?php
            if(isset($_SESSION['user'])){
              $image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
              echo '
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="'.$image.'" class="user-image" alt="User Image">
                    <span class="hidden-xs">'.$user['firstname'].' '.$user['lastname'].'</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="'.$image.'" class="img-circle" alt="User Image">

                      <p>
                        '.$user['firstname'].' '.$user['lastname'].'
                        <small>Member since '.date('M. Y', strtotime($user['created_on'])).'</small>
                      </p>
                    </li>
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
              ';
            }
            else{
              echo "
                <li><a href='login.php'>LOGIN</a></li>
                <li><a href='signup.php'>SIGNUP</a></li>
              ";
            }
          ?>
        </ul>
      </div>
    </div>
    <div>
    <!-- partial:index.partial.html -->
<ul class="menu1 cleafix">
  <li class="parent">
    <a href="">Graphics & Design</a>
    <ul class="children">
      <li><a href=""><b>Logo & Brand Identify</b></a></li>
      <li><a href="">Logo Design</a></li>
      <li><a href="">Brand Style Guides</a></li>
      <li><a href="">Business Card & Stationary</a></li>
      <li><a href="">Font & Typography</a></li>
      <li><a href="">Logo Maker Tool</a></li>
      <br>
      <li><a href=""><b>Art & Illustraton</b></a></li>
      <li><a href="">Illustration</a></li>
      <li><a href="">Ai Artists</a></li>
    </ul>
  </li>
  <li class="parent">
    <a href="">Digital Marketing</a>
    <ul class="children">
    <li><a href=""><b>Search</b></a></li>
      <li><a href="">Search Engine Optimization (SEO)</a></li>
      <li><a href="">Search Engine Marketing (SEM)</a></li>
      <li><a href="">Local SEO</a></li>
      <li><a href="">Ecommerce SEO</a></li>
      <li><a href="">Video SEO</a></li>
    </ul>
  </li>
  <!-- <li><a href="">Writing & Translation</a></li> -->
  <li class="parent">
    <a href="">Writing & Translation</a>
    <ul class="children">
      <li><a href="">Article & Blog Posts</a></li>
      <li><a href="">Translation</a></li>
      <li><a href="">Proofreading Editing</a></li>
      <li><a href="">Resume Writing</a></li>
      <li><a href="">Cover Letter</a></li>
      <li><a href="">Linkedin Profiles</a></li>
    </ul>
  </li>
  <!-- <li><a href="">Link</a></li> -->
  <li class="parent">
    <a href="">Video & Animation</a>
    <ul class="children">
      <li><a href="">Video Editing</a></li>
      <li><a href="">Video Ads & Commericals</a></li>
      <li><a href="">Animated Explainers</a></li>
      <li><a href="">Character Animation</a></li>
      <li><a href="">Music video</a></li>
      <li><a href="">Logo Animation</a></li>
    </ul>
  </li>
  <li class="parent">
    <a href="">Programing & Tech</a>
    <ul class="children">
      <li><a href=""><b>Websites</b></a></li>
      <li><a href="">Website Development</a></li>
      <li><a href="">Website Maintenance</a></li>
      <li><a href="">Business Website</a></li>
      <li><a href="">E-Commerce Development</a></li>
      <li><a href="">Landing Pages</a></li>
      <li><a href="">Bloges</a></li>
    </ul>
  </li>
  <li class="parent">
    <a href="">Music & Audio</a>
    <ul class="children">
      <li><a href="">Item</a></li>
      <li><a href="">Item</a></li>
      <li><a href="">Item</a></li>
      <li><a href="">Item</a></li>
      <li><a href="">Item</a></li>
    </ul>
  </li>
  <li class="parent">
    <a href="">Ai Services</a>
    <ul class="children">
      <li><a href="">Item</a></li>
      <li><a href="">Item</a></li>
      <li><a href="">Item</a></li>
      <li><a href="">Item</a></li>
      <li><a href="">Item</a></li>
    </ul>
  </li>
  <li class="parent">
    <a href="">Business</a>
    <ul class="children">
      <li><a href="">Item</a></li>
      <li><a href="">Item</a></li>
      <li><a href="">Item</a></li>
      <li><a href="">Item</a></li>
      <li><a href="">Item</a></li>
    </ul>
  </li>
</ul>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  </div>
  </nav>

</header>

<style>
  .menu1 {
  /* display: inline-block; */
  margin: 0 auto;
  /* margin-top: 100px; */
  list-style-type: none;
}
.menu1 a {
  display: block;
  margin: 0;
  padding: 13px 28px;
  color: black;
  text-decoration: none;
  background-color: #fff;
}
.menu1 li {
  position: relative;
  float: left;
  margin: 0;
  border-left: 1px solid #eee;
  perspective: 200;
}
.menu1 li:first-child {
  border-left: none;
}
.menu1 li.parent:before {
  content: "";
  z-index: 200;
  position: absolute;
  top: 100%;
  left: 50%;
  margin-top: -4px;
  margin-left: -20px;
  display: block;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 8px 20px 0 20px;
  border-color: #fff transparent transparent transparent;
  transition: margin-top 0.1s ease-out;
}
.menu1 li:hover > a, .menu1 li:focus > a {
  text-decoration: none;
  color: #fff;
  background-color: #333;
}
.menu1 li:hover:before, .menu1 li:focus:before {
  margin-top: 0;
  border-top-color: #333;
}
.menu1 li:hover .children, .menu1 li:focus .children {
  opacity: 1;
  transform: rotateX(0) translateZ(0);
}
.menu1 .children {
  opacity: 0;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  transform: rotateX(-90deg);
  transform-style: preserve-3d;
  transform-origin: top center;
  transition: transform 0.4s cubic-bezier(0.17, 0.67, 0.59, 1.21), opacity 0.1s 0.1s;
  z-index: 100;
  list-style-type: none;
  position: absolute;
  top: 100%;
  left: 0;
  width: 200px;
  margin: 0;
  padding: 10px 0;
  background-color: #fff;
  box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.1);
  text-align: left;
}
.menu1 .children li {
  float: none;
}
.menu1 .children a {
  background-color: transparent;
}
.menu1 .children a:hover, .menu1 .children a:focus {
  color: #333;
  background-color: #f9f9f9;
}

.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}

/* body {
  background-color: #584E4A;
  text-align: center;
} */
</style>