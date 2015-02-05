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
            <li><a href="#work"><i class="icon-picture"></i>Portfolio</a></li>
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
            <p style="color:#39d084"><i class="icon-paper-plane yellow"></i> Interests</p>
            <ul>
              <li> Artificial Intelligence</li>
              <li> Machine Learning</li>
              <li> Data Mining</li>
              <li> Computing Security</li>
              <li> Game Development</li>
            </ul>
          </div>

        <!-- Social Icons -->
        <div class="row social">
          <ul class="social-icons">
            <!-- <li><a href="https://www.facebook.com/ritesxz" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/f<!-- b.png" alt="facebook"></a></li>
            <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/tw.png" alt="twitter"></a></li>
            <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/go.png" alt="google plus"></a></li>
            <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/pin.png" alt="pinterest"></a></li>
            <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/st.png" alt="stumbleupon"></a></li>
            <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/dr.png" alt="dribbble"></a></li> -->
            <li><a href="https://www.facebook.com/ritesxz" target="_blank"><i class="icon-3x icon-facebook-circled" alt="facebook"></i></a></li>
            <li><a href="https://twitter.com/my_bad_jokes" target="_blank"><i class="icon-3x icon-twitter-circled" alt="twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/in/riteshpradhan" target="_blank"><i class="icon-3x icon-linkedin-circled" alt="linkedin"></i></a></li>
            <li><a href="https://plus.google.com/u/0/+RiteshPradhan" target="_blank"><i class="icon-3x icon-gplus-circled" alt="gplus"></i></a></li>
            <li><a href="https://github.com/riteshpradhan" target="_blank"><i class="icon-3x icon-github-circled" alt="github"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCsv1R6s61i-CF6ZvYZLh5gQ/playlists?spfreload=10" target="_blank"><i class="icon-3x icon-youtube-squared" alt="youtube"></i></a></li>
          </ul>
        </div>
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
            <h3>Python <span>3 Years</span></h3>
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
            <h3>C <span>2 Years</span></h3>
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
            <h3>C++ <span>2 Years</span></h3>
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
            <h3>PHP <span>1 Year</span></h3>
            <div class="expand-bg"> <span class="expand php2"> &nbsp; </span> </div>
          </div>
        </div>
      </div>
      <!--END: Skills container-->

      <!-- Works container -->
      <div id="work" class="container">
        <h2>Portfolio</h2>
        
        <ul class="work-images">
          <li>
            <div><a href="##project1" title="OCR Radon Transformation"  data-toggle="modal" class="ocr">
                    <img src="<?php bloginfo('template_url'); ?>/img/projects/ocr-radon-thumb.png" />
                    <span class="text-content"><span>Place Name</span></span>
                    </a></div>
          </li>
          <li>
            <div><a href="##project2"  data-toggle="modal"><img src="<?php bloginfo('template_url'); ?>/img/projects/rocket-sim-thumb.png" /></a></div>
          </li>
          <li>
            <div><a href="##project3"  data-toggle="modal"><img src="<?php bloginfo('template_url'); ?>/img/projects/taktak-thumb.png" /></a></div>
          </li>
        </ul>
        <ul class="work-images">
          <li>
            <div><a href="##project4"  data-toggle="modal"><img src="<?php bloginfo('template_url'); ?>/img/projects/faces-thumb.png" /></a></div>
          </li>
          <li>
            <div><a href="##project5"  data-toggle="modal"><img src="<?php bloginfo('template_url'); ?>/img/projects/python-powered-thumb.png" /></a></div>
          </li>
          <li>
            <div><a href="##project6"  data-toggle="modal"><img src="<?php bloginfo('template_url'); ?>/img/projects/codeskulptor-games-thumb.png" /></a></div>
          </li>
        </ul>
        <ul class="work-images">
          <li>
            <div><a href="##project7"  data-toggle="modal"><img src="<?php bloginfo('template_url'); ?>/img/projects/virtual-tour-thumb.png" /></a></div>
          </li>
          <li>
            <div><a href="##project8"  data-toggle="modal"><img src="<?php bloginfo('template_url'); ?>/img/projects/python-powered-thumb.png" /></a></div>
          </li>
          <li>
            <div><a href="##project9"  data-toggle="modal"><img src="<?php bloginfo('template_url'); ?>/img/projects/python-powered-thumb.png" /></a></div>
          </li>
        </ul>
        <!-- <ul class="work-images">
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
        </ul> -->
        <!--Dummy images by The Fox And King :: http://dribbble.com/snootyfox-->
      </div>
      <!--END: Work container-->

      <!-- Resume container -->
      <div id="resume" class="container">
        <h2>My Resume</h2>
        <h3></h3>
        <div class="btn-center"> <a href="<?php bloginfo('template_url'); ?>/img/ritesh-CV.pdf" class="my-resume"><i class="icon-download"></i> Download Resume</a>
          <h2>29kb</h2>
        </div>
      </div>
      <!--END: Resume container-->

      <!-- Social Icons -->
      <!-- <div class="row social">
        <ul class="social-icons">
          <li><a href="https://www.facebook.com/ritesxz" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/fb.png" alt="facebook"></a></li>
          <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/tw.png" alt="twitter"></a></li>
          <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/go.png" alt="google plus"></a></li>
          <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/pin.png" alt="pinterest"></a></li>
          <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/st.png" alt="stumbleupon"></a></li>
          <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/dr.png" alt="dribbble"></a></li>
        </ul>
      </div> -->
      <!-- END: Social Icons -->
    </div>
    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <p class="pull-left"><a href="http://dzyngiri.com">www.riteshp.com.np</a></p>
        <p class="pull-right"><a href="##myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
      </div>
    </div>
    
    <!-- Modal -->
    <!-- Contact form in Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><i class="icon-mail"></i> Contactt Me</h3>
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

    <!-- Projects in modal -->
    <div id="project1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="OCR using Radon Transformation" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="project1"><i class="icon-mail"></i> OCR using Radon Transformation </h3>
      </div>
      <div class="modal-body">
      <!-- <img src="<?php bloginfo('template_url'); ?>/img/1.jpg" alt="project1"/> -->
      <div class="project-description">
          <ul>
            <li>This is test.fadfadfadfadfadfadfadfa</li>
            <li>This is tes2.</li>
            <li>This is test3.</li>
            <li>This is test4.</li>
          </ul>
          <a href="https://github.com/riteshpradhan/OCR-radon-transformation"><img src="<?php bloginfo('template_url'); ?>/img/Octocat/Octocat.png" alt="OCR using Radon Transformation" style="width:80px;height:80px"/></a>
      </div>
          <i class="icon-paper-plane"></i> SUBMIT
      </div>
    </div>


    <div id="project2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="Rocket Simulation" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="project2"><i class="icon-mail"></i> Rocket Simulation </h3>
      </div>
      <div class="modal-body">
      <div class="project-description">
          <ul>
            <li>This is test.fadfadfadfadfadfadfadfa</li>
            <li>This is tes2.</li>
            <li>This is test3.</li>
            <li>This is test4.</li>
          </ul>
          <a href="https://github.com/riteshpradhan/rocket_simulation"><img src="<?php bloginfo('template_url'); ?>/img/Octocat/Octocat.png" alt="Rocket Simulation" style="width:80px;height:80px"/></a>
        </div>
        <i class="icon-paper-plane"></i> SUBMIT
      </div>
    </div>

    <div id="project3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="TakTak Pictures Puzzle" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="project3"><i class="icon-mail"></i> TakTak Pictures Puzzle</h3>
      </div>
      <div class="modal-body">
        <div class="project-description">
          <a href="https://play.google.com/store/apps/details?id=com.anoncherrystudios.taktak">
            <img alt="Get it on Google Play" src="https://developer.android.com/images/brand/en_generic_rgb_wo_60.png" />
          </a>

          <a href="https://itunes.apple.com/us/app/taktak-picture-puzzles/id840761823?mt=8&uo=4" target="itunes_store">
            <img alt="Get it on App Store" src="<?php bloginfo('template_url'); ?>/img/logo-app_store.png" width="180" height="120" />
          </a>
        </div>
          <i class="icon-paper-plane"></i> SUBMIT
      </div>
      
    </div>

    <div id="project4" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="Faces" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="project4"><i class="icon-mail"></i> Faces </h3>
      </div>
      <div class="modal-body">
      <div class="project-description">
          <ul>
            <li>This is test.fadfadfadfadfadfadfadfa</li>
            <li>This is tes2.</li>
            <li>This is test3.</li>
            <li>This is test4.</li>
          </ul>
          <a href="https://github.com/riteshpradhan/riteshpradhan.github.io"><img src="<?php bloginfo('template_url'); ?>/img/Octocat/Octocat.png" alt="Faces" style="width:80px;height:80px"/></a>
          <a href="http://riteshpradhan.github.io"><img src="<?php bloginfo('template_url'); ?>/img/faces-play.png" alt="Faces" style="width:80px;height:80px"/></a>
        </div>
          <i class="icon-paper-plane"></i> SUBMIT
      </div>
    </div>

    <div id="project5" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="udacity-dl" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="project5"><i class="icon-mail"></i> udacity-dl </h3>
      </div>
      <div class="modal-body">
        <div class="project-description">
          <ul>
            <li>This is test.fadfadfadfadfadfadfadfa</li>
            <li>This is tes2.</li>
            <li>This is test3.</li>
            <li>This is test4.</li>
          </ul>
          <a href="https://github.com/riteshpradhan/udacity-dl">
            <img src="<?php bloginfo('template_url'); ?>/img/Octocat/Octocat.png" alt="udacity-dl" style="width:80px;height:80px"/>
          </a>
          <a href="https://pypi.python.org/pypi/udacity-dl">
            <img src="<?php bloginfo('template_url'); ?>/img/logo-python.png" alt="udacity-dl" style="width:160px;height:80px"/>
          </a>
        </div>
          <i class="icon-paper-plane"></i> SUBMIT
      </div>
    </div>

    <div id="project6" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="Codeskulptor Games" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="project6"><i class="icon-mail"></i> Codeskulptor Games </h3>
      </div>
      <div class="modal-body">
        <div class="project-description">
          <ul>
            <li>This is test.fadfadfadfadfadfadfadfa</li>
            <li>This is tes2.</li>
            <li>This is test3.</li>
            <li>This is test4.</li>
          </ul>
          <a href="https://github.com/riteshpradhan/Codeskulptor"><img src="<?php bloginfo('template_url'); ?>/img/Octocat/Octocat.png" alt="Codeskulptor Games" style="width:80px;height:80px"/></a>
        </div>
          <i class="icon-paper-plane"></i> SUBMIT
      </div>
    </div>

    <div id="project7" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="Virtual Tour" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="project7"><i class="icon-mail"></i> Virtual Tour </h3>
      </div>
      <div class="modal-body">
        <div class="project-description">
          <ul>
            <li>This is test.fadfadfadfadfadfadfadfa</li>
            <li>This is tes2.</li>
            <li>This is test3.</li>
            <li>This is test4.</li>
          </ul>
          <a href="https://github.com/riteshpradhan/Virtual_tour"><img src="<?php bloginfo('template_url'); ?>/img/Octocat/Octocat.png" alt="Virtual Tour" style="width:80px;height:80px"/></a>
        </div>
          <i class="icon-paper-plane"></i> SUBMIT
      </div>
    </div>

    <div id="project8" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="Maze" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="project8"><i class="icon-mail"></i> Maze </h3>
      </div>
      <div class="modal-body">
        <div class="project-description">
          <ul>
            <li>This is test.fadfadfadfadfadfadfadfa</li>
            <li>This is tes2.</li>
            <li>This is test3.</li>
            <li>This is test4.</li>
          </ul>
          <a href="https://github.com/riteshpradhan/maze"><img src="<?php bloginfo('template_url'); ?>/img/Octocat/Octocat.png" alt="Maze" style="width:80px;height:80px"/></a>
        </div>
          <i class="icon-paper-plane"></i> SUBMIT
      </div>
    </div>

    <div id="project9" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="Image Utility" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="project9"><i class="icon-mail"></i> Image Utility</h3>
      </div>
      <div class="modal-body">
        <div class="project-description">
          <ul>
            <li>This is test.fadfadfadfadfadfadfadfa</li>
            <li>This is tes2.</li>
            <li>This is test3.</li>
            <li>This is test4.</li>
          </ul>
          <a href="https://github.com/riteshpradhan/image_utility"><img src="<?php bloginfo('template_url'); ?>/img/Octocat/Octocat.png" alt="Image Utility" style="width:80px;height:80px"/></a>
        </div>

          <i class="icon-paper-plane"></i> SUBMIT
      </div>
    </div>

    <!-- Button trigger modal -->
    <!-- <a class="btn btn-primary btn-lg" href="#myModal1" data-toggle="modal">Launch demo modal</a> -->
     
    <!-- Modal -->
    <div id="myModal1" class="modal fade" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal">×</button>
              <h4 class="modal-title">Get to the Front of The Queue</h4>
          </div>
          <div class="modal-body">...</div>
          <div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="button">Save changes</button></div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Scripts -->
    <script src="<?php bloginfo('template_url'); ?>/js/vertical-scroll.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script>
                $('#myModal').modal('hidden')
    </script>
    </body>
    </html>
