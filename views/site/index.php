<?php

use app\assets\IndexAsset;
use richardfan\widget\JSRegister;
use yii\helpers\Url;

IndexAsset::register($this);
?>

<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         Fav and touch icons
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <title>Buy And Sell In Lebanon</title>-->
<!-- Bootstrap core CSS -->
<!--        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

         Custom styles for this template
        <link href="assets/css/style.css" rel="stylesheet">

         styles needed for carousel slider
        <link href="assets/css/owl.carousel.css" rel="stylesheet">
        <link href="assets/css/owl.theme.css" rel="stylesheet">-->

<!-- Just for debugging purposes. -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!-- include pace script for automatic web page progress bar  -->

<!--        <script>
            paceOptions = {
                elements: true
            };
        </script>
        <script src="assets/js/pace.min.js"></script>-->
<!--    </head>
    <body>-->

<!-- display_ad -->
<!--<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4259799291168125"
     data-ad-slot="2311380138"
     data-ad-format="auto"
     data-full-width-responsive="true">

</ins>-->

<?php
JSRegister::begin([
    'id' => '1',
    'position' => static::POS_END
]);
?>

<script>


//    (adsbygoogle = window.adsbygoogle || []).push({});


</script>
<?php
//yii\helpers\VarDumper::dump(Url::toRoute(['site/category']));
//Url::toRoute(['product/view', 'id' => 42]);
//die();
JSRegister::end();
?>


<div id="wrapper">

    <!--            <div class="header">
                    <nav class="navbar   navbar-site navbar-default" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                        class="icon-bar"></span> <span class="icon-bar"></span></button>
                                <a href="index.html" class="navbar-brand logo logo-title">
                                     Original Logo will be placed here
                                    <span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span>
                                    BOOT<span>CLASSIFIED </span> </a></div>
                            <div class="navbar-collapse collapse">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="signup.html">Signup</a></li>
                                    <li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger"
                                                           href="post-ads.html">Post Free Add</a></li>
                                </ul>
                            </div>
                            /.nav-collapse
                        </div>
                         /.container-fluid
                    </nav>
                </div>-->
    <!-- /.header -->

    <!--            <div class="intro" style="background-image: url(images/bg3.jpg);">
                    <div class="dtable hw100">
                        <div class="dtable-cell hw100">
                            <div class="container text-center">
                                <h1 class="intro-title animated fadeInDown"> Find Classified Ads </h1>

                                <p class="sub animateme fittext3 animated fadeIn"> Find local classified ads on bootclassified in
                                    Minutes </p>

                                <div class="row search-row animated fadeInUp">
                                    <div class="col-lg-4 col-sm-4 search-col relative locationicon">
                                        <i class="icon-location-2 icon-append"></i>
                                        <input type="text" name="country" id="autocomplete-ajax"
                                               class="form-control locinput input-rel searchtag-input has-icon"
                                               placeholder="City/Zipcode..." value="">

                                    </div>
                                    <div class="col-lg-4 col-sm-4 search-col relative"><i class="icon-docs icon-append"></i>
                                        <input type="text" name="ads" class="form-control has-icon"
                                               placeholder="I'm looking for a ..." value="">
                                    </div>
                                    <div class="col-lg-4 col-sm-4 search-col">
                                        <button class="btn btn-primary btn-search btn-block"><i
                                                class="icon-search"></i><strong>Find</strong></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>-->
    <!-- /.intro -->

    <div class="main-container">
        <div class="container">

            <div class="col-lg-12 content-box ">
                <div class="row row-featured row-featured-category">
                    <div class="col-lg-12  box-title no-border">
                        <div class="inner"><h2><span>Browse by</span>
                                Category 
                                <a href="<?= Url::toRoute(['site/category']) ?>" class="sell-your-item"> View more <i
                                        class="  icon-th-list"></i> </a></h2>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="<?= Url::base() ?>/images/category/car-2.jpg" class="img-responsive" alt="img">
                            <h6> Vehicles </h6></a>
                    </div>

                    <!--                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                                                    <a href="category.html"><img src="<?= Url::base() ?>/images/category/laptop-2.jpg" class="img-responsive"
                                                                                 alt="img"> <h6> Laptops </h6></a>
                                                </div>-->

                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="<?= Url::base() ?>/images/category/mobile.jpg" class="img-responsive" alt="img">
                            <h6> Mobiles </h6></a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="<?= Url::base() ?>/images/category/tv.jpg" class="img-responsive" alt="img"> <h6>
                                Electronics </h6></a>
                    </div>

                    <!--                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                                                    <a href="category.html"><img src="<?= Url::base() ?>/images/category/hdd.jpg" class="img-responsive" alt="img">
                                                        <h6> Computer Accessories </h6></a>
                                                </div>-->

                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="<?= Url::base() ?>/images/category/house.jpg" class="img-responsive" alt="img">
                            <h6> Properties </h6></a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="<?= Url::base() ?>/images/category/Home-Electronics-Appliances-2.jpg"
                                                     class="img-responsive" alt="img"> <h6> Home Appliances </h6></a>
                    </div>

                    <!--                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                                                    <a href="category.html"><img src="<?= Url::base() ?>/images/category/camera.jpg" class="img-responsive" alt="img">
                                                        <h6> Cameras </h6></a>
                                                </div>-->

                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="<?= Url::base() ?>/images/category/fashion.jpg" class="img-responsive" alt="img">
                            <h6> Fashion & Beauty </h6></a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="<?= Url::base() ?>/images/category/toy.jpg" class="img-responsive" alt="img">
                            <h6> Kids & Baby Products </h6></a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="<?= Url::base() ?>/images/category/jobs.jpg" class="img-responsive" alt="img">
                            <h6> Jobs </h6></a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="<?= Url::base() ?>/images/category/catalog.jpg" class="img-responsive" alt="img">
                            <h6> Home & Furniture </h6></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="<?= Url::base() ?>/images/category/pets.png" class="img-responsive" alt="img">
                            <h6> Pets </h6></a>
                    </div>


                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="<?= Url::base() ?>/images/category/services.jpg" class="img-responsive" alt="img">
                            <h6> Services </h6></a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="<?= Url::base() ?>/images/category/industrial.png" class="img-responsive" alt="img">
                            <h6> Business and Industrial </h6></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="<?= Url::base() ?>/images/category/arts.jpg" class="img-responsive" alt="img">
                            <h6> Hobbies, Music, Art & Books </h6></a>
                    </div>

                </div>


            </div>

            <div style="clear: both"></div>
            <!--
                                <div class="col-lg-12 content-box ">
                                    <div class="row row-featured">
                                        <div class="col-lg-12  box-title ">
                                            <div class="inner"><h2><span>Sponsored </span>
                                                    Products <a href="category.html" class="sell-your-item"> View more <i
                                                            class="  icon-th-list"></i> </a></h2>


                                            </div>
                                        </div>

                                        <div style="clear: both"></div>

                                        <div class=" relative  content featured-list-row clearfix">

                                            <nav class="slider-nav has-white-bg nav-narrow-svg">
                                                <a class="prev">
                                                    <span class="nav-icon-wrap"></span>

                                                </a>
                                                <a class="next">
                                                    <span class="nav-icon-wrap"></span>
                                                </a>
                                            </nav>

                                            <div class="no-margin featured-list-slider ">
                                                <div class="item"><a href="ads-details-automobile.html">
                                                        <span class="item-carousel-thumb">
                                                            <img class="img-responsive" src="images/auto/2012-mercedes-benz-sls-amg.jpg" alt="img">
                                                        </span>
                                                        <span class="item-name"> 2011 Mercedes-Benz SLS AMG  </span>
                                                        <span class="price">  $204,990 </span>
                                                    </a>
                                                </div>

                                                <div class="item">

                                                    <a href="ads-details.html">
                                                        <span class="item-carousel-thumb">
                                                            <img class="img-responsive" src="images/item/tp/Image00011.jpg" alt="img">
                                                        </span>
                                                        <span class="item-name"> Lorem ipsum dolor sit amet </span>
                                                        <span class="price"> $ 260 </span>
                                                    </a>
                                                </div>

                                                <div class="item"><a href="ads-details.html">
                                                        <span class="item-carousel-thumb"> <img class="item-img"
                                                                                                src="images/item/tp/Image00006.jpg" alt="img"> </span>
                                                        <span class="item-name"> consectetuer adipiscing elit </span>
                                                        <span class="price"> $ 240 </span></a></div>


                                                <div class="item"><a href="ads-details.html">
                                                        <span class="item-carousel-thumb"> <img class="item-img"
                                                                                                src="images/item/tp/Image00022.jpg" alt="img"> </span>
                                                        <span class="item-name"> sed diam nonummy  </span> <span class="price"> $ 140</span></a>
                                                </div>

                                                <div class="item"><a href="ads-details.html">
                                                        <span class="item-carousel-thumb"> <img class="item-img"
                                                                                                src="images/item/tp/Image00013.jpg" alt="img">  </span><span
                                                            class="item-name"> feugiat nulla facilisis  </span> <span
                                                            class="price"> $ 140 </span></a></div>

                                                <div class="item"><a href="ads-details.html">
                                                        <span class="item-carousel-thumb"> <img class="item-img" src="images/item/3.jpg"
                                                                                                alt="img"> </span> <span class="item-name"> praesent luptatum zzril  </span>
                                                        <span class="price"> $ 220 </span></a></div>

                                                <div class="item"><a href="ads-details.html">
                                                        <span class="item-carousel-thumb"> <img class="item-img" src="images/item/4.jpg"
                                                                                                alt="img"> </span> <span class="item-name"> delenit augue duis dolore  </span>
                                                        <span class="price"> $ 120 </span></a></div>

                                                <div class="item"><a href="ads-details.html">
                                                        <span class="item-carousel-thumb"> <img class="item-img" src="images/item/6.jpg"
                                                                                                alt="img"> </span> <span class="item-name"> te feugait nulla facilisi </span>
                                                        <span class="price"> $ 251 </span></a></div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
            -->

            <!--                    <div class="col-lg-12 content-box ">
                                    <div class="row row-featured">

                                        <div style="clear: both"></div>

                                        <div class=" relative  content  clearfix">


                                            <div class="">
                                                <div class="tab-lite">

                                                     Nav tabs
                                                    <ul class="nav nav-tabs " role="tablist">
                                                        <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1"
                                                                                                  role="tab" data-toggle="tab"><i
                                                                    class="icon-location-2"></i> Top Locations</a></li>
                                                        <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab"
                                                                                   data-toggle="tab"><i class="icon-search"></i> Top Search</a>
                                                        </li>
                                                        <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab"
                                                                                   data-toggle="tab"><i class="icon-th-list"></i> Top Makes</a>
                                                        </li>
                                                    </ul>

                                                     Tab panes
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active" id="tab1">

                                                            <div class="col-lg-12 tab-inner">

                                                                <div class="row">
                                                                    <ul class="cat-list col-sm-3  col-xs-6 col-xxs-12">
                                                                        <li><a href="category.html">Atlanta</a></li>
                                                                        <li><a href="category.html"> Dallas </a></li>
                                                                        <li><a href="category.html"> New York </a></li>
                                                                        <li><a href="category.html">Santa Ana/Anaheim </a></li>
                                                                        <li><a href="category.html">Wichita </a></li>
                                                                        <li><a href="category.html"> Anchorage </a></li>

                                                                        <li><a href="category.html"> Miami </a></li>
                                                                        <li><a href="category.html">Los Angeles</a></li>
                                                                    </ul>

                                                                    <ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                                        <li><a href="category.html">Boston </a></li>
                                                                        <li><a href="category.html">Houston</a></li>
                                                                        <li><a href="category.html">Salt Lake City </a></li>
                                                                        <li><a href="category.html">Virginia Beach </a></li>
                                                                        <li><a href="category.html"> San Diego </a></li>

                                                                        <li><a href="category.html">San Francisco </a></li>
                                                                        <li><a href="category.html">Tampa </a></li>
                                                                        <li><a href="category.html"> Washington DC </a></li>

                                                                    </ul>

                                                                    <ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                                        <li><a href="category.html">Virginia Beach </a></li>
                                                                        <li><a href="category.html"> San Diego </a></li>
                                                                        <li><a href="category.html">San Francisco </a></li>
                                                                        <li><a href="category.html">Tampa </a></li>
                                                                        <li><a href="category.html"> Washington DC </a></li>
                                                                        <li><a href="category.html">Boston </a></li>
                                                                        <li><a href="category.html">Houston</a></li>
                                                                        <li><a href="category.html">Salt Lake City </a></li>


                                                                    </ul>

                                                                    <ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">

                                                                        <li><a href="category.html">Salt Lake City </a></li>
                                                                        <li><a href="category.html">San Francisco </a></li>
                                                                        <li><a href="category.html">Tampa </a></li>
                                                                        <li><a href="category.html"> Washington DC </a></li>
                                                                        <li><a href="category.html">Virginia Beach </a></li>
                                                                        <li><a href="category.html"> San Diego </a></li>
                                                                        <li><a href="category.html">Boston </a></li>
                                                                        <li><a href="category.html">Houston</a></li>

                                                                    </ul>

                                                                </div>

                                                            </div>


                                                        </div>
                                                        <div role="tabpanel" class="tab-pane" id="tab2">

                                                            <div class="col-lg-12 tab-inner">

                                                                <div class="row">

                                                                    <ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                                        <li><a href="category.html">Virginia Beach </a></li>
                                                                        <li><a href="category.html"> San Diego </a></li>
                                                                        <li><a href="category.html">Boston </a></li>
                                                                        <li><a href="category.html">Houston</a></li>
                                                                        <li><a href="category.html">Salt Lake City </a></li>
                                                                        <li><a href="category.html">San Francisco </a></li>
                                                                        <li><a href="category.html">Tampa </a></li>
                                                                        <li><a href="category.html"> Washington DC </a></li>

                                                                    </ul>


                                                                    <ul class="cat-list col-sm-3  col-xs-6 col-xxs-12">
                                                                        <li><a href="category.html">Atlanta</a></li>
                                                                        <li><a href="category.html">Wichita </a></li>
                                                                        <li><a href="category.html"> Anchorage </a></li>
                                                                        <li><a href="category.html"> Dallas </a></li>
                                                                        <li><a href="category.html"> New York </a></li>
                                                                        <li><a href="category.html">Santa Ana/Anaheim </a></li>
                                                                        <li><a href="category.html"> Miami </a></li>
                                                                        <li><a href="category.html">Los Angeles</a></li>
                                                                    </ul>

                                                                    <ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                                        <li><a href="category.html">Virginia Beach </a></li>
                                                                        <li><a href="category.html"> San Diego </a></li>
                                                                        <li><a href="category.html">Boston </a></li>
                                                                        <li><a href="category.html">Houston</a></li>
                                                                        <li><a href="category.html">Salt Lake City </a></li>
                                                                        <li><a href="category.html">San Francisco </a></li>
                                                                        <li><a href="category.html">Tampa </a></li>
                                                                        <li><a href="category.html"> Washington DC </a></li>

                                                                    </ul>

                                                                    <ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                                        <li><a href="category.html">Virginia Beach </a></li>
                                                                        <li><a href="category.html"> San Diego </a></li>
                                                                        <li><a href="category.html">Boston </a></li>
                                                                        <li><a href="category.html">Houston</a></li>
                                                                        <li><a href="category.html">Salt Lake City </a></li>
                                                                        <li><a href="category.html">San Francisco </a></li>
                                                                        <li><a href="category.html">Tampa </a></li>
                                                                        <li><a href="category.html"> Washington DC </a></li>

                                                                    </ul>


                                                                </div>

                                                            </div>


                                                        </div>
                                                        <div role="tabpanel" class="tab-pane" id="tab3">

                                                            <div class="col-lg-12 tab-inner">

                                                                <div class="row">


                                                                    <ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                                        <li><a href="category.html">Virginia Beach </a></li>
                                                                        <li><a href="category.html"> San Diego </a></li>
                                                                        <li><a href="category.html">Boston </a></li>
                                                                        <li><a href="category.html">Houston</a></li>
                                                                        <li><a href="category.html">Salt Lake City </a></li>
                                                                        <li><a href="category.html">San Francisco </a></li>
                                                                        <li><a href="category.html">Tampa </a></li>
                                                                        <li><a href="category.html"> Washington DC </a></li>

                                                                    </ul>


                                                                    <ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                                        <li><a href="category.html">Virginia Beach </a></li>
                                                                        <li><a href="category.html"> San Diego </a></li>
                                                                        <li><a href="category.html">Boston </a></li>
                                                                        <li><a href="category.html">Houston</a></li>
                                                                        <li><a href="category.html">Salt Lake City </a></li>
                                                                        <li><a href="category.html">San Francisco </a></li>
                                                                        <li><a href="category.html">Tampa </a></li>
                                                                        <li><a href="category.html"> Washington DC </a></li>

                                                                    </ul>


                                                                    <ul class="cat-list col-sm-3  col-xs-6 col-xxs-12">
                                                                        <li><a href="category.html">Atlanta</a></li>
                                                                        <li><a href="category.html">Wichita </a></li>
                                                                        <li><a href="category.html"> Anchorage </a></li>
                                                                        <li><a href="category.html"> Dallas </a></li>
                                                                        <li><a href="category.html"> New York </a></li>
                                                                        <li><a href="category.html">Santa Ana/Anaheim </a></li>
                                                                        <li><a href="category.html"> Miami </a></li>
                                                                        <li><a href="category.html">Los Angeles</a></li>
                                                                    </ul>

                                                                    <ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                                        <li><a href="category.html">Virginia Beach </a></li>
                                                                        <li><a href="category.html"> San Diego </a></li>
                                                                        <li><a href="category.html">Boston </a></li>
                                                                        <li><a href="category.html">Houston</a></li>
                                                                        <li><a href="category.html">Salt Lake City </a></li>
                                                                        <li><a href="category.html">San Francisco </a></li>
                                                                        <li><a href="category.html">Tampa </a></li>
                                                                        <li><a href="category.html"> Washington DC </a></li>

                                                                    </ul>


                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>

                                    </div>
                                </div>-->


            <div class="row">


                <div class="col-sm-9 page-content col-thin-right">
                    <div class="inner-box category-content">
                        <h2 class="title-2">Find Classified Ads World Wide </h2>

                        <div class="row">
                            <div class="col-md-4 col-sm-4 ">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i class="fa fa-car ln-shadow"></i>
                                            Vehicles<span class="count">277,959</span> </a>

                                        <span data-target=".cat-id-1" data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse in cat-id-1">
                                        <li><a href="category.html">Cars for Sale </a></li>
                                        <li><a href="category.html">Cars for Rent </a></li>
                                        <li><a href="category.html">Vehicles Accessories </a></li>
                                        <li><a href="category.html">Spare Parts </a></li>
                                        <li><a href="category.html">Number Plates </a></li>
                                        <li><a href="category.html">Motorcycles</a></li>
                                        <li><a href="category.html">Trucks and Buses</a></li>
                                        <li><a href="category.html">Boats</a></li>
                                        <li><a href="category.html">Other Vehicles</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i class="icon-home ln-shadow"></i>
                                            Property <span class="count">228,705</span></a> <span data-target=".cat-id-2"
                                                                                              data-toggle="collapse"
                                                                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span></h3>


                                    <ul class="cat-collapse collapse in cat-id-2">
                                        <li><a href="category.html">Apartments and Villas for Rent</a></li>
                                        <li><a href="category.html">Apartments and Villas for Sale </a></li>
                                        <li><a href="category.html"> Commercial For Sale </a></li>
                                        <li><a href="category.html">Commercial for Rent </a></li>
                                        <li><a href="category.html">Chalet and Cabins </a></li>
                                        <li><a href="category.html">Lands </a></li>
                                        <li><a href="category.html">Building and Multiple Units </a></li>
                                        <li><a href="category.html">Rental Wanted</a></li>
                                        <li><a href="category.html">Rooms for Rent</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i class="icon-home ln-shadow"></i>
                                            Jobs <span class="count">6375</span></a>

                                        <span data-target=".cat-id-3" data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse in cat-id-3">
                                        <li><a href="category.html">Job Seekers</a></li>
                                        <li><a href="category.html">Job Available </a></li>

                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                                class="fa fa-briefcase ln-shadow"></i> Services <span
                                                class="count">45,526</span></a>
                                        <span data-target=".cat-id-4" data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse in cat-id-4">
                                        <li><a href="category.html">Home Improvement and Repair</a></li>
                                        <li><a href="category.html">Personal Services</a></li>
                                        <li><a href="category.html">Corporate Services</a></li>
                                        <li><a href="category.html">Vehicle Repair Services</a></li>
                                        <li><a href="category.html">Transportation and logistics Services</a></li>
                                        <li><a href="category.html">IT,Design and Printing Services</a></li>
                                        <li><a href="category.html">Other Services</a></li>

                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                                class="glyphicon glyphicon-phone ln-shadow"></i> Mobile phones and Accessories <span
                                                class="count">26,529</span></a> <span data-target=".cat-id-5"
                                                                              data-toggle="collapse"
                                                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse in cat-id-5">
                                        <li><a href="category.html"> Mobile Phones </a></li>
                                        <li><a href="category.html"> Mobile Accessories </a></li>
                                        <li><a href="category.html"> Mobile Numbers </a></li>
                                        <li><a href="category.html"> Smart Watches </a></li>

                                    </ul>
                                </div>
                            </div>


                            <div class="col-md-4 col-sm-4">


                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                                class="icon-guidedog ln-shadow"></i> Pets <span class="count">42,111</span></a>
                                        <span data-target=".cat-id-6" data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse in cat-id-6">
                                        <li><a href="category.html">Animal and Pets Accessories</a></li>
                                        <li><a href="category.html">Cats</a></li>
                                        <li><a href="category.html">Dogs</a></li>
                                        <li><a href="category.html">Birds</a></li>
                                        <li><a href="category.html">Livestock</a></li>
                                        <li><a href="category.html">Horses</a></li>
                                        <li><a href="category.html">Fish</a></li>
                                        <li><a href="category.html">Other Animals and Pets</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                                class="glyphicon glyphicon-baby-formula ln-shadow"></i> Kids and Babies <span class="count">42,111</span></a>
                                        <span data-target=".cat-id-6" data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse in cat-id-6">
                                        <li><a href="category.html">Toys for Kids</a></li>
                                        <li><a href="category.html">Strollers and Seats</a></li>
                                        <li><a href="category.html">Kids and Babies Clothing</a></li>
                                        <li><a href="category.html">Cribs and Bedroom Furniture</a></li>
                                        <li><a href="category.html">Bathing Accessories</a></li>
                                        <li><a href="category.html">Feeding and nursing</a></li>
                                        <li><a href="category.html">Safety and Monitors</a></li>
                                        <li><a href="category.html">Others for Kids and Babies</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                                class="fas fa-running ln-shadow"></i>Sport and Equipments <span class="count">42,111</span></a>
                                        <span data-target=".cat-id-6" data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse in cat-id-6">
                                        <li><a href="category.html">Bicycles and Accessories</a></li>
                                        <li><a href="category.html">Outdoors and Camping</a></li>
                                        <li><a href="category.html">Gym,Fitness and Fighting sports</a></li>
                                        <li><a href="category.html">Ball Sports</a></li>
                                        <li><a href="category.html">Billiard and Similar Games</a></li>
                                        <li><a href="category.html">Ski and Winter Sports</a></li>
                                        <li><a href="category.html">Water Sports and Diving</a></li>
                                        <li><a href="category.html">Tennis and Rocket Sports</a></li>
                                        <li><a href="category.html">Other Sports</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list ">
                                    <h3 class="cat-title"><a href="category.html"><i
                                                class=" fas fa-chair ln-shadow"></i> Home Furniture and Decor <span
                                                class="count">5,30</span> </a> <span data-target=".cat-id-8"
                                                                             data-toggle="collapse"
                                                                             class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse in cat-id-8">
                                        <li><a href="category.html">Living Room </a></li>
                                        <li><a href="category.html">Bedroom</a></li>
                                        <li><a href="category.html">Dining Room </a></li>
                                        <li><a href="category.html">Kitchen and Kitchenware </a></li>
                                        <li><a href="category.html">Bathroom</a></li>
                                        <li><a href="category.html">Home Decoration and Accessories</a></li>
                                        <li><a href="category.html">Other Home Furniture and Decor</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4   last-column">

                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                                class="fa fa-industry ln-shadow"></i> Business and Industrial <span class="count">42,111</span></a>
                                        <span data-target=".cat-id-6" data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse in cat-id-6">
                                        <li><a href="category.html">Restaurants Equipment</a></li>
                                        <li><a href="category.html">Industrial and Construction Equipment</a></li>
                                        <li><a href="category.html">Medical and Wellbeing Equipment</a></li>
                                        <li><a href="category.html">Retail and Shop Equipment</a></li>
                                        <li><a href="category.html">Business Opportunities and Shops Liquidation</a></li>
                                        <li><a href="category.html">Other Business and Industrial</a></li>

                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                                class="glyphicon glyphicon-music ln-shadow"></i>  Hobbies, Music, Art & Books <span class="count">42,111</span></a>
                                        <span data-target=".cat-id-6" data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse in cat-id-6">
                                        <li><a href="category.html">Antiques and Collectibles</a></li>
                                        <li><a href="category.html">Musical Instruments</a></li>
                                        <li><a href="category.html">Books</a></li>
                                        <li><a href="category.html">Movies and Music</a></li>
                                        <li><a href="category.html">Games and Hobies</a></li>
                                        <li><a href="category.html">Tickets and Vouchers</a></li>
                                        <li><a href="category.html">Stationary and Study Tools</a></li>
                                        <li><a href="category.html">Other items</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                                class="icon-guidedog ln-shadow"></i> Pets <span class="count">42,111</span></a>
                                        <span data-target=".cat-id-6" data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse in cat-id-6">
                                        <li><a href="category.html">Animal and Pets Accessories</a></li>
                                        <li><a href="category.html">Cats</a></li>
                                        <li><a href="category.html">Dogs</a></li>
                                        <li><a href="category.html">Birds</a></li>
                                        <li><a href="category.html">Livestock</a></li>
                                        <li><a href="category.html">Horses</a></li>
                                        <li><a href="category.html">Fish</a></li>
                                        <li><a href="category.html">Other Animals and Pets</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                                class="glyphicon glyphicon-tree-deciduous ln-shadow"></i> Planting and Food <span class="count">42,111</span></a>
                                        <span data-target=".cat-id-6" data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse in cat-id-6">
                                        <li><a href="category.html">Garden</a></li>
                                        <li><a href="category.html">Food</a></li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="inner-box has-aff relative">
                        <a class="dummy-aff-img" href="category.html"><img src="<?= Url::base() ?>/images/aff2.jpg" class="img-responsive"
                                                                           alt=" aff"> </a>

                    </div>
                </div>
                <div class="col-sm-3 page-sidebar col-thin-left">
                    <aside>
                        <div class="inner-box no-padding">
                            <div class="inner-box-content"><a href="https://play.google.com/store/apps/details?id=com.musta.buyandsellinlebanon"><img class="img-responsive"
                                                                                                                                                      src="<?= Url::base() ?>/images/site/app.jpg" alt="tv"></a>
                            </div>
                        </div>
                        <div class="inner-box">
                            <h2 class="title-2">Popular Categories </h2>

                            <div class="inner-box-content">
                                <ul class="cat-list arrow">
                                    <?php
                                    for ($i = 0; $i < sizeof($popularCategories); $i++) {
                                        ?>
                                        <li><a href="<?= $popularCategories[$i]["categoryId"] ?>"> <?= $popularCategories[$i]["categoryName"] ?> ( <?= $popularCategories[$i]["count"] ?>) </a></li>


                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                        <div class="inner-box no-padding"><img class="img-responsive" src="<?= Url::base() ?>/images/add2.jpg" alt="">
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- /.main-container -->

    <div class="page-info hasOverly" style="background: url(<?= Url::base() ?>/images/bg.jpg); background-size:cover">
        <div class="bg-overly">
            <div class="container text-center section-promo">
                <div class="row">
                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-group"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>2200</span></h5>

                                    <div class="iconbox-wrap-text">Trusted Seller</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-th-large-1"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>100</span></h5>

                                    <div class="iconbox-wrap-text">Categories</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6  col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-map"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>700</span></h5>

                                    <div class="iconbox-wrap-text">Location</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon icon-facebook"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>50,000</span></h5>

                                    <div class="iconbox-wrap-text"> Facebook Fans</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- /.page-info -->

    <div class="page-bottom-info">
        <div class="page-bottom-info-inner">

            <div class="page-bottom-info-content text-center">
                <h1>If you have any questions, comments or concerns, please call the Classified Advertising department
                    at (000) 555-5555</h1>
                <a class="btn  btn-lg btn-primary-dark" href="tel:+000000000">
                    <i class="icon-mobile"></i> <span class="hide-xs color50">Call Now:</span> (000) 555-5555 </a>
            </div>

        </div>
    </div>


    <div class="footer" id="footer">
        <div class="container">
            <ul class=" pull-left navbar-link footer-nav">
                <li><a href="index.html"> Home </a> <a href="about-us.html"> About us </a> <a href="#"> Terms and
                        Conditions </a> <a href="#"> Privacy Policy </a> <a href="contact.html"> Contact us </a> <a
                        href="faq.html"> FAQ </a>
            </ul>
            <ul class=" pull-right navbar-link footer-nav">
                <li> &copy; 2015 BootClassified</li>
            </ul>
        </div>

    </div>
    <!-- /.footer -->
</div>
<!-- /.wrapper -->

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
<!--        <script src="assets/bootstrap/js/bootstrap.min.js"></script>-->

<!-- include carousel slider plugin  -->
<!--        <script src="assets/js/owl.carousel.min.js"></script>

 include equal height plugin
<script src="assets/js/jquery.matchHeight-min.js"></script>

 include jquery list shorting plugin plugin
<script src="assets/js/hideMaxListItem.js"></script>

 include jquery.fs plugin for custom scroller and selecter
<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>


 include custom script for site
<script src="assets/js/script.js"></script>

<script>


</script>


 include jquery autocomplete plugin

<script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/usastates.js"></script>

<script type="text/javascript" src="assets/plugins/autocomplete/autocomplete-demo.js"></script>-->


<!--    </body>
</html>-->
