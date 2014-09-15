<!DOCTYPE html>
<html>
<head>
	<title>Diversity Circle Sign In</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/bootstrap-overrides.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="css/lib/animate.css" media="screen, projection">
    <link rel="stylesheet" href="css/sign-in.css" type="text/css" media="screen" />

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
            <a class="brand" href="{{ action('HomeController@showIndex')}}">
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

    <!-- Sign In Option 1 -->
    <div id="sign_in1">
        <div class="container">
            <div class="row">
                <div class="span12 header">
                    <h4>Log in to your account</h4>
                    <p>
                        There are many variations of passages of Lorem alteration in some form  injected humour these randomised words .</p>

                    <div class="span4 social">
                        <a href="#" class="circle facebook">
                            <img src="img/face.png" alt="">
                        </a>
                         <a href="#" class="circle twitter">
                            <img src="img/twt.png" alt="">
                        </a>
                         <a href="#" class="circle gplus">
                            <img src="img/gplus.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="span3 division">
                    <div class="line l"></div>
                    <span>or</span>
                    <div class="line r"></div>
                </div>

                <div class="span12 footer">
                    <form>
                        <input type="text" placeholder="Email">
                        <input type="password" placeholder="Password">
                        <input type="submit" placeholder="Confirm Password" value="sign in">
                    </form>
                </div>

                <div class="span12 proof">
                    <div class="span5 remember">
                        <label class="checkbox">
                            <input type="checkbox"> Remember me
                        </label>
                        <a href="reset.html">Forgot password?</a>
                    </div>

                    <div class="span3 dosnt">
                        <span>Don’t have an account?</span>
                        <a href="sign-up.html">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign In Option 2 -->
    <div id="sign_in2">
        <div class="container">
            <div class="section_header">
                <h3>Sign in <span>(option 2)</span></h3>
            </div>
            <div class="row login">
                <div class="span5 left_box">
                    <h4>Log in to your account</h4>

                    <div class="perk_box">
                        <div class="perk">
                            <span class="icos ico1"></span>
                            <p><strong>Lorem alteration</strong> in some form  injected humour these randomised words .</p>
                        </div>
                        <div class="perk">
                            <span class="icos ico2"></span>
                            <p><strong>There are many variations</strong> of passages of Lorem alteration in some form  injected humour these randomised words.</p>
                        </div>
                        <div class="perk">
                            <span class="icos ico3"></span>
                            <p><strong>Alteration in some form</strong> injected humour these randomised words.</p>
                        </div>
                    </div>
                </div>

                <div class="span6 signin_box">
                    <div class="box">
                        <div class="box_cont">
                            <div class="social">
                                <a href="#" class="circle facebook">
                                    <img src="img/face.png" alt="">
                                </a>
                                 <a href="#" class="circle twitter">
                                    <img src="img/twt.png" alt="">
                                </a>
                                 <a href="#" class="circle gplus">
                                    <img src="img/gplus.png" alt="">
                                </a>
                            </div>

                            <div class="division">
                                <div class="line l"></div>
                                <span>or</span>
                                <div class="line r"></div>
                            </div>

                            <div class="form">
                                <form>
                                    <input type="text" placeholder="Email">
                                    <input type="text" placeholder="Password">
                                    <input type="text" placeholder="Confirm Password">
                                    <div class="forgot">
                                        <span>Don’t have an account?</span>
                                        <a href="sign-up.html">Sign up</a>
                                    </div>
                                    <input type="submit" value="sign in">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
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
                            © 2014 Diversity Circle. All rights reserved. 
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