@extends('layouts.app')

@section('content')

    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="" style="color: rgba(7, 171, 85, 1) ">Partner</span>
                        <h3 class="text-capitalize mb-2 h3 text-white">Partner Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section cause-single">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-4">
                    <img src="{{ asset($partner->getMedia('logo')->first()->getUrl()) }}" alt="" class="img-fluid img-thumbnail w-100" style="max-height: 200px">
                </div>
                <div class="col-12 col-sm-8">
                    <div class="single-details">
                        <h3 class="mb-2">{{ $partner->name }}</h3>
                        <p>{{ $partner->description }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gallery-wrap">
                <div class="row">
                    <div class="col-12 col-sm-4"></div>
                    <div class="col-12 col-sm-8">
                        <div class="row">
                            @foreach($partner->getMedia('gallery') as $photo)
                                <div class="gallery-item col-6 col-sm-3">
                                    <a href="{{ url($photo->getFullUrl()) }}" class="gallery-popup thumbnail h-auto">
                                        <img src="{{ url($photo->getFullUrl()) }}" alt="" class="img-fluid img-thumbnail w-100">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
