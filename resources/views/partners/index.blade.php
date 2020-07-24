@extends('layouts.app')

@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="" style="color: rgba(7, 171, 85, 1) ">Volunteer / Donor / Organizations</span>
                        <h3 class="text-capitalize mb-2 h3 text-white">Our partners</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About Start -->
    <section class="section causes">
        <div class="container">
            <div class="row">
                @foreach($partners as $partner)
                    <div class="col-md-3">
                        <div class="card mb-4 cause-item">
                            <div class="row no-gutters">
                                <img src="{{ asset($partner->getMedia('logo')->first()->getUrl()) }}" class="img-fluid img-thumbnail w-100" alt="" style="max-height: 150px">

                                <div class="card-body">
                                    <a href="{{ '/partner/details/'. $partner->slug }}">
                                        <h3 class="mb-2">{{ $partner->name }}</h3>
                                    </a>
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