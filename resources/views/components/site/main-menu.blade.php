<ul {{ $attributes->merge(['class' => 'navbar-nav']) }} >
    <li class="nav-item text-center"><a class="nav-link text-dark lh-sm" href="{{ route('home') }}"> Home </a></li>
    <li class="nav-item text-center"><a class="nav-link text-dark lh-sm" href="{{ route('eventos-e-noticias') }}"> Eventos <br> e Notícias </a></li>
    <li class="nav-item text-center"><a class="nav-link text-dark lh-sm" href="{{ route('mercado-paralelo-e-gastronomia') }}"> Mercado Paralelo <br> e Gastronomia</a></li>
    <li class="nav-item text-center"><a class="nav-link text-dark lh-sm" href="{{ route('moveis-e-decoracoes') }}"> Móveis e <br> Decorações </a></li>
    <li class="nav-item text-center"><a class="nav-link text-dark lh-sm" href="{{ route('servicos-e-conveniencias') }}"> Serviços e <br> Conveniências </a></li>
    <li class="nav-item text-center"><a class="nav-link text-dark lh-sm" href="{{ route('lazer-e-entretenimento') }}"> Lazer e <br> Entretenimento </a></li>
    <li class="nav-item text-center"><a class="nav-link text-dark lh-sm" href="#!"> Contato </a></li>
</ul>