@extends('layouts.app')

@section('content')
<div class='container'>
    <h2 class="text-center my-4">Car showroom</h2>

    <div class='d-flex flex-wrap align-content-start bg-light'>

        {{-- Audi --}}
        <div class="p-2 border col-4 g-3">
            <div class="card text-center">
                <div class="card-header"><h5>Audi A1 Hatchback</h5></div>
                <div class="card-body">
                    <img style="width:65%; height:200px;" class="mx-auto d-block" src="{{ asset('img/audi.jpg') }}" alt="Audi A1">
                </div>
                <div class="card-footer">
                    <button class="btn btn-success mx-auto d-block">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="p-2 border col-4 g-3">
            <div class="card text-center">
                <div class="card-header"><h5>BMW X5 SUV</h5></div>
                <div class="card-body">
                    <img style="width:65%; height:200px;" class="mx-auto d-block" src="{{ asset('img/bmw.jpg') }}" alt="BMW X5">
                </div>
                <div class="card-footer">
                    <button class="btn btn-success mx-auto d-block">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="p-2 border col-4 g-3">
            <div class="card text-center">
                <div class="card-header"><h5>Honda Civic Sedan</h5></div>
                <div class="card-body">
                    <img style="width:65%; height:200px;" class="mx-auto d-block" src="{{ asset('img/honda.jpg') }}" alt="Honda Civic">
                </div>
                <div class="card-footer">
                    <button class="btn btn-success mx-auto d-block">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="p-2 border col-4 g-3">
            <div class="card text-center">
                <div class="card-header"><h5>Hyundai i20 Hatchback</h5></div>
                <div class="card-body">
                    <img style="width:65%; height:200px;" class="mx-auto d-block" src="{{ asset('img/hyundai.jpg') }}" alt="Hyundai i20">
                </div>
                <div class="card-footer">
                    <button class="btn btn-success mx-auto d-block">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="p-2 border col-4 g-3">
            <div class="card text-center">
                <div class="card-header"><h5>Toyota Aygo X</h5></div>
                <div class="card-body">
                    <img style="width:65%; height:200px;" class="mx-auto d-block" src="{{ asset('img/toyota.jpg') }}" alt="Toyota Aygo X">
                </div>
                <div class="card-footer">
                    <button class="btn btn-success mx-auto d-block">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="p-2 border col-4 g-3">
            <div class="card text-center">
                <div class="card-header"><h5>Volkswagen Golf GTI</h5></div>
                <div class="card-body">
                    <img style="width:65%; height:200px;" class="mx-auto d-block" src="{{ asset('img/volkswagen.jpg') }}" alt="VW Golf">
                </div>
                <div class="card-footer">
                    <button class="btn btn-success mx-auto d-block">Add to Cart</button>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
