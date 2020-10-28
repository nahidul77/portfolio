<section id="home" class="flex height-fix">
    <div id="pt" class="canvas"></div>
    <div class="flex">
      <div class="text text-center">
      <span class="highlight"><strong>{{isset($site->title)? $site->title : 'Your Title'}}</strong></span>
          <br>
          {{isset($site->sub_title)? $site->sub_title : 'Your Sub Title'}}
      </div>
      <div class="btn-group">
      <div class="btn btn-outline-warning button mr-2"><a href="{{isset($site->resume)? url($site->resume) : '#'}}"><i class="fa fa-file mr-2"></i>Resume</a></div>
        <div class="btn btn-outline-warning button"><a href="#portfolio"><i class="fa fa-image mr-2"></i>Projects</a></div>  
      </div> 
    </div>
  </section>