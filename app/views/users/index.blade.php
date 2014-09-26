<!DOCTYPE html>
<html>
<head>
	<title>Diversity Circle</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/bootstrap-overrides.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen" />

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/lib/animate.css" media="screen, projection">    

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="pull_top">
    <div class="navbar transparent navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="{{ action('HomeController@showIndex')}}">
                <!-- <img style="height: 40px; width: 140px; margin-top: -10px" id="logo-header" src="img/div2.png" alt="Logo"> -->
                <strong>DIVERSITY©IRCLE</strong>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li><a href="{{ action('HomeController@showTour')}}">TOUR</a></li>
                    <li><a href="{{ action('HomeController@showTour')}}">PROFESSIONAL</a></li>
                    <li><a href="{{ action('HomeController@showTour')}}">EMPLOYER</a></li>
                     <li><a href="{{ action('HomeController@showIndex')}}">JOBS</a></li>
                    <!--<li><a href="contact.html">CONTACT US</a></li> -->
                    <li><a href="{{ action('HomeController@showBlog')}}">BLOG</a></li>
                    <li><a class="btn-header" href="{{ action('HomeController@showSignup')}}">Sign up</a></li>
                    <li><a class="btn-header" href="{{ action('HomeController@showSignin')}}">Sign in</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>

    <section id="feature_slider" class="">
        <!-- 
            Each slide is composed by <img> and .info
            - .info's position is customized with css in index.css
            - each <img> parallax effect is declared by the following params inside its class:
            
            example: class="asset left-472 sp600 t120 z3"
            left-472 means left: -472px from the center
            sp600 is speed transition
            t120 is top to 120px
            z3 is z-index to 3
            Note: Maintain this order of params

            For the backgrounds, you can combine from the bgs folder :D
        -->
        <article class="slide" id="showcasing" style="background: url('img/backgrounds/1.jpg') repeat-x top center;">
             <img class="asset left+120 sp600 t120 z2" src="img/nbmbaa2.png" />
            <img class="asset left-50 sp500 t120 z1" src="img/nshmba2.png" />
            <img class="asset left+300 sp500 t120 z3" src="img/mbavets.png" />
            <img class="asset left-220 sp500 t120 z0" src="img/womenmba.png" />
            <div class="info">
                <h2>Been to these events?</h2>

            </div>
        </article>
         <article class="slide" id="responsive" style="background: url('img/backgrounds/1.jpg') repeat-x top center;">  
            <img class="asset left-600 sp600 t120 z3" src="img/nbmbaa2.png" />
            <img class="asset left-380 sp500 t120 z2" src="img/nshmba2.png" />
            <img class="asset left-190 sp500 t120 z1" src="img/mbavets.png" />
            <img class="asset left-80 sp500 t120 z0" src="img/womenmba.png" />
            <div class="info">
                <h2>  Stay 
                    <strong>Connected. </strong> Keep the conversation going. 
                </h2>                
            </div>
        </article>  
          
        <article class="slide" id="ideas" style="background: url('img/backgrounds/indigo_thumb.jpg') repeat-x top center;">
            <div class="info">
                <h2>Connect, Share, & Discover Opportunities<br>
                    for Minority Professionals.</h2>
           </div>
            <img class="asset left-480 sp600 t260 z1" src="img/slides/scene2/left.png" />
            <img class="asset left-280 sp600 t213 z2" src="img/divcirc.png" />
            <img class="asset left60 sp600 t260 z1" src="img/slides/scene2/right.png" />
        </article>  
        <article class="slide" id="showcasing" style="background: url('img/backgrounds/1.jpg') repeat-x top center;">
            <img class="asset left-130 sp600 t120 z2" src="img/companys3.png" /> 
            <img class="asset left-30 sp500 t120 z1" src="" /> 
            <div class="info">
                <h2>Discover the companies looking for You...</h2>

            </div>
        </article>
        <article class="slide" id="tour" style="background: url('img/backgrounds/color-splash.jpg') repeat-x top center;">

            <img class="asset left-638 sp650 t80 z3" src="img/people.jpg" />
            <!-- <img class="asset left-365 sp600 t270 z4" src="img/slides/scene3/iphone.png" />
            <img class="asset left-350 sp450 t135 z2" src="img/slides/scene3/desktop.png" />
            <img class="asset left-185 sp550 t220 z1" src="img/slides/scene3/macbook.png" /> -->
            <div class="info">
                <h2>Join the Network.</h2>
                <a href="{{ action('HomeController@showSignup')}}">Sign up Now</a>
            </div>
        </article>
             
    </section>

    <div id="showcase">
        <div class="container">
                       
            <div class="row feature_wrapper">
                <!-- Features Row -->
                <div class="features_op1_row">
                    <!-- Feature -->
                    <div class="span4 feature first">  
                    </div>
                    <div id="in_pricing">
                        <div style="margin-top:-30px" class="start">
                             <p style="margin-left: -30px; text-decoration: underline">Recruiter</a> </p><p style="padding-left: 150px; text-decoration: underline">Professional </p>
                            <p style="padding-left: 235px"><a href="{{ action('HomeController@showCorporateSignup')}}">Find My Candidate</a></p>
                            <!-- <p>Build your profile with </p> -->
                            <p style="padding-left: 70px"><a href="{{ action('HomeController@showSignup')}}">Build my Profile</a></p>
                        </div> 
                    </div>
                </div>
            </div>
        </div> 
    </div>       

    <div style="margin-top:-0px" id="features">
        <div class="container">
            <div class="section_header">
                <h3 style="text-align: center">Highly Needed Diversity Jobs</h3>
            </div> 
            <div style="margin-top: -30px" class="row job-content margin-bottom-40">
            <div style="float: left" class="col-md-3 col-sm-3 md-margin-bottom-40">
                <ul  class="list-unstyled categories">
                    <h3 class="heading-md"><strong>Accounting &amp; Finance</strong></h3>
                    <li><a href="#">Accounting</a> <small class="hex">(342 jobs)</small></li>
                    <li><a href="#">Admin &amp; Clerical</a> <small class="hex">(143 jobs)</small></li>
                    <li><a href="#">Banking &amp; Finance</a> <small class="hex">(66 jobs)</small></li>
                    <li><a href="#">Contract &amp; Freelance</a> <small class="hex">(12 jobs)</small></li>
                    <li><a href="#">Business Development</a> <small class="hex">(212 jobs)</small></li>
                </ul>
            </div>
            <div style="float: left" class="col-md-3 col-sm-3 md-margin-bottom-40">
                <ul class="list-unstyled categories">
                    <h3 class="heading-md"><strong>Medical &amp; Health</strong></h3>
                    <li><a href="#">Nurse</a> <small class="hex">(546 jobs)</small></li>
                    <li><a href="#">Health Care</a> <small class="hex">(82 jobs)</small></li>
                    <li><a href="#">General Labor</a> <small class="hex">(11 jobs)</small></li>
                    <li><a href="#">Pharmaceutical</a> <small class="hex">(109 jobs)</small></li>
                    <li><a href="#">Human Resources</a> <small class="hex">(401 jobs)</small></li>
                </ul>
            </div>
            <div style="float: left; padding-right: 18px;" class="col-md-3 col-sm-3 md-margin-bottom-40">
                <ul class="list-unstyled categories">
                    <h3 class="heading-md"><strong>Web Development</strong></h3>
                    <li><a href="#">Ecommerce</a> <small class="hex">(958 jobs)</small></li>
                    <li><a href="#">Web Design</a> <small class="hex">(576 jobs)</small></li>
                    <li><a href="#">Web Programming</a> <small class="hex">(543 jobs)</small></li>
                    <li><a href="#">Web Development</a> <small class="hex">(67 jobs)</small></li>
                    <li><a href="#">Web Proj Management</a> <small class="hex">(45 jobs)</small></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3">
                <ul class="list-unstyled categories">
                    <h3 class="heading-md"><strong>Sales &amp; Marketing</strong></h3>
                    <li><a href="#">Advertising</a> <small class="hex">(123 jobs)</small></li>
                    <li><a href="#">Email Marketing</a> <small class="hex">(544 jobs)</small></li>
                    <li><a href="#">Telemarketing &amp; Telesales</a> <small class="hex">(564 jobs)</small></li>
                    <li><a href="#">Market Research &amp; Surveys</a> <small class="hex">(345 jobs)</small></li>
                    <li><a href="#">Search Engine Marketing</a> <small class="hex">(32 jobs)</small></li>
                </ul>
            </div>
            </div>
            <div id="showcase">
        <div class="container">
                <div class="section_header">
                    <h3>Diversity Executive Articles</h3>
                </div> 
            <div class="row feature_wrapper">
                <!-- Features Row -->
                <div class="features_op1_row">
                    <!-- Feature -->
                    <div class="span4 feature first">
                        <div class="img_box">
                            <a href="{{ action('HomeController@showBlogPost')}}">
                                <img src="img/high-rated-job-5.3.jpg">
                                <span class="circle"> 
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h4><a href="{{ action('HomeController@showBlogPost')}}">Why Diversity</a></h4>
                            <span class="date">Wed, 12 Dec.</span>
                            <p>
                                There are many variations of passages of generators on the  embarrassing hidden in   content here making it look like.
                                <br><a href="{{ action('HomeController@showBlogPost')}}">Read more</a>
                            </p>
                        </div>
                    </div>
                    <!-- Feature -->
                    <div class="span4 feature">
                        <div class="img_box">
                            <a href="{{ action('HomeController@showBlogPost')}}">
                                <img style="width: 285px; height: 160px;" src="img/slider.jpg">
                                <span class="circle">   
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h4><a href="{{ action('HomeController@showBlogPost')}}">The Modern Woman Executive</a></h4>
                            <span class="date">Wed, 12 Dec.</span>
                            <p>
                                There are many variations of passages of generators on the  embarrassing hidden in   content here making it look like.
                            	<br><a href="{{ action('HomeController@showBlogPost')}}">Read more</a>
                            </p>
                        </div>
                    </div>
                    <!-- Feature -->
                    <div class="span4 feature last">
                        <div class="img_box">
                            <a href="{{ action('HomeController@showBlogPost')}}">
                                <img src="img/high-rated-job-2.1.jpg">
                                <span class="circle"> 
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h4><a href="{{ action('HomeController@showBlogPost')}}">Being a Minority in the C- Suite</a></h4>
                            <span class="date">Wed, 12 Dec.</span>
                            <p>
                                There are many variations of passages of generators on the  embarrassing hidden in   content here making it look like.
                            	<br><a href="{{ action('HomeController@showBlogPost')}}">Read more</a>
                            </p>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>

        </div>
    </div>


    <!-- Pricing Option -->
    

    <div id="clients">
        <div class="container">
            <div class="section_header">
                <h3>Companies on Diversity Circle</h3>
                <h5></h5>

            </div>
            <div class="row">
                <div class="span2 client">
                    <div class="img client1"></div>
                </div>
                <div class="span2 client">
                    <div class="img client2"></div>
                </div>
                <div class="span2 client">
                    <div class="img client3"></div>
                </div>
                <div class="span2 client">
                    <div class="img client4"></div>
                </div>
                <div class="span2 client">
                    <div class="img client5"></div>
                </div>
                <div class="span2 client">
                    <div class="img client6"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <div class="row sections">
                <div class="span4 recent_posts">
                    <h3 class="footer_header">
                        Recent Posts
                    </h3>
                    <div class="post">
                        <a href="blogpost.html">
                            <img style="height: 60px; width: 60px;" src="img/slider.jpg" class="img-circle" />
                        </a>
                        <div class="date">
                            Wed, 12 Dec
                        </div>
                        <a href="blogpost.html" class="title">
                            Randomised words which don't look embarrasing hidden.
                        </a>
                    </div>
                    <div class="post">
                        <a href="blogpost.html">
                            <img style="height: 60px; width: 60px;"src="img/high-rated-job-2.1.jpg" class="img-circle" />
                        </a>
                        <div class="date">
                            Mon, 12 Dec
                        </div>
                        <a href="blogpost.html" class="title">
                            Randomised words which don't look embarrasing hidden.
                        </a>
                    </div>
                </div>
                <div class="span4 testimonials">
                    <h3 class="footer_header">
                        Testimonials
                    </h3>
                    <div class="wrapper">
                        <div class="quote">
                            <span>“</span>
                            There are many live conferences to connect with diverse talent, but they are limited because they are annual and cumbersome. Diversity Circle has truly brought this process online and made diversity recruiting so much easier.
                            <span></span>
                        </div>
                        <div class="author">
                            <img src="img/user-display.png" />
                            <div class="name">Alejandra Galvan Castillo</div>
                            <div class="info">
                                D&I Recruiter, Coca Cola
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4 contact">
                    <h3 class="footer_header">
                        Join Now
                    </h3>
                    <form action="#" method="post">
                        <input type="text" placeholder="First name" />
                        <input type="text" placeholder="Last name" />
                        <input type="text" placeholder="Email" />
                        <input type="text" placeholder="Password" />
                        <!-- <textarea rows="3" placeholder="Message"></textarea> -->
                        <input type="submit" value="Sign Up" />
                    </form>
                </div>
            </div>
            <div class="row credits">
                <div class="span12">
                    <div class="row social">
                        <div class="span12">
                            <a href="#" class="facebook">
                                <span class="socialicons ico1"></span>
                                <span class="socialicons_h ico1h"></span>
                            </a>
                            <a href="#" class="twitter">
                                <span class="socialicons ico2"></span>
                                <span class="socialicons_h ico2h"></span>
                            </a>
                            <a href="#" class="gplus">
                                <span class="socialicons ico3"></span>
                                <span class="socialicons_h ico3h"></span>
                            </a>
                            <a href="#" class="flickr">
                                <span class="socialicons ico4"></span>
                                <span class="socialicons_h ico4h"></span>
                            </a>
                            <a href="#" class="pinterest">
                                <span class="socialicons ico5"></span>
                                <span class="socialicons_h ico5h"></span>
                            </a>
                            <a href="#" class="dribble">
                                <span class="socialicons ico6"></span>
                                <span class="socialicons_h ico6h"></span>
                            </a>
                            <a href="#" class="behance">
                                <span class="socialicons ico7"></span>
                                <span class="socialicons_h ico7h"></span>
                            </a>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="span12">
                            © 2014 Diversity Circle. All rights reserved. 
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>

    <script type="text/javascript" src="js/index-slider.js"></script>	
</body>
</html>
