<!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{$events->first_name}}'s Events</h4>
      </div>
      <div class="modal-body">
        @foreach($events as $key=> $event)
          @if($event->attending->contains($event->id))
              <a href="{{{action ('EventsController@show', $event->id)}}}"><li>Event: {{{$event->event_name}}}  Attending: {{$event->attending->count()}} </li></a>
          @endif
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>