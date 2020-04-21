@extends('layouts.app')

@section('content')
    <section class="mw-100 overflow-hidden">
        <landing-slider></landing-slider>
    </section>

    <section class="section intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <span class="text-color ">What we do</span>
                        <h2 class="mt-3 content-title">TOWARDS
                            A BETTER WORLD</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p>Our operations and principles are guided by our founders’ belief in a fairer world and that
                        development is possible in all parts of the world. we are geared towards tackling the problems
                        the world is facing today.</p>
                </div>
            </div>
            <objectives-slider></objectives-slider>
        </div>
    </section>

    <div class="cta-block section">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-12">
                    <div class="cta-content text-center">
                        <h2 class="text-white text- mb-5 mt-3">We are a non-profit organisation established for
                            charitable purposes. We believe in development co-operation, not to create a perfect world
                            but to help create a better one.</h2>
                        <a href="" class="btn btn-main rounded">Get involved</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section latest-blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2 class="mt-3 content-title">Latest projects</h2>
                    </div>
                </div>
            </div>

            @if($projects->count())
                <div class="row justify-content-start">
                    @foreach($projects as $project)
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                            <div class="card blog-item">
                                <img src="{{ asset('storage/'. $project->cover_image) }}" alt="" class="img-fluid"
                                     style="max-height: 200px">

                                <div class="card-body mt-2">
                                    <span class="text-sm text-color text-uppercase font-weight-bold">{{ $project->date->format('Y-M-d') }}</span>
                                    <h3 class="mb-3"><a href="{{ '/projects/' . $project->slug }}"
                                                        class="">{{ $project->title }}</a></h3>
                                    <p class="text-sm text-justify">{{ $project->short_description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-divider"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-title text-center">
                        <span class="text-color">Our Gallery</span>
                        <h2 class="mt-3 mb-4 position-relative ">We connect with people across different sectors</h2>
                    </div>
                </div>
            </div>
        </div>

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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-divider"></div>
                </div>
            </div>
        </div>
    </section>

@endsection