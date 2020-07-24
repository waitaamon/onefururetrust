@extends('layouts.app')

@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="" style="color: rgba(7, 171, 85, 1) ">Read our articles</span>
                        <h3 class="text-capitalize mb-2 h3 text-white">Blog</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About Start -->
    <section class="section causes">
        <div class="container">
            <div class="row">
                @foreach($articles as $article)
                    <div class="col-md-4">
                        <div class="card mb-4 cause-item">
                            <div class="row no-gutters">
                                <img src="{{ asset('storage/'. $article->cover) }}" class="img-fluid img-thumbnail w-100" alt="" style="max-height: 200px">

                                <div class="card-body">
                                    <h3 class="mb-2"><a href="#">{{ $article->title }}</a></h3>
                                    <p class="card-text mb-4 text-sm text-justify">{{ $article->description }}.</p>

                                    <a href="{{ '/blog/article/' . $article->slug }}" class="btn btn-main rounded">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection