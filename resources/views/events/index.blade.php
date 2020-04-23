@extends('layouts.app')

@section('content')

    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">events</span>
                        <h1 class="text-capitalize mb-4 text-lg">All Events</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section event">
        <div class="container">
            <div class="row">
                <h4 class="content-title-min">Upcomming Events</h4>
            </div>
            <div class="row justify-content-start">
                @foreach($upcoming as $event)
                    <div class="col-lg-4 col-md-6">
                        <div class="card event-item mb-4">
                            <img src="{{ asset('storage/' . $event->image ) }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class=""><a href="{{ '/events/'. $event->slug }}">{{ $event->title }}</a></h5>
                                <p class="card-text text-sm text-justify">{{ $event->short_description }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-sm"><strong>Date
                                        : </strong> {{ $event->date->format('Y-M-d H:i:s') }}</li>
                                <li class="list-group-item text-sm"><strong>Location : </strong> {{ $event->location }}
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section event">
        <div class="container">
            <div class="row">
                <h4 class="content-title-min">Previous Events</h4>
            </div>
            <div class="row justify-content-start">
                @foreach($previous as $event)
                    <div class="col-lg-4 col-md-6">
                        <div class="card event-item mb-4">
                            <img src="{{ asset('storage/' . $event->image ) }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class=""><a href="{{ '/events/'. $event->slug }}">{{ $event->title }}</a></h5>
                                <p class="card-text text-sm text-justify">{{ $event->short_description }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-sm"><strong>Date
                                        : </strong> {{ $event->date->format('Y-M-d H:i:s') }}</li>
                                <li class="list-group-item text-sm"><strong>Location : </strong> {{ $event->location }}
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection