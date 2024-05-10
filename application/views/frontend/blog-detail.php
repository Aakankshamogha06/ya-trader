<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden">
<head>
    <meta name="description" content="Don't miss out on gold's potential! This guide equips you with valuable technical analysis tools to identify trading signals and make informed decisions in the gold futures market." />
    <title>Gold Futures: Technical Analysis Guide</title>
    
    <link rel="stylesheet" href="<?=base_url()?>public/web/Assets/css/home/home.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!-- Removed duplicate script includes -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <!-- CSS for Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body class="bg-color">
    <!-- Header -->
    <div id="myheader"></div>
    <br><br><br><br><br><br>
    <!-- Evaluation Models -->
    <?php foreach($blog_detail_view as $row): ?>
    <div class="funding-models top-margin pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="heading text-center" data-aos="flip-up" data-aos-duration="1000" style="color: #ffc83d;"><b><?=$row->blog_name?></b></h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <section class="seperate-bg py-5 blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <figure>
                        <img src="<?=base_url('uploads/blog/').$row->blog_image;?>" alt="Gold Futures Technical Analysis By Yatrader" class="img-fluid w-100" />
                    </figure>
                    <div class="text-black">
                        <p><?=$row->blog_desc?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endforeach; ?>

    <!-- Footer -->
    <!-- <div id="myfooter"></div> -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
       

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
