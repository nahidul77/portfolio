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