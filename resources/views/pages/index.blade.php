
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!--favicon -icon-->
  @if(isset($main))
    <link rel="icon" type="image/png" sizes="16x16" href="img\favicon-16x16.png">
  @endif
	<link rel="manifest" href="manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
  <!--<link rel="shortcut icon" type="image/x-icon" href="img/m.png">-->
  

  <!-- Hosted fonts for this template -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

  <link rel="stylesheet" href="css\uikit.min.css">
  <link rel="stylesheet" href="css\font-awesome.min.css">
  <link rel="stylesheet" href="css\bootstrap.css">
  <link rel="stylesheet" href="css\navbar-fixed.css">
  <link rel="stylesheet" href="css\style.css">
  <link rel="stylesheet" href="css\custom.css">
  <script type="text/javascript" src="js\pt.min.js"></script>
  <title>Nahidul Islam</title>

  
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">

	<!--navsection-->
    <nav class="navbar navbar-dark navbar-expand-md" uk-sticky="top:200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
      <div class="container">
        <!--<a href="#" class="navbar-brand">Al-Amin Rony</a>-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto" id="menu">
              <li class="nav-item">
                <a class="nav-link" href="#home">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">SERVICES</a>
              </li>             
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">PORTFOLIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">CONTACT</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
<!--End  navsection-->

  <!--Canvas Section-->
  @if(!isset($main))
    <section id="home" class="flex height-fix">
      <div id="pt" class="canvas"></div>
      <div class="flex">
        <div class="text text-center">
        <span class="highlight"><strong>Your Name</strong></span>
            <br>
            Your Main Title Here
        </div>
        <div class="btn-group">
        <div class="btn btn-outline-warning button mr-2"><a href="#"><i class="fa fa-file mr-2"></i>Resume</a></div>
          <div class="btn btn-outline-warning button"><a href="#portfolio"><i class="fa fa-image mr-2"></i>Projects</a></div>  
        </div> 
      </div>
    </section>
    @else
    <section id="home" class="flex height-fix">
      <div id="pt" class="canvas"></div>
      <div class="flex">
        <div class="text text-center">
        <span class="highlight"><strong>{{$main->title}}</strong></span>
            <br>
            {{$main->sub_title}}
        </div>
        <div class="btn-group">
        <div class="btn btn-outline-warning button mr-2"><a href="{{url($main->resume)}}"><i class="fa fa-file mr-2"></i>Resume</a></div>
          <div class="btn btn-outline-warning button"><a href="#portfolio"><i class="fa fa-image mr-2"></i>Projects</a></div>  
        </div> 
      </div>
    </section>
    @endif
  <!--Canvas Section-->

   <!-- Services -->
   <section id="services">
    <div class="container py-5">
      <div class="row mb-5">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading wow fadeInLeft">services</h2>
        <div class="line wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1s"></div>
          <h6 class="text-muted font-italic p-4 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">I provide end to end solutions, from building the design & develop of your website or web application.</h6> 
  @if(!isset($services))
      </div>
    </div>

    <div class="row text-center text-dark">
      <div class="col-lg-3 col-md-6 ">
        <div class="card mb-2 wow fadeInLeft" data-wow-delay="1.8s">
        <span class="fa-stack fa-5x align-self-center m-2">
          <i class="fa fa-circle fa-stack-2x text-warning"></i>
          <i class="fa fa-cog fa-stack-1x fa-inverse"></i>
        </span>
      <h3>Your service title here</h3>
      <p class="text-muted">Your Service Description here</p>
      </div>
      </div>
    </div>
  </div>
</section>
@else
      </div>
    </div>

    <div class="row text-center text-dark">
      @foreach($services as $service)
      <div class="col-lg-3 col-md-6 ">
        <div class="card mb-2 wow fadeInLeft" data-wow-delay="1.8s">
        <span class="fa-stack fa-5x align-self-center m-2">
          <i class="fa fa-circle fa-stack-2x text-warning"></i>
          <i class="{{ $service->icon }} fa-stack-1x fa-inverse"></i>
        </span>
      <h3>{{ $service->title }}</h3>
      <p class="text-muted">{{ $service->description }}</p>
      </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif    


<!-- Home Get Started -->
 <section id="home-getstarted" class="text-center text-light">
 <div class="dark-overlay">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="py-4">
           <h2>My Working Process</h2>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-4">
           <i class="fa fa-diamond text-warning"></i>
          <h3>planning & strategy</h3>
          <p>It all starts with planning and making the right strategies for the website.</p>
     </div>
       <div class="col-md-4">
         <i class="fa fa-pencil-square-o text-warning"></i>
        <h3>design & develop</h3>
        <p>It then starts with designing of the look and feel of the website along with the development of the backend..</p>
       </div>
       <div class="col-md-4">
         <i class="fa fa-plane text-warning"></i>
        <h3>test & deliver</h3>
        <p>Testing is the most crucial phase of the website. To test and fix the responsiveness and bugs of the website before making it live..</p>
    </div>
</div>
   </div>
 </div>
</section>




<!--PORTFOLIO SECTION-->
<section id="portfolio" class="bg-light">
  <div class="container py-5">

    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="section-heading wow fadeInRight">PROJECTS</h2>
      <div class="line2 wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1s"></div>
        <h6 class="text-muted font-italic p-4 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">Check out my latest web Design & web based application projects.</h6>
      </div>
    </div>

    <div class="row portfolio-image">
      @foreach($portfolios as $portfolio)
          <div class="col-lg-3 col-md-6 mix php wow fadeInLeft" data-wow-delay="1.8s">
            <div class="card mb-4">
                <div class="hovereffect">
                <img class="img-fluid" src="{{url($portfolio->pa_img)}}" alt="">

                <div class="overlay">
                <h2>{{$portfolio->title}}</h2>
                <a class="info" data-toggle="modal" data-target="#ModalCarousel{{$portfolio->id}}">Details</a>
                </div>
            </div>
            </div>
          </div>

<!-- Modal -->
  <div class="modal" id="ModalCarousel{{$portfolio->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalCarouselLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
  
        <!--The main div for carousel-->
        <div id="" class="carousel slide carousel-modal-demo{{$portfolio->id}}" data-ride="carousel" data-interval="3000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target=".carousel-modal-demo{{$portfolio->id}}" data-slide-to="0" class="active"></li>
            <li data-target=".carousel-modal-demo{{$portfolio->id}}" data-slide-to="1"></li>
            <li data-target=".carousel-modal-demo{{$portfolio->id}}" data-slide-to="2"></li>
            <li data-target=".carousel-modal-demo{{$portfolio->id}}" data-slide-to="3"></li>
        </ol>
  <!-- Sliding images statring here -->
        <div class="carousel-inner">
          <div class="item active carousel-item">
          <img src="{{url($portfolio->pb_img)}}" alt="banana">
              <div class="carousel-caption">
        
              </div>
          </div>
          <div class="item carousel-item">
              <img src="{{url($portfolio->pc_img)}}" alt="currant">
              <div class="carousel-caption">
        
              </div>
          </div>
          <div class="item carousel-item">
              <img src="{{url($portfolio->pd_img)}}" alt="mango">
              <div class="carousel-caption">
        
              </div>
          </div>
          <div class="item carousel-item">
              <img src="{{url($portfolio->pe_img)}}" alt="strawberries">
              <div class="carousel-caption">
        
              </div>
          </div>
        </div>
  <!-- Next / Previous controls here -->
                  <a href=".carousel-modal-demo{{$portfolio->id}}" class="carousel-control-prev" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
          
                  <a href=".carousel-modal-demo{{$portfolio->id}}" class="carousel-control-next" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>  
        </div>
<!--The main div for carousel end here-->

              <div class="modal-footer">
                 <div class="container">
                 <h3 class="text-dark">{{$portfolio->title}}</h3>
                     <hr>
                 <p class="text-muted"><p>{{$portfolio->description}}</p>
  
                 <a href="{{$portfolio->view_site}}" class="btn btn-default">
                       <i class="fa fa-external-link"></i> View site
                    </a>
                    <!-- <a href="#" class="btn btn-default">
                    <i class="fab fa-github"></i> Github
                    </a> -->
                    <button type="button" class="close text-dark" aria-label="Close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
              </div>
            </div>
            
          </div>
      </div>
  </div>
  
  <!-- Modal -->
      @endforeach
   
    </div>
  </div>
</section> --}}








<!--End PORTFOLIO SECTION-->




<!-- choose-me -->
 <section id="choose-me" class="text-center text-light">
 <div class="dark-overlay">
   <div class="container">

     <div class="row">
       <div class="col-md-12">
         <div class="py-4">
           <h2>Why Choose Me?</h2>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-4">
           <i class="fa fa-star-half-o text-warning"></i>
          <h3>Expertise</h3>
          <p>I am the right person and expertise to meet your expectation.</p>
     </div>

       <div class="col-md-4">
         <i class="fa fa-handshake-o text-warning"></i>
        <h3>Trust</h3>
        <p>Since 2019 I have served many local and international clients and gain trust by meeting their expectation.</p>
       </div>

       <div class="col-md-4">
         <i class="fa fa-check-square-o text-warning"></i>
        <h3>Dedication</h3>
        <p>I am dedicated to giving you the best service as much as possible. And I will prove it.</p>
    </div>

      </div>
   </div>
 </div>
</section>

<!-- About Section -->
<section id="about">
  <div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
          <div class="mb-5 text-center">
            <h2 class="section-heading wow fadeInLeft">About</h2>
            <div class="line wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1s"></div>
            <h6 class="text-muted font-italic p-4 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">I am extremely passionate about Web design & web Development.</h6>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-4 ">
        <div class="our-team">
          <div class="pic wow fadeInLeft" data-wow-delay="1s">
            <img src="img\profile.jpg" alt="Developer Image">
          </div>
          <div class="team-content wow fadeInUp" data-wow-delay="1s">
            <h3 class="title ">Nahidul Islam</h3>
            <span class="post">Web Designer & Developer.</span>
            <p class="p-2 text-dark">Hi! I have my own passion to Work & My performance speaks for my Level. I offer you the best quality with responsive design & most secure dynamic flatform.
    I work with HTML, CSS, BOOTSTARP, PHP, JAVASCRIPT, JQUERY, AJAX & LARAVEL. </p>
          </div>
          <ul class="social">
            <li><a href="https://facebook.com/nahidul.me/" class="fa fa-facebook"></a></li>
            <li><a href="https://twitter.com/nahidul77/" class="fa fa-twitter"></a></li>
            <li><a href="https://github.com/nahidul77/" class="fa fa-github"></a></li>
            <li><a href="https://www.linkedin.com/in/nahidul77/" class="fa fa-linkedin"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-8"><!--My Working Skill -->
        <div class="text-center p-3">
          <h4 class="font-weight-bold wow fadeInRight">TECHNICAL SKILLS</h4>
        </div>

        <div class="skillbar clearfix wow fadeInRight" data-percent="90%" data-wow-delay="0.1s">
          <div class="skillbar-title" style="background: #FFC107;"><span>HTML5</span></div>
          <div class="skillbar-bar" style="background: #FFC107;"></div>
          <div class="skill-bar-percent">90%</div>
        </div>

        <div class="skillbar clearfix wow fadeInRight" data-percent="60%" data-wow-delay="0.2s">
          <div class="skillbar-title" style="background: #FFC107;"><span>CSS3</span></div>
          <div class="skillbar-bar" style="background: #FFC107;"></div>
          <div class="skill-bar-percent">60%</div>
        </div>
        <div class="skillbar clearfix wow fadeInRight" data-percent="80%" data-wow-delay="0.3s">
          <div class="skillbar-title" style="background: #FFC107;"><span>BOOTSTRAP</span></div>
          <div class="skillbar-bar" style="background: #FFC107;"></div>
          <div class="skill-bar-percent">80%</div>
        </div>
        <div class="skillbar clearfix wow fadeInRight" data-percent="50%" data-wow-delay="0.4s">
          <div class="skillbar-title" style="background: #FFC107;"><span>JAVASCRIPT</span></div>
          <div class="skillbar-bar" style="background: #FFC107;"></div>
          <div class="skill-bar-percent">50%</div>
        </div>
        <div class="skillbar clearfix wow fadeInRight" data-percent="75%" data-wow-delay="0.5s">
          <div class="skillbar-title" style="background: #FFC107;"><span>JQUERY</span></div>
          <div class="skillbar-bar" style="background: #FFC107;"></div>
          <div class="skill-bar-percent">75%</div>
        </div>
        <div class="skillbar clearfix wow fadeInRight" data-percent="85%" data-wow-delay="0.6s">
          <div class="skillbar-title" style="background: #FFC107;"><span>PHP</span></div>
          <div class="skillbar-bar" style="background: #FFC107;"></div>
          <div class="skill-bar-percent">85%</div>
        </div>
        <div class="skillbar clearfix wow fadeInRight" data-percent="70%" data-wow-delay="0.7s">
          <div class="skillbar-title" style="background: #FFC107;"><span>LARAVEL</span></div>
          <div class="skillbar-bar" style="background: #FFC107;"></div>
          <div class="skill-bar-percent">70%</div>
        </div>
        <div class="skillbar clearfix wow fadeInRight" data-percent="80%" data-wow-delay="0.8s">
          <div class="skillbar-title" style="background: #FFC107;"><span>MYSQL</span></div>
          <div class="skillbar-bar" style="background: #FFC107;"></div>
          <div class="skill-bar-percent">80%</div>
        </div>
        <div class="skillbar clearfix wow fadeInRight" data-percent="70%" data-wow-delay="0.9s">
          <div class="skillbar-title" style="background: #FFC107;"><span>AJAX</span></div>
          <div class="skillbar-bar" style="background: #FFC107;"></div>
          <div class="skill-bar-percent">70%</div>
        </div>
        <div class="skillbar clearfix wow fadeInRight" data-percent="50%" data-wow-delay="1s">
          <div class="skillbar-title" style="background: #FFC107;"><span>VUE JS</span></div>
          <div class="skillbar-bar" style="background: #FFC107;"></div>
          <div class="skill-bar-percent">50%</div>
        </div>
   </div>
</div>
</div></section>


<!--CONTACT SECTION-->
 <section id="contact">
  <div class="container py-5">
    <div class="row py-4">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading wow fadeInRight">contact</h2>
      <div class="line1 wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1s"></div>
        <h6 class="text-light font-italic p-4 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">Have a questions or want to work together? Feel free to contact with me.</h6>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 ">
        <form id="contactForm" action="mail.php" method="POST">
          <div class="row">
            <div id="error_message" class="text-danger text-center col-md-12"></div>
            <div class="col-md-6">
              <div class="form-group wow fadeInUp" data-wow-delay="0.4s">
                <input class="form-control form-control-lg" id="name" type="text" name="name" placeholder="Your Name *" required="required">
                <p class="text-danger" id="error_name"></p>
              </div>
              <div class="form-group wow fadeInUp" data-wow-delay="0.8s">
                <input class="form-control form-control-lg" id="email" type="email" name="email" placeholder="Your Email *" required="required">
                <p class="text-danger" id="error_email"></p>
              </div>
              <div class="form-group wow fadeInUp" data-wow-delay="1.2s">
                <input class="form-control form-control-lg" id="phone" type="tel" name="phone" placeholder="Your Phone *" required="required">
                <p class="text-danger" id="error_phone"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group wow fadeInUp" data-wow-delay="0.8s">
                <textarea rows="5" class="form-control form-control-lg pb-3" id="message"  name="message" placeholder="Your Message *" required="required"></textarea>
                <p class="text-danger" id="error_message"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button class="btn btn-warning btn-lg text-uppercase wow fadeInUp" data-wow-delay="1.4s" type="submit" id="submit">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!--Footer Section -->
<section id="footer" class="py-5">
  <div class="container">

    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 mt-3">
        <ul class="list-unstyled list-inline social text-center">
          <li class="list-inline-item"><a href="https://facebook.com/nahidul.me/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
          <li class="list-inline-item"><a href="https://twitter.com/nahidul77/" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
          <li class="list-inline-item"><a href="https://github.com/nahidul77/" target="_blank"><i class="fa fa-github-square"></i></a></li>
          <li class="list-inline-item"><a href="https://linkedin.com/in/nahidul77/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
      </div>
      
    </div>
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 text-center">
        <p class="h6">Copyright &copy; 2020 Nahidul Islam. All Rights Reserved.</p>
      </div>
      
    </div>
  </div>
</section>
<!--END Footer Section -->



  <script src="js\jquery.min.js"></script>
  <script src="js\popper.min.js"></script>
  <script src="js\bootstrap.min.js"></script>
  <script src="js\uikit.min.js"></script>
  <script src="js\navbar-fixed.js"></script>
  <script src="js\canvas.js"></script>
  <script src="js\mixitup.min.js"></script>
  <script src="js\main.js"></script>
  <script src="js\jquery.nicescroll.min.js"></script>
  <script src="js\wow.min.js"></script>

  <script>new WOW().init();</script>
  <script>
   $(document).ready(function(){
        $('#submit').click(function(){
             var name    = $('#name').val();
             var email  = $('#email').val();
             var phone  = $('#phone').val();
             var message  = $('#message').val();
             if(name == '' || email == '' || phone == ''|| message == '')
             {
                 $('#error_message').html("All Fields are required*");

             }
             else
             {

                // $('#error_message').html('');
                  $.ajax({
                       url:"classess/contact.php",
                       method:"POST",
                       data:{name:name,email:email,phone:phone, message:message},
                       success:function(data){
                            $("form").trigger("reset");
                            $('#error_message').fadeIn().html(data);
                            setTimeout(function(){
                                 $('#error_message').fadeOut("Slow");
                            },3000);
                       }
                  });
                  return false;

             }
        });
   });
   </script>




</body>
</html>
