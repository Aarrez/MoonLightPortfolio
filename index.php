<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Portfolio Aaron Marklund</title>

        <meta name="description" content="">
        <link rel="stylesheet" href="css/customStyle.css"></link>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png"></link>
        <link rel="stylesheet" href="css/bootstrap.min.css"></link>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css"></link>
        <link rel="stylesheet" href="css/fontAwesome.css"></link>
        <link rel="stylesheet" href="css/light-box.css"></link>
        <link rel="stylesheet" href="css/templatemo-main.css"></link>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <?php
    require_once 'dbConfig.php';
    $colsave3= "col-md-6";
    $colsave4= "col-md-6 col-sm-4";
    $p1 ="http://www.google.com";
    $p2 ="#";
    $p3 ="#";
    $p4 ="#";
     ?>
<body>
    <div class="sequence">
      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>

    </div>
        <nav>
          <div class="logo">
              <img src="img/logo.png" alt="">
          </div>
          <div class="mini-logo">
              <img src="img/mini_logo.png" alt="">
          </div>
          <ul>
            <li><a href="#1"><i class="fa fa-home"></i> <em>Home</em></a></li>
            <li><a href="#2"><i class="fa fa-user"></i> <em>About</em></a></li>
            <li><a href="#3"><i class="fa fa-pencil"></i> <em>Work</em></a></li>
            <li><a href="#4"><i class="fa fa-image"></i> <em>Projects</em></a></li>
            <li><a href="#5"><i class="fa fa-envelope"></i> <em>Contact</em></a></li>
          </ul>
        </nav>
        <div class="slides">
          <div class="slide" id="1">
            <div class="content first-content">
              <div class="container-fluid" id="inCon1">
                  <div class="col-md-3">
                    <div class="author-image"><img src="img/stones.JPG" alt="Author Image"></div>
                  </div>-->
                  <div class="col-md-9">
                      <h2>Aaron Marklund</h2>
                      <p><em>This is just temporary text</em> that will be replaced with a short
                        <strong>introduction</strong> and/or a short one to two line elevator pitch.
                        This text can also be a short story about my life if I feel like cringeing</p>
                  </div>
                  <div class="container-fluid">
                      <div class="social-icons mt-4">
                          <a href="https://github.com/Aarrez/" target="_blank"><i class="fab fa-github"></i></a>
                          <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="slide" id="2">
            <div class="content second-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="left-content">
                            <h2>About Me</h2>
                            <p>Please tell your friends about templatemo website. A variety of free CSS templates are available for immediate downloads.</p>
                            <p>Phasellus vitae faucibus orci. Etiam eleifend orci sed faucibus semper. Cras varius dolor et augue fringilla, eu commodo sapien iaculis. Donec eget dictum tellus. <a href="#">Curabitur</a> a interdum diam. Nulla vestibulum porttitor porta.</p>
                            <p>Nulla vitae interdum libero, vel posuere ipsum. Phasellus interdum est et dapibus tempus. Vestibulum malesuada lorem condimentum mauris ornare dapibus. Curabitur tempor ligula et <a href="#">placerat</a> molestie.</p>
                            <p>Aliquam efficitur eu purus in interdum. <a href="#">Etiam tincidunt</a> magna ex, sit amet lobortis felis bibendum id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                          <div class="main-btn"><a href="#3">Read More</a></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                          <img src="img/about_image.jpg" alt="">
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="slide" id="3">
            <div class="content third-content">
                <div class="container-fluid">
                  <div class="exHead">
                    <h1>Title</h1>
                  </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="first-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class=<?= $colsave3 ?> content="Text area" >
                                            <div class="left-content">
                                                <h2>Previous experience</h2>
                                                  <p>
                                                  I have acquired some knowlage form Indegame develepment course.
                                                  Before I studied a tech program in high school where I learned the baseics of
                                                  codeing and the difference between web developemnt and game development.
                                                  </p>
                                            </div>
                                        </div>
                                        <div class=<?= $colsave3 ?> content="Image area">
                                            <div class="right-image">
                                                <img src="img/theJoyOfFishing.png" alt="first service">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="second-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class=<?= $colsave3 ?> content="Image area">
                                            <div class="left-image">
                                                <img src="img/second_service.jpg" alt="second service">
                                            </div>
                                        </div>
                                        <div class=<?= $colsave3 ?> content="Text area">
                                            <div class="right-content">
                                              <h2>Maecenas eu purus eu sapien</h2>
                                                <p>Sed vitae felis in lorem mollis mollis eget in leo. Donec commodo, ex nec rutrum venenatis, nisi nisl malesuada magna, sed semper ipsum enim a ipsum. Aenean in ante vel mi molestie bibendum. Quisque sit amet lacus in diam pretium faucibus. Cras vel justo lorem.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="slide" id="4">
            <div class="content fourth-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class=<?= $colsave4 ?>>
                            <div class="item">
                              <a href=<?= $p1 ?>>
                                <div class="thumb">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number One</h2>
                                            <p>Quisque sit amet lacus in diam pretium faucibus. Cras vel justo lorem.</p>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="img/first_big_item.jpg">
                                    </div>
                                </div>
                              </a>
                            </div>
                        </div>
                        <div class=<?= $colsave4; ?>>
                            <div class="item">
                              <a href=<?= $p2?>>
                                <div class="thumb">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number Two</h2>
                                            <p>Donec eget dictum tellus. Curabitur a interdum diam. Nulla vestibulum porttitor porta.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/second_big_item.jpg">
                                    </div>
                                </div>
                              </a>
                            </div>
                        </div>
                        <div class=<?= $colsave4; ?>>
                            <div class="item">
                              <a href=<?= $p3 ?>>
                                <div class="thumb">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number Three</h2>
                                            <p>Cras varius dolor et augue fringilla, eu commodo sapien iaculis.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/third_big_item.jpg">
                                    </div>
                                </div>
                              </a>
                            </div>
                        </div>
                        <div class=<?= $colsave4; ?>>
                            <div class="item">
                              <a href=<?= $p4 ?>>
                                <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h2>Number Four</h2>
                                        <p>Vestibulum augue ex, finibus sit amet nisi id, maximus ultrices ipsum.</p>
                                    </div>
                                </div>
                                <div class="image">
                                  <img src="img/fourth_big_item.jpg">
                                </div>
                                </div>
                              </a>
                            </div>
                        </div>
                        <div class= "col-md-6 col-sm-4 filler">
                        </div>
                        <div class= "col-md-6 col-sm-4 filler">

                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="slide" id="5">
            <div class="content fifth-content">
                <div class="container-fluid" id="contact-tab">
                  <div class="navbar contact-title">
                    <h1>Here you can die</h1>
                  </div>
                  <!--<div class="col-md-6">
                      <div id="map">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52769.726122148626!2d22.112341658604677!3d65.5867168401385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x467f6314d2e8b867%3A0x4034506de8c8620!2zTHVsZcOl!5e0!3m2!1ssv!2sse!4v1663164701280!5m2!1ssv!2sse" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                      </div>
                  </div>-->
                  <!--<div class="col-md-6">
                      <form id="contact" action="" method="post">
                          <div class="row">
                              <div class="col-md-12">
                                <fieldset>
                                  <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                </fieldset>
                              </div>
                              <div class="col-md-12">
                                <fieldset>
                                  <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                </fieldset>
                              </div>
                              <div class="col-md-12">
                                <fieldset>
                                  <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                </fieldset>
                                </div>
                              <div class="col-md-12">
                                <fieldset>
                                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                </fieldset>
                              </div>
                              <div class="col-md-12">
                                <fieldset>
                                  <button type="submit" id="form-submit" class="btn">Send Now</button>
                                </fieldset>
                              </div>
                          </div>
                      </form>
                  </div>-->
                </div>
            </div>
          </div>
        </div>
        <div class="footer">
          <div class="content">
          </div>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {



        // navigation click actions
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
    <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>


</body>
</html>
