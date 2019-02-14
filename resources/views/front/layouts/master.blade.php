<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ICDBD - Institute of Creative Design Bangladesh</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('front') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('front') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('front') }}/https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('front') }}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('front') }}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('front') }}/lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
  <link href="{{ asset('front') }}/lib/hover/hoverex-all.css" rel="stylesheet">
  <link href="{{ asset('front') }}/lib/jetmenu/jetmenu.css" rel="stylesheet">
  <link href="{{ asset('front') }}/lib/owl-carousel/owl-carousel.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('front') }}/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('front') }}/css/colors/blue.css">

  <!-- =======================================================
    Template Name: MaxiBiz
    Template URL: https://templatemag.com/maxibiz-bootstrap-business-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <div class="topbar clearfix">
    <div class="container">
      <div class="col-lg-12 text-right">
        <div class="social_buttons">
          <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
          <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
          <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
          <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble"></i></a>
          <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa fa-rss"></i></a>
        </div>
      </div>
    </div>
    <!-- end container -->
  </div>
  <!-- end topbar -->

  <header class="header">
    <div class="container">
      <div class="site-header clearfix">
        <div class="col-lg-3 col-md-3 col-sm-12 title-area">
          <div class="site-title" id="title">
            <a href="{{ asset('front') }}/index.html" title="">
              <h4>I<span>CDBD</span></h4>
            </a>
          </div>
        </div>
        <!-- title area -->
        @include('front.layouts.menu')
        <!-- title area -->
      </div>
      <!-- site header -->
    </div>
    <!-- end container -->
  </header>
  <!-- end header -->

  <section id="intro">
    <div class="container">
      <div class="ror">
        <div class="col-md-8 col-md-offset-2">
          <h1>We Offer</h1>
        </div>
      </div>
    </div>
  </section>


 <section class="section1">
    <div class="container clearfix">
      <div class=" col-lg-12 col-md-12 col-sm-12 clearfix">

        <div class="divider"></div>

        

        <div class="portfolio-centered">
          <div class="recentitems portfolio">

            <div class="portfolio-item col-lg-4 col-md-4 col-sm-4 col-xs-12 mockups">
              <div class="he-wrap tpl6 market-item">
                <img src="{{asset('front')}}/img/erp_development.jpg" alt="">
                <div class="he-view">
                  <div class="bg a0" data-animate="fadeIn">
                    <h3 class="big a1" data-animate="fadeInDown">ERP Solution</h3>
                    <a data-rel="prettyPhoto" href="{{asset('front')}}/img/erp_development.jpg" class="dmbutton a2" data-animate="bounceInLeft"><i class="fa fa-search"></i></a>
                    <a href="javascript:void(0);" class="dmbutton a2" data-animate="bounceInRight"><i class="fa fa-link"></i></a>
                    <div class="portfolio_category text-center a2" data-animate="fadeIn">
                    </div>
                    <!-- portfolio_category -->
                  </div>
                  <!-- he bg -->
                </div>
                <!-- he view -->
              </div>
              <!-- he wrap -->
              <h3 class="title">ERP Solution</h3>
              <p>ERP software is considered to be a type of enterprise application, that is software designed to be used by larger businesses and often requires dedicated teams</p>
            </div>
            <!-- end col-4 -->

            <div class="portfolio-item col-lg-4 col-md-4 col-sm-4 col-xs-12 web-design graphic-design">
              <div class="he-wrap tpl6 market-item">
                <img src="{{asset('front')}}/img/absense.png" alt="">
                <div class="he-view">
                  <div class="bg a0" data-animate="fadeIn">
                    <h3 class="big a1" data-animate="fadeInDown">Office management system</h3>
                    <a data-rel="prettyPhoto" href="{{asset('front')}}/img/absense.png" class="dmbutton a2" data-animate="bounceInLeft"><i class="fa fa-search"></i></a>
                    <a href="javascript:void(0);" class="dmbutton a2" data-animate="bounceInRight"><i class="fa fa-link"></i></a>
                    <div class="portfolio_category text-center a2" data-animate="fadeIn">
                    </div>
                    <!-- portfolio_category -->
                  </div>
                  <!-- he bg -->
                </div>
                <!-- he view -->
              </div>
              <!-- he wrap -->
              <h3 class="title">Office management system</h3>
              <p>Office management is a profession involving the design, implementation, evaluation, and maintenance of the process of work within an office</p>
            </div>
            <!-- end col-4 -->

            <div class="portfolio-item col-lg-4 col-md-4 col-sm-4 col-xs-12 graphic-design">
              <div class="he-wrap tpl6 market-item">
                <img src="{{ asset('front') }}/img/pos.png" alt="">
                <div class="he-view">
                  <div class="bg a0" data-animate="fadeIn">
                    <h3 class="big a1" data-animate="fadeInDown">Restaurant POS</h3>
                    <a data-rel="prettyPhoto" href="{{ asset('front') }}/img/pos.png" class="dmbutton a2" data-animate="bounceInLeft"><i class="fa fa-search"></i></a>
                    <a href="javascript:void(0);" class="dmbutton a2" data-animate="bounceInRight"><i class="fa fa-link"></i></a>
                    <div class="portfolio_category text-center a2" data-animate="fadeIn">
                    </div>
                    <!-- portfolio_category -->
                  </div>
                  <!-- he bg -->
                </div>
                <!-- he view -->
              </div>
              <!-- he wrap -->
              <h3 class="title">Restaurant POS</h3>
              <p>Restaurant operators require easy, fast access to actionable information that helps them manage costs and make smart business decisions. The solution is a Internet-based back office tools….</p>
            </div>
            <!-- end col-4 -->

            <div class="portfolio-item col-lg-4 col-md-4 col-sm-4 col-xs-12 mockups">
              <div class="he-wrap tpl6 market-item">
                <img src="{{asset('front')}}/img/hr.png" alt="">
                <div class="he-view">
                  <div class="bg a0" data-animate="fadeIn">
                    <h3 class="big a1" data-animate="fadeInDown">HR Management System</h3>
                    <a data-rel="prettyPhoto" href="{{asset('front')}}/img/hr.png" class="dmbutton a2" data-animate="bounceInLeft"><i class="fa fa-search"></i></a>
                    <a href="javascript:void(0);" class="dmbutton a2" data-animate="bounceInRight"><i class="fa fa-link"></i></a>
                    <div class="portfolio_category text-center a2" data-animate="fadeIn">
                    </div>
                    <!-- portfolio_category -->
                  </div>
                  <!-- he bg -->
                </div>
                <!-- he view -->
              </div>
              <!-- he wrap -->
              <h3 class="title">HR Management System</h3>
              <p>Restaurant operators require easy, fast access to actionable information that helps them manage costs and make smart business decisions. The solution is a Internet-based back office tools….</p>
            </div>
            <!-- end col-12 -->

            <div class="portfolio-item col-lg-4 col-md-4 col-sm-4 col-xs-12 web-design">
              <div class="he-wrap tpl6 market-item">
                <img src="{{asset('front')}}/img/micro.png" alt="">
                <div class="he-view">
                  <div class="bg a0" data-animate="fadeIn">
                    <h3 class="big a1" data-animate="fadeInDown">Micro-finance ERP</h3>
                    <a data-rel="prettyPhoto" href="{{asset('front')}}/img/micro.png" class="dmbutton a2" data-animate="bounceInLeft"><i class="fa fa-search"></i></a>
                    <a href="javascript:void(0);" class="dmbutton a2" data-animate="bounceInRight"><i class="fa fa-link"></i></a>
                    <div class="portfolio_category text-center a2" data-animate="fadeIn">
                    </div>
                    <!-- portfolio_category -->
                  </div>
                  <!-- he bg -->
                </div>
                <!-- he view -->
              </div>
              <!-- he wrap -->
              <h3 class="title">Micro-finance ERP</h3>
              <p>The United IT Microfinance ERP is a Micro-Finance Management Software specially developed for the Microfinance Institutes, NGO’s and Cooperative Societies to automate their work-flow. This software features integrated …</p>
            </div>
            <!-- end col-12 -->

            <div class="portfolio-item col-lg-4 col-md-4 col-sm-4 col-xs-12 web-design">
              <div class="he-wrap tpl6 market-item">
                <img src="{{asset('front')}}/img/count.png" alt="">
                <div class="he-view">
                  <div class="bg a0" data-animate="fadeIn">
                    <h3 class="big a1" data-animate="fadeInDown">E-accounting</h3>
                    <a data-rel="prettyPhoto" href="{{asset('front')}}/img/count.png" class="dmbutton a2" data-animate="bounceInLeft"><i class="fa fa-search"></i></a>
                    <a href="javascript:void(0);" class="dmbutton a2" data-animate="bounceInRight"><i class="fa fa-link"></i></a>
                    <div class="portfolio_category text-center a2" data-animate="fadeIn">
                    </div>
                    <!-- portfolio_category -->
                  </div>
                  <!-- he bg -->
                </div>
                <!-- he view -->
              </div>
              <!-- he wrap -->
              <h3 class="title">E-accounting</h3>
              <p>E-accounting is the application of online and Internet technologies to the business accounting function. Similar to e-mail being an electronic version of traditional mail, e-accounting is “electronic enablement” of…</p>
            </div>
            <!-- end col-12 -->

          </div>
          <!-- portfolio -->
        </div>
        <!-- portfolio container -->
        <div class="divider"></div>
      </div>
      <!-- end container -->
  </section>
  <!-- end section -->

  <section class="section5">
    <div class="container">
      <div class="col-lg-6 col-md-6 col-sm-12 columns">
        <div class="widget" data-effect="slide-left">
          <img src="{{ asset('front') }}/img/slider_02.png" alt="">
        </div>
        <!-- end widget -->
      </div>
      <!-- large-6 -->
      <div class="col-lg-6 col-md-6 col-sm-12 columns">
        <div class="widget clearfix">
          <div class="services_lists">

            <div class="services_lists_boxes clearfix">
              <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="services_lists_boxes_icon" data-effect="slide-bottom">
                  <a href="javascript:void(0);" class=""> <i class="active dm-icon-medium fa fa-key fa-2x"></i> </a>
                </div>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="servicetitle">
                  <h4>Create an Account</h4>
                  <hr>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry </p>
              </div>
            </div>
            <!-- services_lists_boxes -->

            <div class="services_lists_boxes clearfix">
              <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="services_lists_boxes_icon" data-effect="slide-bottom">
                  <a href="javascript:void(0);" class=""> <i class="active dm-icon-medium fa fa-download fa-2x"></i> </a>
                </div>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="servicetitle">
                  <h4>Upload Your Works</h4>
                  <hr>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard..</p>
              </div>
            </div>
            <!-- services_lists_boxes -->


            <div class="services_lists_boxes clearfix">
              <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="services_lists_boxes_icon_none" data-effect="slide-bottom">
                  <a href="javascript:void(0);" class=""> <i class="active dm-icon-medium fa fa-dollar fa-2x"></i> </a>
                </div>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="servicetitle">
                  <h4>Earn Money</h4>
                  <hr>
                </div>
                <p>Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum has been the industry standard dummy text ever since..</p>
              </div>
            </div>
            <!-- services_lists_boxes -->

          </div>
          <!-- services_lists -->
        </div>
        <!-- end widget -->
      </div>
      <!-- large-6 -->
    </div>
    <!-- end container -->
  </section>
  <!-- end section2 -->

  <section class="section4 text-center">
    <div class="general-title">
      <h3>OUR BEST PRODUCTS</h3>
      <hr>
    </div>
    <div class="portfolio-wrapper">
      <div id="owl-demo" class="owl-carousel">

        <div class="item">
          <a data-rel="prettyPhoto" href="{{ asset('front') }}/img/portfolio_01.jpg">
                        	<img class="lazyOwl" src="{{ asset('front') }}/img/portfolio_01.jpg" data-src="{{ asset('front') }}/img/portfolio_01.jpg" alt="">
                        	<div>
                                <small>Product Design</small>
                                <span>Project Name Here</span>
                                <i class="fa fa-search"></i>
                            </div>
                        </a>
        </div>

        <div class="item">
          <a data-rel="prettyPhoto" href="{{ asset('front') }}/img/portfolio_02.jpg">
                        	<img class="lazyOwl" src="{{ asset('front') }}/img/portfolio_02.jpg" data-src="{{ asset('front') }}/img/portfolio_02.jpg" alt="">
                        	<div>
                                <small>Product Design</small>
                                <span>Project Name Here</span>
                                <i class="fa fa-search"></i>
                            </div>
                        </a>
        </div>

        <div class="item">
          <a href="{{ asset('front') }}/single-portfolio-1.html">
                        	<img class="lazyOwl" src="{{ asset('front') }}/img/portfolio_07.jpg" data-src="{{ asset('front') }}/img/portfolio_07.jpg" alt="">
                        	<div>
                                <small>Product Design</small>
                                <span>Project Name Here</span>
                                <i class="fa fa-link"></i>
                            </div>
                        </a>
        </div>

        <div class="item">
          <a href="{{ asset('front') }}/single-portfolio-1.html">
                        	<img class="lazyOwl" src="{{ asset('front') }}/img/portfolio_05.jpg" data-src="{{ asset('front') }}/img/portfolio_05.jpg" alt="">
                        	<div>
                                <small>Product Design</small>
                                <span>Project Name Here</span>
                                <i class="fa fa-link"></i>
                            </div>
                        </a>
        </div>

        <div class="item">
          <a data-rel="prettyPhoto" href="{{ asset('front') }}/img/portfolio_09.jpg">
                        	<img class="lazyOwl" src="{{ asset('front') }}/img/portfolio_09.jpg" data-src="{{ asset('front') }}/img/portfolio_09.jpg" alt="">
                        	<div>
                                <small>Product Design</small>
                                <span>Project Name Here</span>
                                <i class="fa fa-search"></i>
                            </div>
                        </a>
        </div>

        <div class="item">
          <a data-rel="prettyPhoto" href="{{ asset('front') }}/img/portfolio_10.jpg">
                        	<img class="lazyOwl" src="{{ asset('front') }}/img/portfolio_10.jpg" data-src="{{ asset('front') }}/img/portfolio_10.jpg" alt="">
                        	<div>
                                <small>Product Design</small>
                                <span>Project Name Here</span>
                                <i class="fa fa-search"></i>
                            </div>
                        </a>
        </div>

        <div class="item">
          <a data-rel="prettyPhoto" href="{{ asset('front') }}/img/portfolio_06.jpg">
                        	<img class="lazyOwl" src="{{ asset('front') }}/img/portfolio_06.jpg" data-src="{{ asset('front') }}/img/portfolio_06.jpg" alt="">
                        	<div>
                                <small>Product Design</small>
                                <span>Project Name Here</span>
                                <i class="fa fa-search"></i>
                            </div>
                        </a>
        </div>

      </div>
      <!-- end owl-demo -->
    </div>
    <!-- end portfolio-wrapper -->
    <a class="button large" href="{{ asset('front') }}/home3.html#">VIEW ALL WORKS</a>
  </section>
  <!-- end section1 -->

  <section class="section2">
    <div class="container">
      <div class="message text-center">
        <h2 class="big-title">Your <span>portfolio</span> should standout!</h2>
        <p class="small-title">Lorem Ipsum is simply dummy text of the printing and typesetting industy has been the industry"s standard.</p>
        <a class="button large" href="javascript:void(0);">ABOUT OUR SERVICES</a> <a class=" dmbutton large" href="javascript:void(0);">CONTACT US TODAY</a>
      </div>
      <!-- end message -->
    </div>
    <!-- end container -->
  </section>
  <!-- end section2 -->

  <section class="section1 text-center">
    <div class="container">
      <div class="general-title">
        <h3>AFFORDABLE PRICES</h3>
        <hr>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-effect="slide-bottom">
          <div class="custom-box">
            <div class="servicetitle">
              <h4>Standard</h4>
              <hr>
            </div>
            <div class="icn-main-container">
              <span class="icn-container">$25</span>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
            <ul class="pricing">
              <li>150 Mb Storage</li>
              <li>1 Domain</li>
              <li>2 Sub Domains</li>
              <li>3 MySQL DBs</li>
              <li>2 Emails</li>
              <li>WordPress Installation</li>
              <li>24/7 Support</li>
            </ul>
            <a class="btn btn-primary" href="javascript:void(0);">Order Now</a>
          </div>
          <!-- end custombox -->
        </div>
        <!-- end col-4 -->

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-effect="slide-bottom">
          <div class="custom-box">
            <div class="servicetitle">
              <h4>Mega Pack</h4>
              <hr>
            </div>
            <div class="icn-main-container">
              <span class="icn-container">$55</span>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
            <ul class="pricing">
              <li>150 Mb Storage</li>
              <li>1 Domain</li>
              <li>2 Sub Domains</li>
              <li>3 MySQL DBs</li>
              <li>2 Emails</li>
              <li>WordPress Installation</li>
              <li>24/7 Support</li>
            </ul>
            <a class="btn btn-primary" href="javascript:void(0);">Order Now</a>
          </div>
          <!-- end custombox -->
        </div>
        <!-- end col-4 -->

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-effect="slide-bottom">
          <div class="custom-box">
            <div class="servicetitle">
              <h4>Ultra Pack</h4>
              <hr>
            </div>
            <div class="icn-main-container">
              <span class="icn-container">$98</span>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
            <ul class="pricing">
              <li>150 Mb Storage</li>
              <li>1 Domain</li>
              <li>2 Sub Domains</li>
              <li>3 MySQL DBs</li>
              <li>2 Emails</li>
              <li>WordPress Installation</li>
              <li>24/7 Support</li>
            </ul>
            <a class="btn btn-primary" href="javascript:void(0);">Order Now</a>
          </div>
          <!-- end custombox -->
        </div>
        <!-- end col-4 -->

      </div>
    </div>
    <!-- end container -->
  </section>
  <!-- end section1 -->

  <section class="section3">
    <div class="container withpadding">
      <div class="message">
        <div class="col-lg-9 col-md-9 col-sm-9">
          <h3>Grab the attention of your customers!</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s..</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <a class="dmbutton button large pull-right" href="javascript:void(0);"><i class="fa fa-download"></i> GET A QUOTE</a>
        </div>
      </div>
      <!-- end message -->
    </div>
    <!-- end container -->
  </section>
  <!-- end section3 -->

  @include('front.layouts.footer')
  <!-- end footer -->
  <div class="dmtop">Scroll to Top</div>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('front') }}/lib/jquery/jquery.min.js"></script>
  <script src="{{ asset('front') }}/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{ asset('front') }}/lib/php-mail-form/validate.js"></script>
  <script src="{{ asset('front') }}/lib/prettyphoto/js/prettyphoto.js"></script>
  <script src="{{ asset('front') }}/lib/isotope/isotope.min.js"></script>
  <script src="{{ asset('front') }}/lib/hover/hoverdir.js"></script>
  <script src="{{ asset('front') }}/lib/hover/hoverex.min.js"></script>
  <script src="{{ asset('front') }}/lib/unveil-effects/unveil-effects.js"></script>
  <script src="{{ asset('front') }}/lib/owl-carousel/owl-carousel.js"></script>
  <script src="{{ asset('front') }}/lib/jetmenu/jetmenu.js"></script>
  <script src="{{ asset('front') }}/lib/animate-enhanced/animate-enhanced.min.js"></script>
  <script src="{{ asset('front') }}/lib/jigowatt/jigowatt.js"></script>
  <script src="{{ asset('front') }}/lib/easypiechart/easypiechart.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('front') }}/js/main.js"></script>

</body>
</html>
