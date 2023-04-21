<footer class="main-footer">
    <div class="container">

    <div class="col-sm-4 ">
          <h2><b>Catagories</b></h2><br>
          <ul><a href="">Graphics & Design</a></ul>
          <ul><a href="">Digital Marketing</a></ul>
          <ul><a href="">Writing & Translation </a></ul>
          <ul><a href="">Video & Animation</a></ul>
          <ul><a href="">Music & Audio</a></ul>
          <ul><a href="">Programing & Tech</a></ul>
          <ul><a href="">Data</a></ul>
        </div>

        <div class="col-sm-4">
          <h2><b>About</b></h2><br>
          <ul><a href="">Careers</a></ul>
          <ul><a href="">Press & news</a></ul>
          <ul><a href="">Partnership </a></ul>
          <ul><a href="">Privacy Policy</a></ul>
          <ul><a href="">Terms of Service</a></ul>
        </div>
        <div class="col-sm-4">
          <h2><b>Support</b></h2><br>
          <ul><a href="">Help & Support</a></ul>
          <ul><a href="">Trust & Safety</a></ul>
          <ul><a href="">Selling on EasyFour </a></ul>
        </div>
        </div>
        <br><br>
        <hr>
        
      <div class="pull-right hidden-xs">
      <div class="col-sm-6 social-menu">
  <ul>
  <li><a href="https://www.facebook.com/easyzon"><i class="fa fa-facebook"></i></a></li>
    <li><a href="https://twitter.com/easyzon"><i class="fa fa-twitter"></i></a></li>
    <li><a href="https://www.instagram.com/easyzon_"><i class="fa fa-instagram"></i></a></li>
    <li><a href="https://www.youtube.com/channel/UCC2TNxv-1GQhuHgjIDHMaeg/featured"><i class="fa fa-youtube"></i></a></li>
    <li><a href="https://www.linkedin.com/company/easyzon"><i class="fa fa-linkedin"></i></a></li>
  </ul>
</div>
      </div class="col-sm-6">
      <strong>Copyright &copy; 2023 Brought to You By <a href="https:/easyzon.us">EasyFour</a></strong>
    </div>
</footer>
<style>
  .col-sm-4 ul a{
  display: inline-block;
  position: relative;
  color: black;
  font-size: 18px;
}

.col-sm-4 ul a::after {
  content: '';
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: grey;
  transform-origin: bottom right;
  transition: transform 0.25s ease-out;
}

.col-sm-4 ul a:hover::after {
  transform: scaleX(1);
  transform-origin: bottom left;
}
/* body {
    background-color: #d8d8d8;
}
h1 {
  text-align: center;
} */
.social-menu ul {
    /* position: absolute; */
    top: 50%;
    left: 50%;
    transform: translate(-25%, -25%);
    padding: 0;
    margin: 0;
    display: flex;
}
.social-menu ul li {
    list-style: none;
    margin: 0 5px;
}
.social-menu ul li .fa {
    color: #000000;
    padding: 4px;
    font-size: 20px;
    /* line-height: 0px; */
    transition: .5s;
}
.social-menu ul li .fa:hover {
    color: #ffffff;
}
.social-menu ul li a {
    position: relative;
    display: block;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: white;
    text-align: center;
    transition: 0.5s;
    transform: translate(0,0px);
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 10.5);
}
.social-menu ul li a:hover {
    transform: rotate(0deg) skew(0deg) translate(0, -10px);
}
.social-menu ul li:nth-child(1) a:hover {
    background-color: #3b5999;
}
.social-menu ul li:nth-child(2) a:hover {
    background-color: #55acee;
}
.social-menu ul li:nth-child(3) a:hover {
    background-color: #e4405f;
}
.social-menu ul li:nth-child(4) a:hover {
    background-color: #cd201f;
}
.social-menu ul li:nth-child(5) a:hover {
    background-color: #0077B5;
}
</style>