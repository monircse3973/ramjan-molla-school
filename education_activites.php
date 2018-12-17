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
    </header>

<!-- About Section Start -->
<div id="education_activites">
    <div class="container">
       <div class="row">
        <div class="col-md-4 offset-md-2">
           <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">প্রাথমিক শাখা  : </div>
              <div class="card-body">
               * kids Zone (প্রাক প্রাথমিক শিক্ষা) । <br>
                * বাধ্যতামূলক কুরআন শিক্ষা । <br>
                * পি.এস. সি (প্রাথমিক শিক্ষা সমাপনী) । <br>
              </div>
            </div>
        </div>
        <div class="col-md-6">
             <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">মাধ্যমিক শাখা : </div>
              <div class="card-body">
                * এস.এস.সি (বিজ্ঞান/ব্যবসায় শিক্ষা/মানবিক) <br>
                * জে.এস.সি (জুনিয়র স্কুল সার্টিফিকেট )। <br>
                * একাডেমিক কোচিং । <br>
                * সবার জন্য কম্পিউটার শিক্ষা । <br>
              </div>
            </div>
        </div>
       
       </div>
       <div class="row">
        <div class="col-md-9 offset-md-1">
           <div class="card text-white bg-dark mb-3">
          <div class="card-header text-center">
          উচ্চ মাধ্যমিক শাখা :
        </div>
        <div class="card-body">
          * আধুনিক বিশ্বের চ্যালেঞ্জ গ্রহনের উপযুক্ত করে করে চোলার লক্ষ্যে । <br>
          * আন্তর্জাতিক মানের সিলেবাস ও শিক্ষা কার্যক্রম । <br>
          * সেমিস্টার ভিত্তিক পাঠদান । <br>
          * বর্তমান অসততা, আর্থ সামাজিক ও নৈতিক অবক্ষয়ের প্রেক্ষাপটে সৎ , আদর্শ নিস্টাবান এবং আলোকিত মানুষ তৈরি করা। <br>
          * শিক্ষার্থী ও পিতা মাতার লালিত স্বপ্ন বাস্তবায়নে সর্বাত্মক প্রচেষ্টার মাধ্যমে প্রতিটি শিক্ষারথী কে প্রস্তুত করে তার মধ্যে দৃঢ় আস্থা সৃষ্টি করা । <br>
          * ইন্টারনেট সুবিধাসহ অত্যাধুনিক কম্পিউটার ল্যাব। <br>
          * ধুমপান ও রাজনীতি মুক্ত নিরিবিলি ক্যাম্পাস । <br>
          * হাজী রমজান মোল্লা ট্রাস্ট হতে বৃত্তি ও মেয়েদের উপবৃত্তি প্রদান । <br>
          * S.S.C এর চেয়ে H.S.C তে ভালো ফলাফল করার নিশ্চয়তায় পাঠদান । <br>

        </div>
       
      </div>
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