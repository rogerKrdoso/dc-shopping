@extends('site.layouts.app')
@section('title', 'Eventos e Notícias - Dc Shopping')
@section('content')

    {{-- BANNER --}}
    <section class="section__space mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('assets/images/news/eventos-noticias.png') }}" alt="" class="img-fluid">
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
                            <p class="fw-bold h5"> Eventos e <br>
                                Noticias
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
                <div class="col-12 my-4">
                    <p class="fw-bold h4">Todos os Posts</p>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-lg-3 g-4">

                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'Título Notícia'"
                    :description="'Inauguração Brinquedoteca da Cia Lúdica no DC Shopping! A Casa Lúdica funciona como um espaço de brincadeiras onde os pais pode deixar as crianças aos cuidados da Cia Lúdica enquanto fazem outras atividades...'"
                    :link="route('noticia-detalhe')"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'Título Notícia'"
                    :description="'Inauguração Brinquedoteca da Cia Lúdica no DC Shopping! A Casa Lúdica funciona como um espaço de brincadeiras onde os pais pode deixar as crianças aos cuidados da Cia Lúdica enquanto fazem outras atividades...'"
                    :link="route('noticia-detalhe')"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'Título Notícia'"
                    :description="'Inauguração Brinquedoteca da Cia Lúdica no DC Shopping! A Casa Lúdica funciona como um espaço de brincadeiras onde os pais pode deixar as crianças aos cuidados da Cia Lúdica enquanto fazem outras atividades...'"
                    :link="route('noticia-detalhe')"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'Título Notícia'"
                    :description="'Inauguração Brinquedoteca da Cia Lúdica no DC Shopping! A Casa Lúdica funciona como um espaço de brincadeiras onde os pais pode deixar as crianças aos cuidados da Cia Lúdica enquanto fazem outras atividades...'"
                    :link="route('noticia-detalhe')"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'Título Notícia'"
                    :description="'Inauguração Brinquedoteca da Cia Lúdica no DC Shopping! A Casa Lúdica funciona como um espaço de brincadeiras onde os pais pode deixar as crianças aos cuidados da Cia Lúdica enquanto fazem outras atividades...'"
                    :link="route('noticia-detalhe')"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'Título Notícia'"
                    :description="'Inauguração Brinquedoteca da Cia Lúdica no DC Shopping! A Casa Lúdica funciona como um espaço de brincadeiras onde os pais pode deixar as crianças aos cuidados da Cia Lúdica enquanto fazem outras atividades...'"
                    :link="route('noticia-detalhe')"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'Título Notícia'"
                    :description="'Inauguração Brinquedoteca da Cia Lúdica no DC Shopping! A Casa Lúdica funciona como um espaço de brincadeiras onde os pais pode deixar as crianças aos cuidados da Cia Lúdica enquanto fazem outras atividades...'"
                    :link="route('noticia-detalhe')"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'Título Notícia'"
                    :description="'Inauguração Brinquedoteca da Cia Lúdica no DC Shopping! A Casa Lúdica funciona como um espaço de brincadeiras onde os pais pode deixar as crianças aos cuidados da Cia Lúdica enquanto fazem outras atividades...'"
                    :link="route('noticia-detalhe')"
                    />
                </div>
                <div class="col">
                    <x-site.card-post
                    :image="asset('assets/images/lojas/loja-angulo.png')"
                    :date="'15 JUL 2022'"
                    :name="'Título Notícia'"
                    :description="'Inauguração Brinquedoteca da Cia Lúdica no DC Shopping! A Casa Lúdica funciona como um espaço de brincadeiras onde os pais pode deixar as crianças aos cuidados da Cia Lúdica enquanto fazem outras atividades...'"
                    :link="route('noticia-detalhe')"
                    />
                </div>
            </div>
        </div>
    </section>

@endsection