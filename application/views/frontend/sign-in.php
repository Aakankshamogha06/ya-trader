<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign-in</title>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
        </script>
         <!--CSS for Animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--JS for Animation-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--Favicon-->
    <link rel="icon" type="image/png" href="<?=base_url()?>public/web/Assets/Images/header/Befund.svg"/>
</head>

<body class="bg-color">

    <!-- Header -->
    <div id="myheader"></div>
    <!--sign-in-->
    <div class="logo-box-1 top-margin">
        <img src="<?=base_url()?>public/web/Assets/Images/Join the Global Community_BG.svg" alt="logo-box-1">
    </div>


    <div class="container sign">
        <div class="row">
            <div class="col-lg-5 welcome">
                <h3 data-aos="flip-up" data-aos-duration="1000"><b>A new chapter in Investing</b></h3>
                <small>
                    <p data-aos="fade-up" data-aos-duration="500"><i class="h4-fund new-highlights">Welcome Back! Please Enter Your Details</i></p>
                </small>
                <div id="input_container">
                    <div class="input">
                        <div class="row" data-aos="fade-up" data-aos-duration="1000">
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-icon" id="input1">
                                    <img src="<?=base_url()?>public/web/Assets/Images/Google icon.svg" id="input_img1"><b>Login With
                                        Google</b></button>
                            </div>
                        </div>
                        <div class="row row2" data-aos="fade-up" data-aos-duration="1500">
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-icon" id="input2">
                                    <img src="<?=base_url()?>public/web/Assets/Images/Face book icon.svg" id="input_img2"><b>Login With
                                        Google</b></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row design-line">
                    <div class="col-md-12 text-center">
                        <img src="<?=base_url()?>public/web/Assets/Images/Or line.svg" width="300px" class="img1">
                    </div>
                </div>

                <form>
                    <div class="form-group">
                        <input type="email" class="form-control form-cont" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="E-mail Address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-cont" id="exampleInputPassword1"
                            placeholder="Password">
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-sm1 me-btn-new">Login</button>
                        </div>
                    </div>
                    <small class="form-text text-muted side-txt-one"><a href="" class="reg-link">Forgot
                            Password?</a></small>
                </form>
                <div class="side">
                    <small class="form-text text-muted text-center side-txt-two">Don't have account?<a
                            href="javascript:;" class="reg-link"> Register Now</a></small>
                </div>
                <div class="side1 text-center"><small>
                        2022 &copy; BeFundManager Site
                    </small>
                </div>
            </div>
            <div class="col-lg-4"  data-aos="fade-up" data-aos-duration="1000">
                <img src="<?=base_url()?>public/web/Assets/Images/Login Register img.svg" class="moun-image">
            </div>
            <div class="col-lg-3 head">
                <h3 class="head-txt"  data-aos="fade-down" data-aos-duration="1000"><b>Take an exclusive
                    dashboard tour and
                    explore</b></h3>
            </div>
        </div>
    </div>
    <div class="logo-box-1">
        <img src="<?=base_url()?>public/web/Assets/Images/Join the Global Community_BG.svg" alt="logo-box-1">
    </div>

    <!--footer-->
    <div id="myfooter"></div>
    <script type="text/javascript">
         AOS.init();
        $(function () {
            $("#myheader").load("header.html");
            $("#myfooter").load("footer.html");
        })
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 0) {
                $(".navbar-background").addClass("navbar-bg-new");
            }
            else {
                $(".navbar-background").removeClass("navbar-bg-new");
            }
        });
    </script>
</body>

</html>