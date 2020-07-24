@extends('layouts.app')

@section('content')

    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Events</span>
                        <h1 class="text-capitalize mb-4 text-lg">Event Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section cause-single">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="single-details">
                        <img src="{{ asset('storage/' . $event->image) }}" alt="" class="img-fluid w-100" style="max-height: 200px">

                        <h2 class="my-4">{{ $event->title }}</h2>

                        {!! $event->description !!}

                        <div class="share-option mt-5 clearfix ">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><strong>Share Cause:</strong></li>
                                <li class="list-inline-item"><a href="https://www.facebook.com/One-World-One-Future-103481077971543" target="_blank"><i
                                                class="icofont-facebook mr-2"></i>Facebook</a></li>
                                <li class="list-inline-item"><a href="https://twitter.com/OneWorldOneFut1" target="_blank"><i
                                                class="icofont-twitter mr-2"></i>Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection