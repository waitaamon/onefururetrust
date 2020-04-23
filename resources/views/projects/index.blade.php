@extends('layouts.app')

@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">What we do</span>
                        <h1 class="text-capitalize mb-4 text-lg">Our Causes</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About Start -->
    <section class="section causes">
        <div class="container">
            <div class="row">
                @foreach($projects as $project)
                    <div class="col-md-3">
                        <div class="card mb-4 cause-item">
                            <div class="row no-gutters">
                                <img src="{{ asset('storage/'. $project->cover_image) }}" class="img-fluid img-thumbnail w-100" alt="" style="max-height: 200px">

                                <div class="card-body">
                                    <h3 class="mb-2"><a href="#">{{ $project->title }}</a></h3>
                                    <p class="card-text mb-4 text-sm text-justify">{{ $project->short_description }}.</p>

                                    <a href="/get-involved" class="btn btn-main rounded">Join us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section About End -->
    <div class="cta-block section">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-12">
                    <div class="cta-content text-center">
                        <h2 class="text-white text-lg mb-5 mt-3">We can’t help everyone, but everyone can help someone</h2>
                        <a href="/get-involved" class="btn btn-main rounded">Get involved</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection