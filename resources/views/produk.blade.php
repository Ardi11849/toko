@extends('layouts.app')

@section('content')
    <div class="container pt-4">
        <div class="row">
            <div class="col">
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <p>A well-known quote, contained in a blockquote element.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </figcaption>
                </figure>
                <div class="row">
                    <div class="col d-grid justify-content-center">
                        <div class="button-group filter-button-group">
                            <button class="btn btn-danger" id="btn-all" data-filter="*">show all</button>
                            <button class="btn btn-danger" data-filter=".shoes1">shoes1</button>
                            <button class="btn btn-danger" data-filter=".shoes2">shoes2</button>
                            <button class="btn btn-danger" data-filter=".shoes3">shoes3</button>
                        </div>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-12">
                        <div class="isotope-wrapper d-grid justify-content-center">
                            <div class="isotope-item shoes1">
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/running-shoes.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img1.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img1.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img1.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img1.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img1.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img1.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img1.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="isotope-wrapper d-grid justify-content-center">
                            <div class="isotope-item shoes2">
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img2.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img2.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img2.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img2.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img2.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img2.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img2.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img2.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="isotope-wrapper d-grid justify-content-center">
                            <div class="isotope-item shoes3">
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img3.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img3.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img3.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img3.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img3.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img3.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img3.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="card rounded mb-4 shadow-sm border-0" style="min-height: 100%">
                                        <div class="card-body p-4">
                                            <img src="{{ asset('images/shoes-img3.png') }}" alt=""
                                                class="img-fluid rounded">
                                            <h5 class="pt-2"> Awesome product</h5>
                                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
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
    </div>
    <script src="{{ asset('js/produk.js') }}"></script>
@endsection
