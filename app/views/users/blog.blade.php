<!DOCTYPE html>
<html>
<head>
    <title>Business Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/bootstrap-overrides.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/blog.css" type="text/css" media="screen" />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="{{ action('HomeController@showBlogPost')}}">
                <strong>DIVERSITY©IRCLE</strong>
            </a>
            <div class="nav-collapse collapse">
               <ul class="nav pull-right">
                    <li><a href="{{ action('HomeController@showTour')}}">TOUR</a></li>
                    <li><a href="{{ action('HomeController@showTour')}}">PROFESSIONAL</a></li>
                    <li><a href="{{ action('HomeController@showTour')}}">EMPLOYER</a></li>
                     <li><a href="{{ action('HomeController@showBlogPost')}}">JOBS</a></li>
                    <!--<li><a href="contact.html">CONTACT US</a></li> -->
                    <li><a href="{{ action('HomeController@showBlog')}}">BLOG</a></li>
                    <li><a class="btn-header" href="{{ action('HomeController@showSignup')}}">Sign up</a></li>
                    <li><a class="btn-header" href="{{ action('HomeController@showSignin')}}">Sign in</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>

    <div id="blog">
        <div class="container">
            <div class="section_header">
                <h3>Blog</h3>

                <input type="text" class="input-large search-query" placeholder="Search">
            </div>

            <!-- Post Row -->
            <div class="row post_row">
                <!-- Post -->
                <div class="span4 post">
                    <div class="img">
                        <a href="{{ action('HomeController@showBlogPost')}}">
                            <img src="img/high-rated-job-5.3.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h5><a href="{{ action('HomeController@showBlogPost')}}">Clean Canvas beautiful responsive theme.</a></h5>
                        <span class="date">Wed, 12 Dec.</span>
                        <p>
                            There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>
                    </div>
                    <div class="author_box">
                        <h6>Alejandra Galvan</h6>
                        <p>Creative Director</p>
                    </div>
                    <a class="plus_wrapper" href="{{ action('HomeController@showBlogPost')}}">
                        <span>&#43;</span>
                    </a>
                </div>

                <!-- Post -->
                <div class="span4 post">
                    <div class="img">
                        <a href="{{ action('HomeController@showBlogPost')}}">
                            <img src="img/blog2.png" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h5><a href="{{ action('HomeController@showBlogPost')}}">Clean Canvas beautiful responsive theme.</a></h5>
                        <span class="date">Wed, 12 Dec.</span>
                        <p>
                            There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>
                    </div>
                    <div class="author_box">
                        <h6>Alejandra Galvan</h6>
                        <p>Creative Director</p>
                    </div>
                    <a class="plus_wrapper" href="{{ action('HomeController@showBlogPost')}}">
                        <span>&#43;</span>
                    </a>
                </div>

                <!-- Post -->
                <div class="span4 post last">
                    <div class="img">
                        <a href="{{ action('HomeController@showIndex')}}">
                            <img src="img/blog3.png" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h5><a href="{{ action('HomeController@showIndex')}}">Clean Canvas beautiful responsive theme.</a></h5>
                        <span class="date">Wed, 12 Dec.</span>
                        <p>
                            There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>
                    </div>
                    <div class="author_box">
                        <h6>Alejandra Galvan</h6>
                        <p>Creative Director</p>
                    </div>
                    <a class="plus_wrapper" href="{{ action('HomeController@showIndex')}}">
                        <span>&#43;</span>
                    </a>
                </div>
            </div>

            <!-- Post Row -->
            <div class="row post_row">
                <!-- Post -->
                <div class="span4 post">
                    <div class="img">
                        <a href="blogpost.html">
                            <img src="img/blog1.png" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>
                        <span class="date">Wed, 12 Dec.</span>
                        <p>
                            There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>
                    </div>
                    <div class="author_box">
                        <h6>Alejandra Galvan</h6>
                        <p>Creative Director</p>
                    </div>
                    <a class="plus_wrapper" href="blogpost.html">
                        <span>&#43;</span>
                    </a>
                </div>

                <!-- Post -->
                <div class="span4 post">
                    <div class="img">
                        <a href="blogpost.html">
                            <img src="img/blog2.png" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>
                        <span class="date">Wed, 12 Dec.</span>
                        <p>
                            There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>
                    </div>
                    <div class="author_box">
                        <h6>Alejandra Galvan</h6>
                        <p>Creative Director</p>
                    </div>
                    <a class="plus_wrapper" href="blogpost.html">
                        <span>&#43;</span>
                    </a>
                </div>

                <!-- Post -->
                <div class="span4 post last">
                    <div class="img">
                        <a href="blogpost.html">
                            <img src="img/blog3.png" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>
                        <span class="date">Wed, 12 Dec.</span>
                        <p>
                            There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>
                    </div>
                    <div class="author_box">
                        <h6>Alejandra Galvan</h6>
                        <p>Creative Director</p>
                    </div>
                    <a class="plus_wrapper" href="blogpost.html">
                        <span>&#43;</span>
                    </a>
                </div>
            </div>
            
            <!-- Post Row -->
            <div class="row post_row lastpost_row">
                <!-- Post -->
                <div class="span4 post">
                    <div class="img">
                        <a href="blogpost.html">
                            <img src="img/blog1.png" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>
                        <span class="date">Wed, 12 Dec.</span>
                        <p>
                            There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>
                    </div>
                   <div class="author_box">
                        <h6>Alejandra Galvan</h6>
                        <p>Creative Director</p>
                    </div>
                    <a class="plus_wrapper" href="blogpost.html">
                        <span>&#43;</span>
                    </a>
                </div>

                <!-- Post -->
                <div class="span4 post">
                    <div class="img">
                        <a href="blogpost.html">
                            <img src="img/blog2.png" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>
                        <span class="date">Wed, 12 Dec.</span>
                        <p>
                            There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>
                    </div>
                   <div class="author_box">
                        <h6>Alejandra Galvan</h6>
                        <p>Creative Director</p>
                    </div>
                    <a class="plus_wrapper" href="blogpost.html">
                        <span>&#43;</span>
                    </a>
                </div>

                <!-- Post -->
                <div class="span4 post last">
                    <div class="img">
                        <a href="blogpost.html">
                            <img src="img/blog3.png" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <h5><a href="blogpost.html">Clean Canvas beautiful responsive theme.</a></h5>
                        <span class="date">Wed, 12 Dec.</span>
                        <p>
                           There are many variations of passages of generators on the  embarrassing hidden in  slightly distracted by these distribution of letters, as opposed.</p>
                    </div>
                    <div class="author_box">
                        <h6>Alejandra Galvan</h6>
                        <p>Creative Director</p>
                    </div>
                    <a class="plus_wrapper" href="blogpost.html">
                        <span>&#43;</span>
                    </a>
                </div>
            </div>
            <div class="pagination">
                <ul>
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <div class="row info">
                <div class="span6 residence">
                    <ul>
                        <li>2301 East Lamar Blvd. Suite 140. City, Arlington.</li>
                        <li>United States, Zip Code TX 76006.</li>
                    </ul>
                </div>
                <div class="span5 touch">
                    <ul>
                        <li><strong>P.</strong> 1 817 274 2933</li>
                        <li><strong>E.</strong><a href="#"> bootstrap@twitter.com</a></li>
                    </ul>
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
                            © 2013 Clean Canvas. All rights reserved. Theme by Detail Canvas.
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </footer>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
</body>
</html>