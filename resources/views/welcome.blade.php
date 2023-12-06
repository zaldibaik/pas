@extends('layouts.app')

@section('content')
        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
<h1 class="text-center">Berita</h1>

<div class="container py-3">
    
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://th.bing.com/th?id=ORMS.413d4ed423f15a8fd067684d29f56e66&pid=Wdp&w=300&h=156&qlt=90&c=1&rs=1&dpr=1&p=0" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://th.bing.com/th?id=ORMS.413d4ed423f15a8fd067684d29f56e66&pid=Wdp&w=300&h=156&qlt=90&c=1&rs=1&dpr=1&p=0" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://th.bing.com/th?id=ORMS.413d4ed423f15a8fd067684d29f56e66&pid=Wdp&w=300&h=156&qlt=90&c=1&rs=1&dpr=1&p=0" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="row">
        <div class="col-lg-4 order-last">
            <div class="card">
                <img src="https://th.bing.com/th?id=ORMS.17f1794b5952163ffeb55d6aeb9059b2&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{ route('berita') }}"><button class="btn btn-info btn-sm">Detail</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 py-3">
            <div class="card">
                <img src="https://th.bing.com/th?id=ORMS.17f1794b5952163ffeb55d6aeb9059b2&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><button class="btn btn-info btn-sm">Detail</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-first py-3">
            <div class="card">
                <img src="https://th.bing.com/th?id=ORMS.17f1794b5952163ffeb55d6aeb9059b2&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><button class="btn btn-info btn-sm">Detail</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 py-3">
            <div class="card">
                <img src="https://th.bing.com/th?id=ORMS.17f1794b5952163ffeb55d6aeb9059b2&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><button class="btn btn-info btn-sm">Detail</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-first py-3">
            <div class="card">
                <img src="https://th.bing.com/th?id=ORMS.17f1794b5952163ffeb55d6aeb9059b2&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><button class="btn btn-info btn-sm">Detail</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 py-3">
            <div class="card">
                <img src="https://th.bing.com/th?id=ORMS.17f1794b5952163ffeb55d6aeb9059b2&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><button class="btn btn-info btn-sm">Detail</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-first py-3">
            <div class="card">
                <img src="https://th.bing.com/th?id=ORMS.17f1794b5952163ffeb55d6aeb9059b2&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><button class="btn btn-info btn-sm">Detail</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 py-3">
            <div class="card">
                <img src="https://th.bing.com/th?id=ORMS.17f1794b5952163ffeb55d6aeb9059b2&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><button class="btn btn-info btn-sm">Detail</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-first py-3">
            <div class="card">
                <img src="https://th.bing.com/th?id=ORMS.17f1794b5952163ffeb55d6aeb9059b2&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#"><button class="btn btn-info btn-sm">Detail</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
    
@endsection
