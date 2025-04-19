@extends('layouts.app')

@section('content')
<div style="padding-top:1%">
    <nav class="navbar navbar-right navbar-expand-sm navbar-dark bg-dark">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><button id="checkOut" onclick="window.location.href=''" type="button" style="margin-right:5px;" class="btn btn-primary navbar-btn center-block">Check Out</button></li>
            <li class="nav-item"><button id="emptycart" type="button" style="margin-right:5px;" class="btn btn-primary navbar-btn center-block">Empty Basket</button></li>
            <li class="nav-item"><span style="font-size:40px;margin-right:0px;" class="glyphicon glyphicon-shopping-cart navbar-btn"></span></li>
            <li class="nav-item"><div class="navbar-text" id="shoppingcart" style="font-size:12pt;margin-left:5px;margin-right:0px;"></div></li>
            <li class="nav-item"><div class="navbar-text" style="font-size:14pt;margin-left:0px;">Select Car</div></li>
        <ul>
    </nav>
</div>

<div class='container'>
    <h2 class="text-center my-4">Car showroom</h2>

    <div class='d-flex flex-wrap align-content-start bg-light'>


        <div class="p-2 border col-4 g-3">
            <div class="card text-center">
                <div class="card-header"><h5>Audi A1 Hatchback</h5></div>
                <div class="card-body">
                    <img style="width:65%; height:200px;" class="mx-auto d-block" src="{{ asset('img/audi.jpg') }}" alt="Audi A1">
                </div>
                <div class="card-footer">
                    <button class="btn btn-success mx-auto d-block">Make Enquiry</button>
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
                    <button class="btn btn-success mx-auto d-block">Make Enquiry</button>
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
                    <button class="btn btn-success mx-auto d-block">Make Enquiry</button>
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
                    <button class="btn btn-success mx-auto d-block">Make Enquiry</button>
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
                    <button class="btn btn-success mx-auto d-block">Make Enquiry</button>
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
                    <button class="btn btn-success mx-auto d-block">Make Enquiry</button>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
