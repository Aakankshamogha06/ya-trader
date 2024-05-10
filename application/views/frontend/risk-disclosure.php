<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden">
  <head>
    
    <title>Risk Disclosure</title>
    <meta name="description" content="" />
    
    <link rel="stylesheet" href="<?=base_url()?>public/web/Assets/css/home/home.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous" />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>

    <!--CSS for Animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!--JS for Animation-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--Favicon-->
    <link
      rel="icon"
      type="image/png"
      href="<?=base_url()?>public/web/Assets/Images/header/Befund.svg" />
  </head>

  <body class="bg-color">
    <!-- Header -->
    <div id="myheader"></div>
    <!--Evaluation Models-->
    <div class="funding-models top-margin">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1
              class="heading text-center"
              class="container"
              data-aos="flip-up"
              data-aos-duration="1000">
              <b>Risk Disclosure</b>
            </h1>
            <p class="new-highlights mt-0 pt-2">
              Please read carefully the paragraph below, which describes
              FunderPro's risk disclosure policy.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="logo-box-2">
      <img src="<?=base_url()?>public/web/Assets/Images/See Why We Are - bg1.svg" alt="logo-box-2" />
    </div>

    <!-- content starts here -->
    <div class="seperate-bg py-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-10 offset-lg-1 text-black">
            <h2 class="mb-3 fw-semibold">Risk Disclosure</h2>
            <p class="pt-0">
              YaTrader content is intended to be generic in nature. A
              recommendation, endorsement, or sponsorship of any security,
              company, or fund is not intended by the Company’s information.
              Lesser-known clients or consumers may not be represented in
              testimonials on the Company’s websites. The Company, its partners,
              representatives, agents, employees, and contractors accept no
              responsibility or liability for any use or misuse of such
              information.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!--footer-->
    <div id="myfooter"></div>
    <script type="text/javascript">
      AOS.init();
      $(function () {
        $("#myheader").load("header.html");
        $("#myfooter").load("footer.html");
      });

      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 0) {
          $(".navbar-background").addClass("navbar-bg-new");
        } else {
          $(".navbar-background").removeClass("navbar-bg-new");
        }
      });
    </script>
  </body>
</html>
