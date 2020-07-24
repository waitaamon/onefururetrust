@extends('layouts.app')

@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="" style="color: rgba(7, 171, 85, 1) ">What we do in photos</span>
                        <h3 class="text-capitalize mb-2 h3 text-white">Gallery</h3>
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
                        <div class="col-md-3 col-6">
                            <div class="gallery-item">
                                <a href="{{ url($photo->getFullUrl()) }}" class="gallery-popup">
                                    <img src="{{ url($photo->getFullUrl()) }}" alt="" class="img-fluid img-thumbnail w-100">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection