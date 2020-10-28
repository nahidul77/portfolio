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
        <form id="contactForm" action="{{route('contact.store')}}" method="POST">
            @csrf
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
                <div id="success">@include('alert.messages')</div>
                <button class="btn btn-warning btn-lg text-uppercase wow fadeInUp" data-wow-delay="1.4s" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>