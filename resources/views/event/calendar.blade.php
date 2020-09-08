@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-3">
		<div class="card mb-4">
			<div class="card-header container-fluid">
			  <div class="row">
				<div class="col-md-8">
				  <h3>Event</h3>
				</div>
				<div class="col-md-4 btn-group">
				 <a href="{{route('inkubator.event-list')}}"><button class="btn btn-primary custom-btn btn-sm"><i class="i-Receipt"></i></button></a>
				 <a href="#"><button class="btn btn-primary custom-btn btn-sm"><i class="i-Calendar-4"></i></button></a>
				</div>
			  </div>
			</div>
			<div class="card-body">
				<div class="create_event_wrap">
					<form class="js-form-add-event">
						<div class="form-group">
							<label for="newEvent">Create new Event</label>
							<input class="form-control" id="newEvent" type="text" name="newEvent" placeholder="new Event" aria-describedby="helpId" />
						</div>
					</form>
					<ul class="list-group" id="external-events">
						<li class="list-group-item bg-success fc-event">
							Hello World

						</li>
						<li class="list-group-item bg-primary fc-event">
							Go to Shopping

						</li>
						<li class="list-group-item bg-warning fc-event">
							Payment schedule

						</li>
						<li class="list-group-item bg-danger fc-event">
							Rent Due

						</li>
					</ul>
					<p>
						<input id="drop-remove" type="checkbox" />
						<label for="drop-remove">remove after drop</label>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-9">
		<div class="card mb-4 o-hidden">
			<div class="card-body">
				<div id="calendar"></div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('theme/css/plugins/calendar/fullcalendar.min.css')}}" />
@endsection
@section('js')
    <script src="{{ asset('theme/js/plugins/calendar/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('theme/js/plugins/calendar/moment.min.js')}}"></script>
    <script src="{{ asset('theme/js/plugins/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{ asset('theme/js/scripts/calendar.script.min.js')}}"></script>
@endsection