<!doctype html>
<html lang="en">
  <head>
    <?php include('include/head.php'); ?>

    <style type="text/css">
     
    </style>
    
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
    </header> <br>

<!-- About Section Start -->
<div id="about-us">
    <div class="container">
       <h3>আমাদের সম্পর্কে</h3>
        <div class="row" style="margin-right: 0; margin-left: 0;">
            <div data-aos="fade-up" data-aos-delay="300">
             <img src="images/slider/4.jpg" alt="about-bg" class="thumbnail image">

             <h4>উদ্দেশ্য ও লক্ষ্য </h4> 
              <span>মেধা , মনন ও সৃজনশীলতা বিকাশে বিজ্ঞানসম্মত যুগোপযোগী শিক্ষায় পাঠদানের মাধ্যমে প্রতিভাকে শানিত করে উচ্চ শিক্ষার  উদ্দেশ্যে শিক্ষার্থীর জ্ঞান সঞ্চারণ ও নতুন জ্ঞানের উদ্ভাবন এবং সেই সঙ্গে নৈতিক মুল্যবোধ সম্পন্ন দক্ষ জনশক্তি গড়ে তোলা    </span> <br> <br>

             <h4>শিক্ষা দান পদ্ধতি</h4> 
            
           <span>
             ন্যাশনাল কারিকুলাম  অনুসরনে পাঠ্য  বিষয়ে উদ্ভাসিত সমস্যা সমাধানে শিক্ষার্থীদের হাতে কলমে চিত্র , প্রদর্শনে  , কুইজ অভীক্ষা , প্রশ্নোত্তর , গ্রুপ স্টাডি এবং প্রজেক্টরের মাধ্যমে পাঠদান করা হয়।
           </span>   <br> <br>


          <h4>পরীক্ষা পদ্ধতি </h4>
              
         <span>
            শিক্ষার্থীদের ভাল ফলাফল করার লক্ষ্যে প্রতিটি বিষয়ে কারিকুলাম অনুযায়ী <br> বোর্ড স্ট্যান্ডার্ড প্রশ্ন দিয়ে অধ্যায় ভিত্তিক টিউটোরিয়াল পরিক্ষা , ক্লাস টেস্ট গ্রহন ও <br> মুল্যায়ন করা হয় 
         </span> 
              
           
             
            </div>
         </div>
    </div>
</div>
<!-- About Section End -->

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