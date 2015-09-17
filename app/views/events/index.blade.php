@extends('layouts.master')
@section('title')
<title>Home</title>
@stop
@section('carousel')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://lorempixel.com/1400/700/nightlife/1" alt="event">
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1400/700/nightlife/2" alt="event">
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1400/700/nightlife/3" alt="event">
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1400/700/nightlife/5" alt="event">
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1400/700/nightlife/6" alt="event">
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1400/700/nightlife/7" alt="event">
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1400/700/nightlife/8" alt="event">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@stop
@section('content')
<div class="row">

          <div class="col-md-12 headline wow bounceInDown">
            <h2>Events</h2>
            <p>Upcoming Events</p>
          </div>
        
          @foreach($events as $key=>$event)
          <div class="col-md-4 col-sm-6 wow bounceInLeft">
            <a href="/show/{{ $event->id }}" target="_blank" class="pop-up" title="Caption 1">
              <div class="portfolio-item">
                <div class="portfolio-item-preview">
                  <img src="/img/{{ $event->img_url }}" alt="">
                </div>
                <div class="portfolio-item-description">
                  <h3>{{{ $event->event_name }}}</h3>
                  <p>{{{ $event->event_description }}}</p>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div><!-- .row -->
        @stop