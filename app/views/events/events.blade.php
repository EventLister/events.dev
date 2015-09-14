@extends('layouts.master')
@section('title')


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Animate css -->
  <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
	<!-- Custom styles CSS -->
  <link href="/assets/css/style.css" rel="stylesheet" media="screen">




    <section id="portfolio" class="section">

      <div class="container">

        <div class="row">

          <div class="col-md-12 headline wow bounceInDown">
            <h2>Portfolio</h2>
            <p>My Projects.</p>
          </div>

                            <div class="col-md-4 col-sm-6 wow bounceInLeft">
            <a href="#" target="_blank" class="pop-up" title="Caption 1">
              <div class="portfolio-item">
                <div class="portfolio-item-preview">
                  <img src="/images/weather.png" alt="">
                </div>
                <div class="portfolio-item-description">
                  <h3>Three day weather app for San Antonio</h3>
                  <p>Created using Google API and Javascript</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-sm-6 wow bounceInUp">
            <a href="#" target="_blank" class="pop-up" title="Caption 2">
              <div class="portfolio-item">
                <div class="portfolio-item-preview">
                  <img src="/images/blog.png" alt="">
                </div>
                <div class="portfolio-item-description">
                  <h3>Simple Simon Says Game</h3>
                  <p>Created using Javascript and CSS</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-sm-6 wow bounceInRight">
            <a href="#" target="_blank" class="pop-up" title="Caption 3">
              <div class="portfolio-item">
                <div class="portfolio-item-preview">
                  <img src="/images/blog.png" alt="">
                </div>
                <div class="portfolio-item-description">
                  <h3>Classic Whack-A-Mole Game</h3>
                  <p>Created using Javascript and CSS</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-sm-6 wow bounceInUp" data-wow-delay=".2s">
            <a href="#" target="_blank" class="pop-up" title="Caption 4">
              <div class="portfolio-item">
                <div class="portfolio-item-preview">
                  <img src="/images/blog.png" alt="">
                </div>
                <div class="portfolio-item-description">
                  <h3> #johnslife Blog</h3>
                  <p>Created using Bootstrap and Laravel</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-sm-6 wow bounceInUp" data-wow-delay=".4s">
            <a href="#" target="_blank" class="pop-up" title="Caption 5">
              <div class="portfolio-item">
                <div class="portfolio-item-preview">  
                  <img src="/images/wowlister.png" alt="">
                </div>
                <div class="portfolio-item-description">
                  <h3>WoW Lister</h3>
                  <p>Originally created in PHP revamped to Laravel</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-sm-6 wow bounceInUp" data-wow-delay=".6s">
            <a href="#" target="_blank" class="pop-up" title="Caption 6">
              <div class="portfolio-item">
                <div class="portfolio-item-preview">
                  <img src="/images/comingsoon2.00_jpg_srz" alt="">
                </div>
                <div class="portfolio-item-description">
                  <h3>Coming Soon</h3>
                  <p>Codeup Final Project (In Progress)</p>
                </div>
              </div>
            </a>

        </div><!-- .row -->

      </div><!-- .container -->

    </section>



  <!-- Javascript files -->
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- Background slider -->
  <script src="/assets/js/jquery.backstretch.min.js"></script>
	 <!-- Waypoints -->
  <script src="/assets/js/jquery.waypoints.js"></script>
  <!-- WOW - Reveal Animations When You Scroll -->
  <script src="/assets/js/wow.min.js"></script>   
  <!-- Custom scripts -->
    <script src="/assets/js/custom.js"></script>



@stop
@section('content')
@stop

