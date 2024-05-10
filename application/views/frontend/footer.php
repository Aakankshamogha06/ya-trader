<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--Styles-->
    <link rel="stylesheet" href="<?=base_url()?>public/web/Assets/css/footer/footer.css">

    <!--Fontawesome-->
    <script src="https://kit.fontawesome.com/b8f7d9d833.js" crossorigin="anonymous"></script>

    <!--Bootsrap Link-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid footer-cont-align footer-bg footer-bg-bimg position-relative pt-5">
        <div class="container">
            <div class="row">
                <a href="<?=base_url()?>" class="footer-logo"><img src="<?=base_url()?>public/web/Assets/Images/header/yatrader-logo.png" style="height: 50px;"></a>
            </div>   
            <img src="<?=base_url()?>public/web/Assets/Images/Footer/hero-img-orange.svg" class="foot-img-align">    
            <div class="row footer-cont-row ms-0">
                <div class="col-lg-3 col-md-4 col-sm-12 justify-content-center">
                    <h2 class="text-light footer-heads">Contact Us</h2>
                    <ul class="footer-lists">
                        <li class="footer-li-space">
                            <a href="javascript:;" class="foter-links">support@yatrader.com</a>
                        </li>
                        <li class="footer-li-space">
                            <a href="javascript:;" class="foter-links">LiveChat</a>
                        </li>
                        <li class="footer-li-space">
                            <a href="javascript:;" class="foter-links">Messenger</a>
                        </li>
                    </ul>
                    <h2 class="text-light footer-heads">Follow Us On</h2>
                    <ul class="footer-lists social-media">
                        <li class="footer-li-space">
                            <i class="fa-brands fa-facebook-f footer-social"></i>
                            <a href="https://www.facebook.com/officialyatrader/" target="_blank" class="foter-links-down ps-0"> Facebook</a>
                        </li>
                        <li class="footer-li-space">
                            <!-- <i class="fa-brands fa-twitter footer-social"></i> -->
                            <i class="footer-social">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#fff"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                            </i>
                            <a href="https://twitter.com/yatrader__" target="_blank" class="foter-links-down ps-0"> Twitter</a>
                        </li>
                        <li class="footer-li-space">
                            <i class="fa-brands fa-instagram footer-social"></i>
                            <a href="https://www.instagram.com/officialyatrader/" target="_blank" class="foter-links-down ps-0"> Instagram</a>
                        </li>
                        <li class="footer-li-space">
                            <i class="fa-brands fa-linkedin footer-social"></i>
                            <a href="https://www.linkedin.com/company/officialyatrader/ " target="_blank" class="foter-links-down ps-0"> LinkedIn</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 justify-content-center">
                    <h2 class="text-light footer-heads">Important Links</h2>
                    <ul class="footer-lists">
                        <li class="footer-li-space">
                            <a href="<?=base_url()?>index" class="foter-links">Home</a>
                        </li>
                        <li class="footer-li-space">
                            <a href="<?=base_url()?>evaluation" class="foter-links">Evaluation</a>
                        </li>
                        <li class="footer-li-space">
                            <a href="<?=base_url()?>public/web/Affiliate" class="foter-links">Affiliate</a>
                        </li>
                        <li class="footer-li-space">
                            <a href="<?=base_url()?>express_funding" class="foter-links">Express</a>
                        </li>
                        <li class="footer-li-space">
                            <a href="<?=base_url()?>pricing" class="foter-links">Pricing</a>
                        </li>
                        <li class="footer-li-space">
                            <a href="<?=base_url()?>payment" class="foter-links">Payment Partner</a>
                        </li>
                        <!-- <li class="footer-li-space">
                            <a href="javascript:;" class="foter-links">Terms Of Service</a>
                        </li>
                        <li class="footer-li-space">
                            <a href="javascript:;" class="foter-links">Privacy policy</a>
                        </li>
                        <li class="footer-li-space">
                            <a href="javascript:;" class="foter-links">Cookie Policy</a>
                        </li> -->
                        <li class="footer-li-space">
                            <a href="<?=base_url()?>faq" class="foter-links">FAQ</a>
                        </li>
                        <li class="footer-li-space">
                            <a href="javascript:;" class="foter-links">Register</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 justify-content-center footer-heads-align">
                    <h2 class="text-light footer-heads">Models</h2>
                    <ul class="footer-lists">
                        <li class="footer-li-space">
                            <a href="<?=base_url()?>express_funding" class="foter-links">Express Model</a>
                        </li>
                        <li class="footer-li-space">
                            <a href="<?=base_url()?>evaluation" class="foter-links">Evaluation Model</a>
                        </li>
                    </ul>
                    
                    <h2 class="text-light footer-heads">Education</h2>
                    <ul class="footer-lists">
                        <li class="footer-li-space">
                            <a href="javascript:;" class="foter-links">Economic Calander</a>
                        </li>
                        <li class="footer-li-space">
                            <a href="javascript:;" class="foter-links">Proprietary Trading Firm</a>
                        </li>
                        <li class="footer-li-space">
                            <a href="blog" class="foter-links">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 justify-content-center footer-tab">
                    <h2 class="text-light footer-heads">Stay Updated</h2>
                    <ul class="footer-lists">
                        <li class="footer-li-space">
                            <h6 href="javascript:;" class="foter-links-small text-light">Subscribe to get all the exclusive updates
                                about</h6>
                        </li>
                        <li class="footer-li-space">
                            <h6 href="javascript:;" class="foter-links-small text-light">the forex trading industry from the industry
                                veterans.</h6>
                        </li>
                        <li class="footer-li-space">
                            <h6 href="javascript:;" class="foter-links-small text-light">We will even rush our selective podcasts and
                            </h6>
                        </li>
                        <li class="footer-li-space">
                            <h6 href="javascript:;" class="foter-links-small text-light">top-notch ebooks to your mailbox</h6>
                        </li>
                        <li class="footer-li-space mt-5">
                            <div class="input-group mb-3 input-sm footer-form-size">
                                <input type="text" class="form-control footer-form text-light" placeholder="Enter Your E-mail Address"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn footer-btn-subscribe" type="button" id="button-addon2">Subscribe</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-para">
                <p class="text-center text-light fs-6">
                    The information on the Website is provided solely for analysis purposes only and should not be construed
                    as financial, investment, tax, or other advice. Nothing on the Website
                    or in our Services represents a solicitation, advice, endorsement, or offer to purchase or sell stocks
                    or other financial instruments by YaTrader, its agents, employees,
                    contractors, or any connected entities. You are solely responsible for assessing the benefits and risks
                    associated with the use of any information or other content on the
                    Website. All investments include substantial risk, and an individual's investment decisions are solely
                    his/her obligation. All information on the Website is provided “as is”
                    , with no
                    guarantee of completeness, accuracy, timeliness, or of the results obtained from the use of this
                    information, and without warranty of any kind, express or implied. YaTrader,
                    or its partners, employees, or agents, shall in no way be responsible to you or anyone else for any
                    decision made or action taken in reliance on the information on the Website, or
                    for any consequential, special, or similar damages, even if warned of the potential of such damages.
                    Purchases should not be regarded as deposits. All program charges are
                    utilized for working expenses including, however not restricted to, staff, innovation, and other
                    business-related costs
                </p>
                <h4 class="text-center footer-copy fs-6">2024 © YaTrader Ltd. Made for the traders, by the traders</h4>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>

<body>

</body>

</html>