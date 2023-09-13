@extends('site.layouts.app')
@section('title', 'Lazer e Entretenimento - Dc Shopping')
@section('content')

    {{-- BANNER --}}
    <section class="section__space mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('assets/images/pages/lazer-entretenimento.png') }}" alt="" class="img-fluid">
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
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'FREE RIDERS PUB'"
                    :description="'No Free Riders você vai ver muitos shows de músicas focadas no pop e pop rock dos anos 80, 90 e atualidades dançantes, procurando agradar quem gosta de apreciar boas bandas ao vivo ou dançar.'"
                    :link="'#!'"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'FREE RIDERS PUB'"
                    :description="'No Free Riders você vai ver muitos shows de músicas focadas no pop e pop rock dos anos 80, 90 e atualidades dançantes, procurando agradar quem gosta de apreciar boas bandas ao vivo ou dançar.'"
                    :link="'#!'"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'FREE RIDERS PUB'"
                    :description="'No Free Riders você vai ver muitos shows de músicas focadas no pop e pop rock dos anos 80, 90 e atualidades dançantes, procurando agradar quem gosta de apreciar boas bandas ao vivo ou dançar.'"
                    :link="'#!'"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'FREE RIDERS PUB'"
                    :description="'No Free Riders você vai ver muitos shows de músicas focadas no pop e pop rock dos anos 80, 90 e atualidades dançantes, procurando agradar quem gosta de apreciar boas bandas ao vivo ou dançar.'"
                    :link="'#!'"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'FREE RIDERS PUB'"
                    :description="'No Free Riders você vai ver muitos shows de músicas focadas no pop e pop rock dos anos 80, 90 e atualidades dançantes, procurando agradar quem gosta de apreciar boas bandas ao vivo ou dançar.'"
                    :link="'#!'"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'FREE RIDERS PUB'"
                    :description="'No Free Riders você vai ver muitos shows de músicas focadas no pop e pop rock dos anos 80, 90 e atualidades dançantes, procurando agradar quem gosta de apreciar boas bandas ao vivo ou dançar.'"
                    :link="'#!'"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'FREE RIDERS PUB'"
                    :description="'No Free Riders você vai ver muitos shows de músicas focadas no pop e pop rock dos anos 80, 90 e atualidades dançantes, procurando agradar quem gosta de apreciar boas bandas ao vivo ou dançar.'"
                    :link="'#!'"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'FREE RIDERS PUB'"
                    :description="'No Free Riders você vai ver muitos shows de músicas focadas no pop e pop rock dos anos 80, 90 e atualidades dançantes, procurando agradar quem gosta de apreciar boas bandas ao vivo ou dançar.'"
                    :link="'#!'"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'FREE RIDERS PUB'"
                    :description="'No Free Riders você vai ver muitos shows de músicas focadas no pop e pop rock dos anos 80, 90 e atualidades dançantes, procurando agradar quem gosta de apreciar boas bandas ao vivo ou dançar.'"
                    :link="'#!'"
                    />
                </div>
            </div>
        </div>
    </section>

@endsection