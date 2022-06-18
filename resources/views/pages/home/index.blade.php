@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col lg-12 text-center">
                <h1 class="page-title">Home Page</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @forelse ($banners as banner)
            <div class="col lg-4">
                <div class="card">
                    <img src = "{{ config('images.access_path') }}/{{ $banner->images->name }}" class="banner-image" alt="banner image"
                    class="banner-image-card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">{{ $banner->title }}</h5>
                      {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                  </div>
            </div>
            @empty
            <div class="col lg-12">
                <h2 class ="text-danger">No banner found</h2>
            </div>
            @endforelse
        </div>
    </div>


@endsection

@push('css')

<style>
    .page-title{
        padding-top:10vh;
        font-size: 5rem;
        color: #0a0aaf
    }

</style>

@endpush

