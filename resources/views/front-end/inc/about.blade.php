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
              <img src="{{isset($profile->profile_img)? url($profile->profile_img) : 'http://www.placehold.it/300x300/EFEFEF/AAAAAA&amp;text=no+image'}}" alt="Developer Image">
            </div>
            <div class="team-content wow fadeInUp" data-wow-delay="1s">
              <h3 class="title ">{{isset($profile->name)? $profile->name : 'Your Name'}}</h3>
              <span class="post">{{isset($profile->title)? $profile->title : 'Your Title'}}</span>
              <p class="p-2 text-dark">{{isset($profile->description)? $profile->description : 'Describe Yourself'}}</p>
            </div>
            <ul class="social">
              <li><a href="{{isset($profile->fb_link)? url($profile->fb_link) : '#'}}" class="fa fa-facebook"></a></li>
              <li><a href="{{isset($profile->tw_link)? url($profile->tw_link) : '#'}}" class="fa fa-twitter"></a></li>
              <li><a href="{{isset($profile->in_link)? url($profile->in_link) : '#'}}" class="fa fa-linkedin"></a></li>
              <li><a href="{{isset($profile->git_link)? url($profile->git_link) : '#'}}" class="fa fa-github"></a></li>
            </ul>
          </div>
        </div>