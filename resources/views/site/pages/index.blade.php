@extends('site.layouts.app')
@section('content')

    {{-- BANNER --}}
    <section id="bannerHome" style="background-image: url( {{ asset('assets/images/fundo-home.png') }} )">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-news">

                        <x-site.info-news :text="'Em Alta'" />

                        <div class="banner-home" data-slick='{"autoplay": true}'>
                            <img src="{{ asset('assets/images/news/eventos-noticias.png') }}" alt="Eventos e Notícias"
                                class="img-fluid">
                            <img src="{{ asset('assets/images/news/eventos-noticias.png') }}" alt="Eventos e Notícias"
                                class="img-fluid">
                            <img src="{{ asset('assets/images/news/eventos-noticias.png') }}" alt="Eventos e Notícias"
                                class="img-fluid">
                        </div>

                        <div class="d-flex justify-content-between flex-column flex-md-row">
                            <x-site.info-news :text="'17 de Julho de 2023 - INAUGURAÇÃO NOVO ESPAÇO INFANTIL'" />
                            <x-site.info-news :text="'+ Veja Mais'" :link="'#!'" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- LOJAS --}}
    <section class="section__space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-cards">

                        {{-- Cards Lojas Component --}}
                        <x-site.cards-lojas :link="route('home')" :image="asset('assets/images/lojas/lojas.png')" :title="'O Mercado Paralelo 1'" :description="'Aqui um breve texto ao passar o Mouse. Aqui um breve texto ao passar o Mouse.'" />

                        <x-site.cards-lojas :link="route('home')" :image="asset('assets/images/lojas/lojas.png')" :title="'O Mercado Paralelo 2'" :description="'Aqui um breve texto ao passar o Mouse. Aqui um breve texto ao passar o Mouse.'" />

                        <x-site.cards-lojas :link="route('home')" :image="asset('assets/images/lojas/lojas.png')" :title="'O Mercado Paralelo 3'" :description="'Aqui um breve texto ao passar o Mouse. Aqui um breve texto ao passar o Mouse.'" />

                        <x-site.cards-lojas :link="route('home')" :image="asset('assets/images/lojas/lojas.png')" :title="'O Mercado Paralelo 4'" :description="'Aqui um breve texto ao passar o Mouse. Aqui um breve texto ao passar o Mouse.'" />

                        <x-site.cards-lojas :link="route('home')" :image="asset('assets/images/lojas/lojas.png')" :title="'O Mercado Paralelo 5'" :description="'Aqui um breve texto ao passar o Mouse. Aqui um breve texto ao passar o Mouse.'" />

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- LOGOS --}}
    <section class="section__space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="logo-lojas d-flex justify-content-between gap-3">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo Loja" class="img-fluid mx-4">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo Loja" class="img-fluid mx-4">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo Loja" class="img-fluid mx-4">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo Loja" class="img-fluid mx-4">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo Loja" class="img-fluid mx-4">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo Loja" class="img-fluid mx-4">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo Loja" class="img-fluid mx-4">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CONVENIÊNCIA --}}
    <section class="section__space">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="fw-bold">Conveniência DC</h5>

                    <div class="conveniencias-home">
                        <div class="conveniencia-items">
                            <x-svgs.icone1 />
                        </div>
                        <div class="conveniencia-items">
                            <x-svgs.icone2 />
                        </div>
                        <div class="conveniencia-items">
                            <x-svgs.icone3 />
                        </div>
                        <div class="conveniencia-items">
                            <x-svgs.icone4 />
                        </div>
                        <div class="conveniencia-items">
                            <x-svgs.icone5 />
                        </div>
                        <div class="conveniencia-items">
                            <x-svgs.icone6 />
                        </div>
                        <div class="conveniencia-items">
                            <x-svgs.icone7 />
                        </div>
                        <div class="conveniencia-items">
                            <x-svgs.icone8 />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ADS --}}
    @include('site.partials.ads')

    {{-- CATEGORIAS --}}
    <section class="section__space">
        <div class="container">
            <div class="row row-cols-3 row-cols-lg-6">
                <div class="col">
                    <div class="img-categ text-center">
                        <img src="{{ asset('assets/images/categorias/mercado-paralelo.png') }}" alt="Mercado Paralelo"
                            class="img-fluid">
                        <span class="d-block fw-bold mt-3">Mercado Paralelo</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-categ text-center">
                        <img src="{{ asset('assets/images/categorias/gastronomia.png') }}" alt="Gastronomia"
                            class="img-fluid">
                        <span class="d-block fw-bold mt-3">Gastronomia</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-categ text-center">
                        <img src="{{ asset('assets/images/categorias/moveis-decoracoes.png') }}" alt="Decorações"
                            class="img-fluid">
                        <span class="d-block fw-bold mt-3">Decorações</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-categ text-center">
                        <img src="{{ asset('assets/images/categorias/servicos-conveniencias.png') }}"
                            alt="Serviços e Conveniências" class="img-fluid">
                        <span class="d-block fw-bold mt-3">Serviços</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-categ text-center">
                        <img src="{{ asset('assets/images/categorias/lazer-intretenimento.png') }}"
                            alt="Lazer e Intretenimento" class="img-fluid">
                        <span class="d-block fw-bold mt-3">Lazer</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-categ text-center">
                        <img src="{{ asset('assets/images/categorias/eventos-noticias.png') }}" alt="Eventos e Notícias"
                            class="img-fluid">
                        <span class="d-block fw-bold mt-3">Notícias</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SOBRE --}}
    <section class="section__space">
        <div class="container">
            <div class="row gap-4">
                <div class="col-12 col-lg-4 offset-lg-2">
                    <div class="row row-cols-2 justify-content-end g-3">
                        <div class="col">
                            <img src="{{ asset('assets/images/sobre1.png') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col">
                            <img src="{{ asset('assets/images/sobre2.png') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col d-none d-lg-block">
                            <img src="{{ asset('assets/images/sobre3.png') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col d-none d-lg-block">
                            <img src="{{ asset('assets/images/sobre4.png') }}" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="content-about-text">
                        <h5 class="fw-bold">Dc Shopping</h5>
                        <p class="text-justify">
                            O maior e mais completo centro de decoração e design da Região Sul do Brasil. Inaugurado em
                            1994, sua proposta segue a mesma linha dos shoppings especializados em decoração, apresentando
                            diversas opções no segmento aonde em uma mesma visita, é possível encontrar peças exclusivas,
                            estofados, tapetes, luminárias com muita comodidade e conforto.Com uma circulação mensal de
                            70.000 pessoas e um estacionamento rotativo para mais de 1.000 carros/dia, o DC Shopping está
                            localizado a apenas 8 minutos do centro de Porto Alegre e a 5 minutos do Aeroporto Salgado
                            Filho.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ADS --}}
    @include('site.partials.ads')

    {{-- CONTACT --}}
    <section class="section__space">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 offset-lg-2 text-center text-lg-start">
                    <div class="call-text">
                        <p>VENHA NOS VISITAR,</p>
                        <span>é fácil de chegar.</span>
                    </div>
                    <div class="adress mt-4">
                        <p>
                            Rua Frederico Mentz, 1561 <br>
                            Av. Voluntá rios da Pátria, 4389 <br>
                            Navegantes <br>
                            Porto Alegre/RS - Brasil <br><br>
                            (51) 3374.1414
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <x-site.contact-form />
                </div>
            </div>
        </div>
    </section>

    {{-- MAP --}}
    <section class="section__space mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="map-loc">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.4451843831202!2d-51.20701912503938!3d-29.99537092900144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197a17185e8d2d%3A0xb9e1724081e59c72!2sDC%20Shopping!5e0!3m2!1spt-BR!2sbr!4v1694600833128!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- BANNER SHOPPING --}}
    <section class="section__space my-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <img src="{{ asset('assets/images/banner-shopping.png') }}" alt="Dc Shopping" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

@endsection
