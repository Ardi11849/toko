@extends('layouts.app')

@section('content')
    <div class="carousel-slick" style="background-image: url('{{ asset('images/banner.png') }}')">
        <div class="carousel-item-slick">
            <div class="row">
                <div class="col-sm-6">
                    <div class="banner_taital">
                        <h1 class="banner_text">New Running Shoes </h1>
                        <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                        <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="p-5 text-right">
                        <img src="{{ asset('images/running-shoes.png') }}" style="min-height: 100%"
                            class="d-inline justify-content-end pe-4" alt="{{ asset('images/running-shoes.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item-slick">
            <div class="row">
                <div class="col-sm-6">
                    <div class="banner_taital">
                        <h1 class="banner_text">New Running Shoes </h1>
                        <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                        <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="p-5 text-right">
                        <img src="{{ asset('images/running-shoes.png') }}" style="min-height: 100%"
                            class="d-inline justify-content-end pe-4" alt="{{ asset('images/running-shoes.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item-slick">
            <div class="row">
                <div class="col-sm-6">
                    <div class="banner_taital">
                        <h1 class="banner_text">New Running Shoes </h1>
                        <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                        <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="p-5 text-right">
                        <img src="{{ asset('images/running-shoes.png') }}" style="min-height: 100%"
                            class="d-inline justify-content-end pe-4" alt="{{ asset('images/running-shoes.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-4">
        <div class="row">
            <div class="col">
                <div class="separator">
                    <figure class="text-center">
                        <blockquote class="blockquote font-monospace">
                            <p>Pilihan Sepatu Terbaik Di Jamin Original.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                    </figure>
                </div>
                <div class="row pt-4 slick">
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
                    <figure class="text-left text-white" style="left: 35%; position: left">
                        <blockquote class="blockquote separator">
                            <p>Produk Baru Kami</p>
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
                    <div class="row pt-4 slick">
                        <div class="col">
                            <div class="px-3">
                                <div class="card rounded bg-transparent mb-4 shadow-sm border-0" style="min-height: 100%">
                                    <div class="card-body p-4">
                                        <img src="{{ asset('images/shoes-img5.png') }}" alt=""
                                            class="img-fluid rounded">
                                        <h5 class="pt-3 text-white"> Awesome product</h5>
                                        <p class="small text-grey font-italic">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="px-3">
                                <div class="card rounded bg-transparent mb-4 shadow-sm border-0" style="min-height: 100%">
                                    <div class="card-body p-4">
                                        <img src="{{ asset('images/shoes-img7.png') }}" alt=""
                                            class="img-fluid rounded">
                                        <h5 class="pt-3 text-white"> Awesome product</h5>
                                        <p class="small text-grey font-italic">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="px-3">
                                <div class="card rounded bg-transparent mb-4 shadow-sm border-0" style="min-height: 100%">
                                    <div class="card-body p-4">
                                        <img src="{{ asset('images/shoes-img8.png') }}" alt=""
                                            class="img-fluid rounded">
                                        <h5 class="pt-3 text-white"> Awesome product</h5>
                                        <p class="small text-grey font-italic">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="px-3">
                                <div class="card rounded bg-transparent mb-4 shadow-sm border-0" style="min-height: 100%">
                                    <div class="card-body p-4">
                                        <img src="{{ asset('images/shoes-img9.png') }}" alt=""
                                            class="img-fluid rounded">
                                        <h5 class="pt-3 text-white"> Awesome product</h5>
                                        <p class="small text-grey font-italic">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <div class="separator">
                    <figure class="text-center">
                        <blockquote class="blockquote font-monospace">
                            <p>Keunggulan Berbelanja Di Toko Kita.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <img src="{{ asset('images/utilitas/like.png') }}" alt="" class="img-fluid rounded"
                    style="max-height: 40%; left:20%;position: relative">
                <p class="text-center fs-3 pt-2 fw-bold">Produk Berkualitas Dan Original</p>
                <p class="text-center pt-2 lh-sm">This is a long paragraph written to show how the line-height of an
                    element is affected by our utilities. Classes are applied to the element itself or sometimes the
                    parent element. These classes can be customized as needed with our utility API.</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <img src="{{ asset('images/utilitas/heart.png') }}" alt="" class="img-fluid rounded"
                    style="max-height: 40%; left:20%;position: relative">
                <p class="text-center fs-3 pt-2 fw-bold">Temukan Produk Terbaik Untuk Anda</p>
                <p class="text-center pt-2 lh-sm">This is a long paragraph written to show how the line-height of an
                    element is affected by our utilities. Classes are applied to the element itself or sometimes the
                    parent element. These classes can be customized as needed with our utility API.</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <img src="{{ asset('images/utilitas/location.png') }}" alt="" class="img-fluid rounded"
                    style="max-height: 40%; left:20%;position: relative">
                <p class="text-center fs-3 pt-2 fw-bold">Pengiriman Ke Seluruh Indonesia</p>
                <p class="text-center pt-2 lh-sm">This is a long paragraph written to show how the line-height of an
                    element is affected by our utilities. Classes are applied to the element itself or sometimes the
                    parent element. These classes can be customized as needed with our utility API.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16804.86136226308!2d106.6548239649714!3d-6.339712946252109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e4e5ae974787%3A0xf02457ce5a7e1095!2sPerumahan%20Villa%20Tekno%20Serpong!5e0!3m2!1sen!2sid!4v1689589135333!5m2!1sen!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="rounded bg-dark">
            <div class="container pt-5">
                <div class="row">
    				<div class="col-sm-6 col-lg-2">
    					<div><a href="#"><img src="images/footer-logo.png"></a></div>
    				</div>
    				<div class="col-sm-6 col-lg-2">
    					<div class="text-white nowrap"><img src="images/phone-icon.png"><span class="">(71) 1234567890</span></div>
    				</div>
    			</div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
