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
                    <h3 data-aos="fade-right" data-aos-delay="300">>শুধু ভাল শিক্ষাই নয় , প্রকৃত মানুষ হিসেবে গড়ে তোলার  প্রত্যয়ে</h3>
                  
                 </div>  
              </div>
          </div>
    </header>

<!-- Contact section Start -->
<div class="container py-5">
      <div class="row" data-aos="fade-up" data-aos-duration="800">
          <div class="col-md-12">
              <form>
                  <div class="form-group row">
                      <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="আপনার নাম" required>
                      </div>
                          <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="আপনার মেইল" required>
                      </div>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="ফোন নাম্বার" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-md-12">
                          <textarea type="text" class="form-control" placeholder="আপনার অভিযোগ/ মতামত" rows="6" required></textarea>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary px-4">জমা দিন</button>
              </form>
          </div>
      </div>
     </div>

<!-- Contact section End -->

<!-- Footer -->
<?php include('footer.php'); ?>
<!-- Footer -->

   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
  </body>
</html>