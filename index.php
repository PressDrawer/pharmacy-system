<?php
include 'includes/header.php';
?>
<div class="row container-fluid">
    <div class="col-md-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="d-block w-100" src="images/pic1.jpg" alt="First slide">
    </div>

    <div class="item">
      <img class="d-block w-100" src="images/pic2.jpg" alt="Second slide">
    </div>

    <div class="item">
      <img class="d-block w-100" src="images/pic3.jpg" alt="Third slide">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>

</div>
<?php
include 'includes/footer.php';
?>