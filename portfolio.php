<!doctype html>
<html lang="en">
  <head>
    <?php include('include/head.php'); ?>
    
  </head>
  <body>
<?php include('include/topnav.php'); ?>
    <!-- Navigation -->
    <?php include('include/navbar.php'); ?>

    <header class="banner">
         <div class="gradient"></div>
          <div class="container">
              <div class="row">
                 <div class="col-sm-12 heading">
                    <h3 data-aos="fade-right" data-aos-delay="300">শুধু ভাল শিক্ষাই নয় , প্রকৃত মানুষ হিসেবে গড়ে তোলার  প্রত্যয়ে</h3>
                  
                 </div>  
              </div>
          </div>
    </header><br><br>

<section id="portfolio">
   <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">
          <h2>ফটো গ্যালারী</h2><br><br>
              <div class="row" data-aos="fade-right" data-aos-duration="800">
                  <a href="images/slider/1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 box">
                      <img src="images/slider/1.jpg" class="img-fluid">
                        <div class="overlay">
                         <img src="images/plus-img.png" alt="plus-icon">
                         <!--  <div class="text">Beautiful Sunset at Mountain</div> -->
                        </div>
                  </a>
                  <a href="images/slider/2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 box">
                      <img src="images/slider/2.jpg" class="img-fluid">
                        <div class="overlay">
                         <img src="images/plus-img.png" alt="plus-icon">
                        <!--   <div class="text">Beautiful Sunset at Mountain</div> -->
                        </div>
                  </a>
                  <a href="images/slider/3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 box">
                      <img src="images/slider/3.jpg" class="img-fluid">
                        <div class="overlay">
                         <img src="images/plus-img.png" alt="plus-icon">
                        <!--   <div class="text">Beautiful Sunset at Mountain</div> -->
                        </div>
                  </a>
              </div>
              <div class="row" data-aos="fade-left" data-aos-duration="800">
                  <a href="images/slider/4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 box">
                   <img src="images/slider/4.jpg" class="img-fluid">
                     <div class="overlay">
                         <img src="images/plus-img.png" alt="plus-icon">
                         <!--  <div class="text">Beautiful Sunset at Mountain</div> -->
                     </div>
                  </a>
                  <a href="images/slider/5.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 box">
                   <img src="images/slider/5.jpg" class="img-fluid">
                     <div class="overlay">
                         <img src="images/plus-img.png" alt="plus-icon">
                        <!--   <div class="text">Beautiful Sunset at Mountain</div> -->
                     </div>
                  </a>
                  <a href="images/slider/6.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 box">
                   <img src="images/slider/6.jpg" class="img-fluid">
                     <div class="overlay">
                         <img src="images/plus-img.png" alt="plus-icon">
                         <!--  <div class="text">Beautiful Sunset at Mountain</div> -->
                     </div>
                  </a>
              </div>
              <div class="row" data-aos="fade-right" data-aos-duration="800">
                  <a href="images/slider/7.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 box">
                   <img src="images/slider/7.jpg" class="img-fluid">
                     <div class="overlay">
                         <img src="images/plus-img.png" alt="plus-icon">
                        <!--   <div class="text">Beautiful Sunset at Mountain</div> -->
                     </div>
                  </a>
                  <a href="images/slider/8.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 box">
                   <img src="images/slider/8.jpg" class="img-fluid">
                     <div class="overlay">
                         <img src="images/plus-img.png" alt="plus-icon">
                        <!--   <div class="text">Beautiful Sunset at Mountain</div> -->
                     </div>
                  </a>
                  <a href="images/slider/9.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 box">
                   <img src="images/slider/9.jpg" class="img-fluid">
                     <div class="overlay">
                         <img src="images/plus-img.png" alt="plus-icon">
                        <!--   <div class="text">Beautiful Sunset at Mountain</div> -->
                     </div>
                  </a>
              </div>
          </div>
      </div>
     <!--  <div class="load-more">
          <button type="button" class="btn btn-secondary">load more</button>
      </div> -->
   </div>
</section>

<!-- Footer -->
<?php include('footer.php'); ?>
<!-- Footer -->

   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
<script>
$('.carousel').carousel({
  interval: 2000
})
    
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
     <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
  </body>
</html>