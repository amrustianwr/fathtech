<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>s</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/pkl/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/pkl/2.css">
    <script src="<?php echo base_url();?>/assets/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-fluid main">

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Website</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#">About</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
				</ul>
      </div>
    </div>
  </nav>

  <div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner" role="listbox">
      <div class="item active background a"></div>
      <div class="item background b"></div>
      <div class="item background c"></div>
    </div>
  </div>

  <div class="covertext">
    <div class="col-lg-10" style="float:none; margin:0 auto;">
      <h1 class="title animated fadeInLeft">Welcome</h1>
      <h3 class="subtitle">Jalanin aja sebisanya bro</h3>
    </div>
    <div class="col-xs-12 explore">
      <a href="#"><button type="button" class="btn btn-lg explorebtn">EXPLORE</button></a>
    </div>
  </div>

</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- konten modal-->
    <div class="modal-content">
      <!-- heading modal -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <!-- body modal -->
      <div class="modal-body">
        <input type="text" placeholder="Username" required>
        <input type="password" placeholder="Password">
        <input type="submit" value="Masuk">
        <p>Not a member? <span style="color:white;">Sign Up</span></p>
      </div>
      <!-- footer modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
      </div>
  </body>
</html>
