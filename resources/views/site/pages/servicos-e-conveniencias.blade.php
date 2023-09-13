@extends('site.layouts.app')
@section('title', 'Serviços e Conveniências - Dc Shopping')
@section('content')

    {{-- BANNER --}}
    <section class="section__space mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('assets/images/pages/servicos-conveniencias.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    {{-- ADS --}}
    @include('site.partials.ads')

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