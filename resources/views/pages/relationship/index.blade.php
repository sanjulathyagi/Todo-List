@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col lg-12 text-center">
                <h1 class="page-title">Relationship page</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->intro }}</p>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>


@endsection

@push('css')

<style>
    .page-title{
        padding-top:10vh;
        font-size: 3rem;
        color: #0aaf78
    }
    .banner-image{
        max-height:15rem;
    }

</style>

@endpush

