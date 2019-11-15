<!DOCTYPE html>
<html>
<head>
    @include('Layout.head')


</head>
<body>

@include('Layout.header')

<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}" >

  <!--==========================
    Intro Section
============================-->
  <main id="main" wow bounceInUp data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
    <!--==========================
      Services-section-Start
============================-->
    <section>
      <div id="design-ui-main" class="mu-weuimu-bg">
        <div class="container-fluid">
          <div class="muser-main-heading">
            <h1>contact</h1>
          </div>
        </div>
      </div>
    </section>
    
    <!--==========================
     Stop-solution-section
    ============================-->
    <section id="stop-solution-section" class="leadership-section" wow bounceInUp data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
      <div class="container-fluid">
        <div class="container">
          <div class="muser-main-heading">
            <h2>visit our offices all around the globe</h2>
          </div>
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <div class="aboutmu-detail-para">
                <p>Maven Websol unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inven</p>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
          </div>
          <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
              <div class="box">
                <div class="icon-img">
                  <img src="{{asset('img/contact/lahore.png')}}" class="web" alt="Lahore">
                </div>
                <h4 class="title"><a href="">lahore</a></h4>
                <div class="descr-icon">
                  <p><a href="tel:+92-423-513-99-99"><i class="fa fa-phone-square"> </i> +92-423-513-99-99</a></p>
                     <p><a href="mailto:info@mavenwebsol.com"><i class="fa fa-phone-square"> </i> info@mavenup.com</a></p>
                      <p><a href="https://www.google.com/maps?cid=17164927690400725561" target="_blank"><i class="fa fa-phone-square"> </i> 372-2 Sector- C2,Township, Lahore.</a></p>
                </div>
                
              </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
              <div class="box">
                <div class="icon-img">
                  <img src="{{asset('img/contact/michigan.png')}}" class="web" alt="michigan">
                </div>
                <h4 class="title"><a href="">michigan</a></h4>
                <div class="descr-icon">
                  <p><a href="tel:+1 (866) 867 7866"><i class="fa fa-phone-square"> </i> +1 (866) 867 7866</a></p>
                     <p><a href="mailto:info@mavenwebsol.com"><i class="fa fa-phone-square"> </i> info@mavenup.com</a></p>
                      <p><a href="https://goo.gl/maps/1kiS6y5HFxemUzuy7"target="_blank"><i class="fa fa-phone-square"> </i> 25801 plymouth road, Redford, MI, 48239</a></p>
                </div>
                
              </div>
            </div>
            <div class="col-lg-1"></div>
          </div>
          <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
              <div class="box">
                <div class="icon-img">
                  <img src="{{asset('img/contact/dubai.png')}}" class="web" alt="dubai">
                </div>
                <h4 class="title"><a href="">dubai</a></h4>
                <div class="descr-icon">
                  <p><a href="tel:+92-423-513-99-99"><i class="fa fa-phone-square"> </i> +92-423-513-99-99</a></p>
                     <p><a href="mailto:info@mavenwebsol.com"><i class="fa fa-phone-square"> </i> info@mavenup.com</a></p>
                      <p><a href="#"><i class="fa fa-phone-square"> </i> 372-2 Sector- C2,Township, Lahore.</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
              <div class="box">
                <div class="icon-img">
                  <img src="{{asset('img/contact/norway.png')}}" class="web" alt="norway">
                </div>
                <h4 class="title"><a href="">norway</a></h4>
                <div class="descr-icon">
                  <p><a href="tel:+92-423-513-99-99"><i class="fa fa-phone-square"> </i> +92-423-513-99-99</a></p>
                     <p><a href="mailto:info@mavenwebsol.com"><i class="fa fa-phone-square"> </i> info@mavenup.com</a></p>
                      <p><a href="#"><i class="fa fa-phone-square"> </i> 372-2 Sector- C2,Township, Lahore.</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-1"></div>
          </div>

        </div>
      </div>
    </section>
    <!-- Stop-solution-section -->
<!--==========================
      business-talk-section 
    ============================-->
    
  @include('graphicDesign.service_form')


<!--==========================
      Google-map-section
    ============================-->

<iframe src="https://www.google.com.pk/maps/d/u/0/embed?mid=1QJXSr1joGS7TEcgnLLPo8TxIL_CfJ9jm" width="100%" height="480"></iframe>
   
   


  <!--==========================
    Footer
  ============================-->
@include('Layout.footer')

</main>
</body>