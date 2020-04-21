@extends('layouts.app')

@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">What we do in photos</span>
                        <h1 class="text-capitalize mb-4 text-lg">Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section gallery">
        <div class="container">
            <div class="gallery-wrap">
                <div class="row">
                    @foreach($photos as $photo)
                        <div class="col-lg-4">
                            <div class="gallery-item">
                                <a href="{{ url($photo->getFullUrl()) }}" class="gallery-popup">
                                    <img src="{{ url($photo->getFullUrl()) }}" alt="" class="img-fluid w-100">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection