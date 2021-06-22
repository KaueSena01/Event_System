@extends('layouts.main')

@section('title', $event->title)

@section('content')

	<div class="col-md-10 offset-md-1">
		<div class="row">
			<div id="image-container" class="col-md-6">
				<img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
			</div>
			<div id="info-container" class="col-md-6">
				<h1>{{ $event->title }}</h1>
				<p class="event-city"><ion-icon name="location-outline">{{ $event->city }}</ion-icon></p>
				<p class="events-participants"><ion-icon name="people-outline"> {{ count($event->users) }} partipantes</ion-icon></p>
				<p class="event-owner"><ion-icon name="star-outline">{{ $eventOwner['name'] }}</ion-icon></p>

				@if(!$hasUserJoined)
				<form method="POST" action="/events/join/{{ $event->id }}">
					@csrf
					<a href="/events/join/{{ $event->id }}"
						class="btn btn-primary"
						id="event-submit"
						onclick="event.preventDefault();
						this.closest('form').submit();">
						Confirmar presença
						</a>
				</form>
				@else
					<p class="already-joined-msg">Você já está participando deste evento!</p>
				@endif
				<h3>O evento conta com:</h3>
				<ul id="items-list">
					@foreach($event->items as $item)
						<li>{{ $item }}</li>
					@endforeach
				</ul>
			</div>
			<div class="col-md-12" id="description-container">
				<h3 style="margin-top: 0px;">Sobre o evento:</h3>
				<p class="event-description">{{ $event->description }}</p>
			</div>
		</div>
	</div>

@endsection