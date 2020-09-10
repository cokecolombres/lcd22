@extends('layouts.app')
@section('content')

<section class="page-title bg-dark parallax pb-10 pt-90" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/programming2.jpg);">
    
</section>

<section class="our-team bg-gray2 page-section">
    <br>
    <div class="container-fluid">
      <div class="row profile">
        <div class="col-md-3">
          <div class="profile-sidebar">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic text-center">
              <img src="{{asset('lacompaniadigital/images/blog/011.jpg')}}" class="img-responsive" alt="">
            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
              <div class="profile-usertitle-name">
                Maartin Smith
              </div>
              <div class="profile-usertitle-job">
                Web design
              </div>
            </div>
            <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR BUTTONS -->
            <div class="profile-userbuttons mb-20">
              <button type="button" class="btn btn-success btn-sm">Seguir</button>
              <button type="button" class="btn btn-danger btn-sm">Mensaje</button>
            </div>
            <!-- END SIDEBAR BUTTONS -->
          </div>
        </div>
        <div class="col-md-9">
          <div class="card card-body">
            <div class="clearfix">
              <div class="title float-left mb-20">
                <h2 class="theme-color">Martin Smith</h2>
                <span>Web design</span>
               </div>
               </div>
              <div class="clearfix">
                 <p>Consectetur adipisicing eli. Vero quod conseqt quibusdam enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic obcaecati. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. </p>
              </div>
            </div>
            <br>
            <div class="tab tab-border nav-left">
              
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link show active" id="home-06-tab" data-toggle="tab" href="#home-06" role="tab" aria-controls="home-06" aria-selected="true"> <i class="fa fa-home"></i> Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-06-tab" data-toggle="tab" href="#profile-06" role="tab" aria-controls="profile-06" aria-selected="false"><i class="fa fa-user"></i> Perfil </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="portfolio-06-tab" data-toggle="tab" href="#portfolio-06" role="tab" aria-controls="portfolio-06" aria-selected="false"><i class="fa fa-picture-o"></i> Publicaciones </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-06-tab" data-toggle="tab" href="#contact-06" role="tab" aria-controls="contact-06" aria-selected="false"><i class="fa fa-check-square-o"></i> Contacto </a>
                  </li>
                </ul>
                <div class="tab-content bg-white" id="myTabContent" style="min-height: 60vh">
                  <div class="tab-pane fade active show" id="home-06" role="tabpanel" aria-labelledby="home-06-tab">
                    <p>The best way is to develop and follow a plan. Start with your goals in mind and then work backwards to develop the plan. What steps are required to get you to the goals? Make the plan as detailed as possible. Try to visualize and then plan for, every possible setback. Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer to your Vision and Goals. If the plan doesn’t support the vision then change it!</p>
                  </div>
                  <div class="tab-pane fade" id="profile-06" role="tabpanel" aria-labelledby="profile-06-tab">
                    <p>We all carry a lot of baggage, thanks to our upbringing. The majority of people carry with them, an entire series of self-limiting beliefs that will absolutely stop, and hold them back from, success. Things like “I’m not good enough”, “I’m not smart enough”, “I’m not lucky enough”, and the worst, “I’m not worthy” are but a few of the self-limiting beliefs I have encountered. We carry them with us like rocks in a knapsack, and then use them to sabotage our success. So, how twisted is that? </p>
                  </div>
                  <div class="tab-pane fade" id="portfolio-06" role="tabpanel" aria-labelledby="portfolio-06-tab">
                    <p>Benjamin Franklin, inventor, statesman, writer, publisher and economist relates in his autobiography that early in his life he decided to focus on arriving at moral perfection. He made a list of 13 virtues, assigning a page to each. Under each virtue he wrote a summary that gave it fuller meaning. Then he practiced each one for a certain length of time. To make these virtues a habit, Franklin can up with a method to grade himself on his daily actions.</p>
                  </div>
                  <div class="tab-pane fade" id="contact-06" role="tabpanel" aria-labelledby="contact-06-tab">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 text-left">
                          <div class="section-title">
                            <h3 class="title-effect">Do You Want To Contact Me?</h3>
                            <p class="mb-30">It would be great to hear from you! If you got any questions, please do not hesitate to send me a message. I am looking forward to hearing from you!</p>
                           </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div id="formmessage">Success/Error Message Goes Here</div>
                          <form id="contactform" role="form" method="post" action="php/contact-form.php">
                            <div class="contact-form clearfix">
                              <div class="section-field">
                                <input id="name" type="text" placeholder="Name*" class="form-control" name="name">
                              </div>
                              <div class="section-field">
                                <input type="email" placeholder="Email*" class="form-control" name="email">
                              </div>
                              <div class="section-field">
                                <input type="text" placeholder="Phone*" class="form-control" name="phone">
                              </div>
                              <div class="section-field textarea">
                               <textarea class="input-message form-control" placeholder="Comment*" rows="7" name="message"></textarea>
                              </div>
                              <!-- Google reCaptch-->
                              <div class="g-recaptcha section-field clearfix" data-sitekey="[Add your site key]">   
                              </div>
                              <input type="hidden" name="action" value="sendEmail">
                              <button id="submit" name="submit" type="submit" value="Send" class="button button-border-blue"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
                            </div>
                          </form>
                          <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="images/pre-loader/loader-02.svg" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
         <div class="col-lg-2 sm-mb-30">
          <div class="sticky-top">
            <br>
            <img class="img-fluid full-width" src="images/team/12.jpg" alt="">
            <button type="button" class="btn btn-outline-secondary btn-block">Atras</button>
            <button type="button" class="btn btn-outline-secondary btn-block">Secondary</button>
            <button type="button" class="btn btn-outline-secondary btn-block">Secondary</button>
            <button type="button" class="btn btn-outline-secondary btn-block">Secondary</button>
          </div>
       </div>
      <div class="col-lg-10 col-md-8 page-content">
        <br>
        <div class="team-details card-body bg-white">
        
        <div class="tab tab-border nav-left">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link show active" id="home-06-tab" data-toggle="tab" href="#home-06" role="tab" aria-controls="home-06" aria-selected="true"> <i class="fa fa-home"></i> Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-06-tab" data-toggle="tab" href="#profile-06" role="tab" aria-controls="profile-06" aria-selected="false"><i class="fa fa-user"></i> Perfil </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="portfolio-06-tab" data-toggle="tab" href="#portfolio-06" role="tab" aria-controls="portfolio-06" aria-selected="false"><i class="fa fa-picture-o"></i> Publicaciones </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-06-tab" data-toggle="tab" href="#contact-06" role="tab" aria-controls="contact-06" aria-selected="false"><i class="fa fa-check-square-o"></i> Contacto </a>
              </li>
            </ul>
            <div class="tab-content bg-white" id="myTabContent" style="min-height: 40vh">
              <div class="tab-pane fade active show" id="home-06" role="tabpanel" aria-labelledby="home-06-tab">
                <p>The best way is to develop and follow a plan. Start with your goals in mind and then work backwards to develop the plan. What steps are required to get you to the goals? Make the plan as detailed as possible. Try to visualize and then plan for, every possible setback. Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer to your Vision and Goals. If the plan doesn’t support the vision then change it!</p>
              </div>
              <div class="tab-pane fade" id="profile-06" role="tabpanel" aria-labelledby="profile-06-tab">
                <p>We all carry a lot of baggage, thanks to our upbringing. The majority of people carry with them, an entire series of self-limiting beliefs that will absolutely stop, and hold them back from, success. Things like “I’m not good enough”, “I’m not smart enough”, “I’m not lucky enough”, and the worst, “I’m not worthy” are but a few of the self-limiting beliefs I have encountered. We carry them with us like rocks in a knapsack, and then use them to sabotage our success. So, how twisted is that? </p>
              </div>
              <div class="tab-pane fade" id="portfolio-06" role="tabpanel" aria-labelledby="portfolio-06-tab">
                <p>Benjamin Franklin, inventor, statesman, writer, publisher and economist relates in his autobiography that early in his life he decided to focus on arriving at moral perfection. He made a list of 13 virtues, assigning a page to each. Under each virtue he wrote a summary that gave it fuller meaning. Then he practiced each one for a certain length of time. To make these virtues a habit, Franklin can up with a method to grade himself on his daily actions.</p>
              </div>
              <div class="tab-pane fade" id="contact-06" role="tabpanel" aria-labelledby="contact-06-tab">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 text-left">
                      <div class="section-title">
                        <h3 class="title-effect">Do You Want To Contact Me?</h3>
                        <p class="mb-30">It would be great to hear from you! If you got any questions, please do not hesitate to send me a message. I am looking forward to hearing from you!</p>
                       </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div id="formmessage">Success/Error Message Goes Here</div>
                      <form id="contactform" role="form" method="post" action="php/contact-form.php">
                        <div class="contact-form clearfix">
                          <div class="section-field">
                            <input id="name" type="text" placeholder="Name*" class="form-control" name="name">
                          </div>
                          <div class="section-field">
                            <input type="email" placeholder="Email*" class="form-control" name="email">
                          </div>
                          <div class="section-field">
                            <input type="text" placeholder="Phone*" class="form-control" name="phone">
                          </div>
                          <div class="section-field textarea">
                           <textarea class="input-message form-control" placeholder="Comment*" rows="7" name="message"></textarea>
                          </div>
                          <!-- Google reCaptch-->
                          <div class="g-recaptcha section-field clearfix" data-sitekey="[Add your site key]">   
                          </div>
                          <input type="hidden" name="action" value="sendEmail">
                          <button id="submit" name="submit" type="submit" value="Send" class="button button-border-blue"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
                        </div>
                      </form>
                      <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="images/pre-loader/loader-02.svg" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
       </div>
       
     </div>
    </div>
  </section>
  
  @endsection