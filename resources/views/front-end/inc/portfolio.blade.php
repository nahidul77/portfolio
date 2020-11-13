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
    
      @if(isset($portfolios))
      @foreach($portfolios as $portfolio)   
            <div class="col-lg-3 col-md-6 mix php wow fadeInLeft" data-wow-delay="1.8s">
              <div class="card mb-4">
                  <div class="hovereffect">
                  <img class="img-fluid" src="{{url($portfolio->img_a)}}" alt="">

                  <div class="overlay">
                  <h2>{{$portfolio->title}}</h2>
                  <a class="info" data-toggle="modal" data-target="#ModalCarousel{{$portfolio->id}}">Details</a>
                  </div>
              </div>
              </div>
            </div>

    <!-- Modal -->
              <div class="modal" id="ModalCarousel{{$portfolio->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalCarouselLabel">
                <div class="modal-dialog modal-md" role="document">
                  <div class="modal-content">
              
                    <!--The main div for carousel-->
                    <div id="" class="carousel slide carousel-modal-demo{{$portfolio->id}}" data-ride="carousel" data-interval="3000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target=".carousel-modal-demo{{$portfolio->id}}" data-slide-to="0" class="active"></li>
                        <li data-target=".carousel-modal-demo{{$portfolio->id}}" data-slide-to="1"></li>
                        <li data-target=".carousel-modal-demo{{$portfolio->id}}" data-slide-to="2"></li>
                        <li data-target=".carousel-modal-demo{{$portfolio->id}}" data-slide-to="3"></li>
                        <li data-target=".carousel-modal-demo{{$portfolio->id}}" data-slide-to="4"></li>
                    </ol>
  <!-- Sliding images statring here -->
                            <div class="carousel-inner">
                              <div class="item active carousel-item">
                              <img src="{{url($portfolio->img_a)}}" alt="portfolio_image">
                                  <div class="carousel-caption">
                            
                                  </div>
                              </div>
                              @if(isset($portfolio->img_b))
                                <div class="item carousel-item">
                                    <img src="{{url($portfolio->img_b)}}" alt="portfolio_image">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                              @endif
                              @if(isset($portfolio->img_c))
                                <div class="item carousel-item">
                                    <img src="{{url($portfolio->img_c)}}" alt="portfolio_image">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                              @endif
                              @if(isset($portfolio->img_d))
                                <div class="item carousel-item">
                                    <img src="{{url($portfolio->img_d)}}" alt="portfolio_image">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                              @endif
                              @if(isset($portfolio->img_e))
                                <div class="item carousel-item">
                                    <img src="{{url($portfolio->img_e)}}" alt="portfolio_image">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                              @endif
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
                      <a href="{{isset($portfolio->site_link)? $portfolio->site_link: '#'}}" class="btn btn-default">
                        <i class="fa fa-external-link"></i> View site
                      </a>
                      <button type="button" class="close text-dark" aria-label="Close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button><hr>
                      <h3 class="text-dark text-center">{{$portfolio->title}}</h3>
                          <hr>
                      <p class="text-muted"><p>{{isset($portfolio->description) ? $portfolio->description : ''}}</p>
                    </div>
                  </div>
                </div>
            </div>
        </div> 
      </div>
    
  <!-- Modal -->
      @endforeach
      @else
      <div class="col-lg-3 col-md-6 mix php wow fadeInLeft" data-wow-delay="1.8s">
        <div class="card mb-4">
            <div class="hovereffect">
            <img class="img-fluid" src="http://www.placehold.it/800x800/EFEFEF/AAAAAA&amp;text=no+image" alt="">

            <div class="overlay">
            <h2>Demo</h2>
            <a class="info" data-toggle="modal" data-target="#ModalCarouseldemo">Details</a>
            </div>
        </div>
        </div>
      </div>
    @endif
  </div>
  </div>
</section>
  