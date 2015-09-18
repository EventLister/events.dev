<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{Auth::user()->first_name}}'s Events</h4>
      </div>
      <div class="modal-body">
        @foreach($events as $key=> $event)
          @if($event->attending->user_id == Auth::user()->id)
              <a href="{{{action ('EventsController@show', $event->id)}}}" target="_blank"><li>Event: {{{$event->event_name}}}  Attending: {{$event->attending->count()}} </li></a>
          @endif
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>