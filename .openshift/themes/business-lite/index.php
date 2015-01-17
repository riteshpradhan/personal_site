    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Ritesh Pradhan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Flat Design Mini Portfolio">
    <meta name="keywords" content="responsive, bootstrap, flat design, flat ui, portfolio">
    <meta name="author" content="ritesxz">
    <meta name="description" content="This is a responsive flat design mini portfolio for creative folks who want to showcase their work online.">
    <!-- styles -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/style-single-page.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/font/css/fontello.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Add jQuery library -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.1.min.js"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script>
                $(document).ready(function() {
            $(".fancybox-thumb").fancybox({
                helpers	: {
                    title	: {
                        type: 'inside'
                    },
                    overlay : {
                                css : {
                                    'background' : 'rgba(1,1,1,0.65)'
                                }
                            }
                }
            });
        });
            </script>
    </head>
    <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#profile"><img src="<?php bloginfo('template_url'); ?>/img/user.jpg"/></a>
          <ul class="nav nav-collapse pull-right">
            <li><a href="#profile"><i class="icon-user"></i>Me</a></li>
            <li><a href="#skills"><i class="icon-trophy"></i>Skills</a></li>
            <li><a href="#work"><i class="icon-picture"></i>Projects</a></li>
            <li><a href="#resume"><i class="icon-doc-text"></i>Resume</a></li>
          </ul>
          <!-- Everything you want hidden at 940px or less, place within here -->
          <div class="nav-collapse collapse">
            <!-- .nav, .navbar-search, .navbar-form, etc -->
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix">
      <!--Profile container-->
      <div id="profile" class="container">
        <div class="span3"> <img src="<?php bloginfo('template_url'); ?>/img/mini.png"> </div>
        <div class="span5">
          <h1>Ritesh Pradhan</h1>
          <h3>Computer Engineer</h3>
          <p> Machine Learning, Data Mining, Artificial Intelligence enthusiats.</p>
          <!-- <a href="#" class="my-resume"><i class="icon-paper-plane"></i> Hire Me </a> -->
          <!-- <div class="row social">
            <ul class="social-icons">
              <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/fb.png" alt="facebook"></a></li>
              <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/tw.png" alt="twitter"></a></li>
              <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/go.png" alt="google plus"></a></li>
              <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/pin.png" alt="pinterest"></a></li>
              <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/st.png" alt="stumbleupon"></a></li>
              <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/dr.png" alt="dribbble"></a></li>
            </ul>
          </div> -->
        </div>
        <!-- Social Icons -->
        <!-- END: Social Icons -->
      </div>
      <!--END: Profile container-->

      <!--Skills container-->
      <div id="skills" class="container">
        <h2>My Skills</h2>
        <div class="row">
          <div class="span3">
            <div class="py">
              <h3>Py</h3>
            </div>
          </div>
          <div class="span5">
            <h3>Python <span>80%</span></h3>
            <div class="expand-bg"> <span class="expand py2"> &nbsp; </span> </div>
          </div>
        </div>
        <div class="row">
          <div class="span3">
            <div class="c">
              <h3>C</h3>
            </div>
          </div>
          <div class="span5">
            <h3>C <span>70%</span></h3>
            <div class="expand-bg"> <span class="expand c2"> &nbsp; </span> </div>
          </div>
        </div>
        <div class="row">
          <div class="span3">
            <div class="cpp">
              <h3>C++</h3>
            </div>
          </div>
          <div class="span5">
            <h3>C++ <span>70%</span></h3>
            <div class="expand-bg"> <span class="expand cpp2"> &nbsp; </span> </div>
          </div>
        </div>
        <div class="row">
          <div class="span3">
            <div class="php">
              <h3>PHP</h3>
            </div>
          </div>
          <div class="span5">
            <h3>PHP <span>50%</span></h3>
            <div class="expand-bg"> <span class="expand php2"> &nbsp; </span> </div>
          </div>
        </div>
      </div>
      <!--END: Skills container-->

      <!-- Works container -->
      <div id="work" class="container">
        <h2>My Work</h2>
        <ul class="work-images">
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="<?php bloginfo('template_url'); ?>/img/1.jpg" title="Image 01"><img src="<?php bloginfo('template_url'); ?>/img/1-thumb.jpg" /></a></div>
          </li>
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="<?php bloginfo('template_url'); ?>/img/2.jpg"><img src="<?php bloginfo('template_url'); ?>/img/2-thumb.jpg" /></a></div>
          </li>
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="<?php bloginfo('template_url'); ?>/img/3.jpg"><img src="<?php bloginfo('template_url'); ?>/img/3-thumb.jpg" /></a></div>
          </li>
        </ul>
        <ul class="work-images">
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="<?php bloginfo('template_url'); ?>/img/4.jpg"><img src="<?php bloginfo('template_url'); ?>/img/4-thumb.jpg" /></a></div>
          </li>
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="<?php bloginfo('template_url'); ?>/img/5.jpg"><img src="<?php bloginfo('template_url'); ?>/img/5-thumb.jpg" /></a></div>
          </li>
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="<?php bloginfo('template_url'); ?>/img/6.jpg"><img src="<?php bloginfo('template_url'); ?>/img/6-thumb.jpg" /></a></div>
          </li>
        </ul>
        <!--Dummy images by The Fox And King :: http://dribbble.com/snootyfox-->
      </div>
      <!--END: Work container-->

      <!-- Resume container -->
      <div id="resume" class="container">
        <h2>My Resume</h2>
        <h3></h3>
        <div class="btn-center"> <a href="#" class="my-resume"><i class="icon-download"></i> Download Resume</a>
          <h2>125kb</h2>
        </div>
      </div>
      <!--END: Resume container-->

      <!-- Social Icons -->
      <div class="row social">
        <ul class="social-icons">
          <li><a href="https://www.facebook.com/ritesxz" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/fb.png" alt="facebook"></a></li>
          <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/tw.png" alt="twitter"></a></li>
          <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/go.png" alt="google plus"></a></li>
          <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/pin.png" alt="pinterest"></a></li>
          <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/st.png" alt="stumbleupon"></a></li>
          <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/dr.png" alt="dribbble"></a></li>
        </ul>
      </div>
      <!-- END: Social Icons -->
    </div>
    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <p class="pull-left"><a href="http://dzyngiri.com">www.riteshp.com.np</a></p>
        <p class="pull-right"><a href="##myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
      </div>
    </div>
    <!-- Contact form in Modal -->
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><i class="icon-mail"></i> Contact Me</h3>
      </div>
      <div class="modal-body">
        <form>
          <input type="text" placeholder="Your Name">
          <input type="text" placeholder="Your Email">
          <input type="text" placeholder="Website (Optional)">
          <textarea rows="3" style="width:80%"></textarea>
          <br/>
          <button type="submit" class="btn btn-large"><i class="icon-paper-plane"></i> SUBMIT</button>
        </form>
      </div>
    </div>
    <!-- Scripts -->
    <script src="<?php bloginfo('template_url'); ?>/js/vertical-scroll.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script>
                $('#myModal').modal('hidden')
    </script>
    </body>
    </html>
