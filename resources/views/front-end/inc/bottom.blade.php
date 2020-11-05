<section id="footer" class="py-5">
    <div class="container">
  
      <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 mt-3">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="{{isset($profile->fb_link)? url($profile->fb_link) : '#'}}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
            <li class="list-inline-item"><a href="{{isset($profile->tw_link)? url($profile->tw_link) : '#'}}" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
            <li class="list-inline-item"><a href="{{isset($profile->git_link)? url($profile->git_link) : '#'}}" target="_blank"><i class="fa fa-github-square"></i></a></li>
            <li class="list-inline-item"><a href="{{isset($profile->in_link)? url($profile->in_link) : '#'}}" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
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
  