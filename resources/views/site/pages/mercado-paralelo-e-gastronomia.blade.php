@extends('site.layouts.app')
@section('title', 'Mercado Paralelo e Gastronomia - Dc Shopping')
@section('content')

    {{-- BANNER --}}
    <section id="mercadoParalelo" class="section__space mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="fw-bold h5 breadtext mb-3"> Mercado Paralelo e <br>
                        Gastronomia
                    </p>
                    <div class="banner-mercado">
                        <img src="{{ asset('assets/images/pages/mp-logo.png') }}" alt="" class="img-fluid mp-logo">
                        <img src="{{ asset('assets/images/pages/mercado-paralelo.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ADS --}}
    @include('site.partials.ads')

    <section class="section__space">
        <div class="container">
            <div class="row gap-3">
                <div class="col-12 col-lg-4 offset-lg-2 text-center text-lg-start">
                    <p class="fw-bold display-4"> O MERCADO <br> 
                        PARALELO
                    </p>
                    <a href="#!" class="btn btn-dark text-uppercase rounded-pill px-4">Saiba Mais no Site</a>
                </div>
                <div class="col-12 col-lg-5">
                    <p class="text-justify" style="font-size: 1rem">Claro que não seríamos só mais uma loja. Surgimos porque desejamos aprender e viver por meio da experiência. Porque queremos fazer diferença dentro de uma comunidade. Porque somos apaixonados por cultura, moda e gastronomia.</p>
                    <p class="text-justify" style="font-size: 1rem">E não estamos sozinhos nessa: o Sebrae, que entende e atua junto aos micro e pequenos negócios, identifica a importância das práticas inovadoras no desenvolvimento das empresas. O projeto é uma demonstração concreta da prática dessa cultura para os negócios participantes.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="view-cards">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-title d-flex align-items-center gap-4">
                        <div class="tiitle__st">
                            <p class="fw-bold h5"> Móveis e <br>
                                Decorações
                            </p>
                        </div>
                        <div class="search__st">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar"
                                aria-describedby="search-in">
                                <span class="input-group-text" id="search-in"> <i class="bi bi-search"></i> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-lg-3 mt-5 g-4">
                <div class="col">
                    <x-site.card-theme
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :name="'LOJA ANGULO'"
                    :category="'Mobiliário'"
                    :number="'102'"
                    :wpp="'(51) 99999-9999'"
                    :expediente="'Segunda à Sábado, das 10h às 22h e Domingo das 14h às 20h'"
                    />
                </div>
                <div class="col">
                    <x-site.card-theme
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :name="'LOJA ANGULO'"
                    :category="'Mobiliário'"
                    :number="'102'"
                    :wpp="'(51) 99999-9999'"
                    :expediente="'Segunda à Sábado, das 10h às 22h e Domingo das 14h às 20h'"
                    />
                </div>
                <div class="col">
                    <x-site.card-theme
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :name="'LOJA ANGULO'"
                    :category="'Mobiliário'"
                    :number="'102'"
                    :wpp="'(51) 99999-9999'"
                    :expediente="'Segunda à Sábado, das 10h às 22h e Domingo das 14h às 20h'"
                    />
                </div>
                <div class="col">
                    <x-site.card-theme
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :name="'LOJA ANGULO'"
                    :category="'Mobiliário'"
                    :number="'102'"
                    :wpp="'(51) 99999-9999'"
                    :expediente="'Segunda à Sábado, das 10h às 22h e Domingo das 14h às 20h'"
                    />
                </div>
                <div class="col">
                    <x-site.card-theme
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :name="'LOJA ANGULO'"
                    :category="'Mobiliário'"
                    :number="'102'"
                    :wpp="'(51) 99999-9999'"
                    :expediente="'Segunda à Sábado, das 10h às 22h e Domingo das 14h às 20h'"
                    />
                </div>
                <div class="col">
                    <x-site.card-theme
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :name="'LOJA ANGULO'"
                    :category="'Mobiliário'"
                    :number="'102'"
                    :wpp="'(51) 99999-9999'"
                    :expediente="'Segunda à Sábado, das 10h às 22h e Domingo das 14h às 20h'"
                    />
                </div>
                <div class="col">
                    <x-site.card-theme
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :name="'LOJA ANGULO'"
                    :category="'Mobiliário'"
                    :number="'102'"
                    :wpp="'(51) 99999-9999'"
                    :expediente="'Segunda à Sábado, das 10h às 22h e Domingo das 14h às 20h'"
                    />
                </div>
                <div class="col">
                    <x-site.card-theme
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :name="'LOJA ANGULO'"
                    :category="'Mobiliário'"
                    :number="'102'"
                    :wpp="'(51) 99999-9999'"
                    :expediente="'Segunda à Sábado, das 10h às 22h e Domingo das 14h às 20h'"
                    />
                </div>
                <div class="col">
                    <x-site.card-theme
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :name="'LOJA ANGULO'"
                    :category="'Mobiliário'"
                    :number="'102'"
                    :wpp="'(51) 99999-9999'"
                    :expediente="'Segunda à Sábado, das 10h às 22h e Domingo das 14h às 20h'"
                    />
                </div>
            </div>
        </div>
    </section>

@endsection