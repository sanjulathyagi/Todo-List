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
                <img src = "{{ config('images.access_path') }}/{{ $banner->images->name }}" alt="banner image"></td>
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

