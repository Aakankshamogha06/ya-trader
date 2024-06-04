<?php
$this->load->helper('url');

$current_uri = uri_string();
$segments = explode('/', $current_uri);
$page_name = end($segments);

$seo_data = $this->Seo_model->getseo_data($page_name);
$seo_data_blog = $this->Blog_detail_model->blog_detail_data_seo($page_name);
$seo_title = "YaTrader - Best Forex Broker | Prop Trading Firm"; // Default title

$meta_description = '';
$keywords = '';

if ($seo_data) {
    $row = reset($seo_data);
    $seo_title = htmlspecialchars($row->title);
    $keywords = htmlspecialchars($row->keywords);
    $meta_description = htmlspecialchars($row->meta_description);
}

// Check for blog SEO data separately
if ($seo_data_blog) {
    foreach ($seo_data_blog as $row) {
        $seo_title = htmlspecialchars($row->title);
        $meta_description = htmlspecialchars($row->meta_description);
        $keywords = htmlspecialchars($row->keywords);
    }
}
?>

<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-ML79SJZF');</script>
  <!-- End Google Tag Manager -->
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="_3QOGR0gdyj0JomXSgQlMX24AWsMxL7f_k3fORwaSDs" />
  <title><?=$seo_title?></title>
    <meta name="description" content="<?=$meta_description?>"/>
    <meta name="keywords" content="<?=$keywords?>" />
    <
  <!--Styles-->
  <link rel="stylesheet" href="<?=base_url()?>public/web/Assets/css/header/header.css">
  <!--Bootsrap Link-->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZRET0LXQPH"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-ZRET0LXQPH');
    </script>
    <link rel="stylesheet" href="<?=base_url()?>public/web/Assets/css/home/home.css" />

</head>

<body class="bg-color">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns?id=GTM-ML79SJZF"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!--Header-->
  <nav class="navbar navbar-expand-lg navbar-background fixed-top" id="sitenav">
    <div class="container">
      <a class="navbar-brand" href="./" style="margin-right: 0px;"><img
          src="<?=base_url()?>public/web/Assets/Images/header/yatrader-logo.png"
          style="height: 50px !important;" class="he-si"></a>
      <button class="navbar-toggler toggler-design" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation" id="sitetoggle">
        <i class="fa fa-bars nav-toggles" aria-hidden="true"></i>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-ul">
          <li class="nav-item si-lin-2">
            <a class="nav-link  si-lin" aria-current="page" href="./">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-links" href="<?=base_url()?>swing">Swing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-links" href="<?=base_url()?>regular">Regular</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-links" href="<?=base_url()?>affiliate">Affiliate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-links" href="<?=base_url()?>pricing">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-links" href="<?=base_url()?>payment">Payment Partner</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-links" href="<?=base_url()?>faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-links" href="<?=base_url()?>blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-links" href="https://prop.yatrader.io/signup" target="_blank">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-links-dd" href="https://prop.yatrader.io/" target="_blank">Client Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--EOF Header Section-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $("#sitetoggle").click(function () {
        $("#navbarSupportedContent").toggle();
      });
    });
  </script>
</body>

</html>

<body>

</body>

</html>