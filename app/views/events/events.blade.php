@extends('layouts.master')
@section('title')
  <title>Upcoming Events</title>
@stop
@section('content')
   <section id="portfolio" class="section">

      <div class="container">

        <div class="row">

          <div class="col-md-12 headline wow bounceInDown">
            <h2>Events</h2>
            <p>Upcoming Events</p>
          </div>

          @foreach($events as $key=>$event)
          <div class="col-md-4 col-sm-6 wow bounceInLeft">
            <a href="{{{action ('EventsController@show', $event->id)}}}" target="_blank" class="pop-up" title="Caption 1">
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

      </div><!-- .container -->

    </section>
@stop
 







