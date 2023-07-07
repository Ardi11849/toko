@extends('layouts.app')

@section('content')
    <div id="carouselExampleControls" class="carousel slide h-25" data-bs-ride="carousel"
        style="background-image: url('{{ asset('images/banner.png') }}')">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <div class="p-5 text-right">
                            <img src="{{ asset('images/running-shoes.png') }}" style="max-width: 70%"
                                class="d-inline justify-content-end pe-4" alt="{{ asset('images/running-shoes.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <div class="p-5 text-right">
                            <img src="{{ asset('images/running-shoes.png') }}" style="max-width: 70%"
                                class="d-inline justify-content-end pe-4" alt="{{ asset('images/running-shoes.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <div class="p-5 text-right">
                            <img src="{{ asset('images/running-shoes.png') }}" style="max-width: 70%"
                                class="d-inline justify-content-end pe-4" alt="{{ asset('images/running-shoes.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container pt-4">
        <div class="row">
            <div class="col">
                <figure class="text-center">
                    <blockquote class="blockquote font-monospace">
                        <p>Pilihan Sepatu Terbaik Di Jamin Original.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </figcaption>
                </figure>
                <div class="row pt-4">
                    <div class="col">
                        <div class="px-3">
                            <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                <div class="card-body p-4">
                                    <img src="{{ asset('images/shoes-img5.png') }}" alt=""
                                        class="img-fluid rounded">
                                    <h5 class="pt-3"> Awesome product</h5>
                                    <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="px-3">
                            <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                <div class="card-body p-4">
                                    <img src="{{ asset('images/shoes-img7.png') }}" alt=""
                                        class="img-fluid rounded">
                                    <h5 class="pt-3"> Awesome product</h5>
                                    <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="px-3">
                            <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                <div class="card-body p-4">
                                    <img src="{{ asset('images/shoes-img8.png') }}" alt=""
                                        class="img-fluid rounded">
                                    <h5 class="pt-3"> Awesome product</h5>
                                    <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="px-3">
                            <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                <div class="card-body p-4">
                                    <img src="{{ asset('images/shoes-img9.png') }}" alt=""
                                        class="img-fluid rounded">
                                    <h5 class="pt-3"> Awesome product</h5>
                                    <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 mx-auto">
                    <a href="/produk"><button class="btn btn-danger btn-lg" type="button"><i
                                class="fa-solid fa-right-to-bracket"></i> Lihat Selengkapnya</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4">
        <div class="rounded bg-danger">
            <div class="container">
                <div class="row pt-3 pb-4">
                    <div class="col position-relative">
                        <figure class="text-left text-white position-absolute top-50 start-50 translate-middle">
                            <blockquote class="blockquote">
                                <p>New Arrivals Products</p>
                            </blockquote>
                            <figcaption class="blockquote-footer text-white">
                                Ad ea quis minim aliquip cillum ut. Duis ullamco exercitation occaecat ex Lorem ipsum et ut
                                et velit eiusmod cillum voluptate. Sunt dolor non eu labore sunt adipisicing dolor nisi
                                ipsum excepteur mollit Lorem anim.
                                Consectetur eu eiusmod amet aliqua deserunt aliqua sint duis. Ullamco ut quis nulla
                                voluptate aute quis reprehenderit labore veniam esse do occaecat cillum dolor. Irure non est
                                nisi laboris aliquip occaecat labore veniam ex nisi ex quis fugiat. Qui culpa reprehenderit
                                reprehenderit id aute enim commodo cupidatat eu proident. Dolor non qui ex nulla excepteur
                                enim sunt laborum ea eiusmod velit deserunt eu. Id nisi consectetur mollit eiusmod enim
                                irure.
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <img src="{{ asset('images/shoes-img3.png') }}" style="max-width: 70%" class="d-inline justify-content-end pe-4" alt="{{ asset('images/shoes-img3.png') }}">
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
