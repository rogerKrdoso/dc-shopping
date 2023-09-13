@extends('site.layouts.app')
@section('title', 'Eventos e Notícias - Dc Shopping')
@section('content')

    {{-- BANNER --}}
    <section class="section__space mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('assets/images/pages/post-example.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    {{-- POST INFOS --}}
    <section class="section__space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <div class="post-infos">
                        <span class="small text-muted">15 JUL 2022</span>
                        <h3 class="fw-bold mb-4">BRINQUEDOTECA DA CIA LÚDICA</h3>

                        <p class="lead text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nesciunt illum recusandae magni est, cum voluptas blanditiis neque accusamus aut eum ex ducimus perspiciatis eligendi? Quam recusandae praesentium natus ipsam.</p>

                        <p class="lead text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eligendi provident maiores, dolorum repudiandae inventore ad amet veritatis laboriosam, modi officiis cumque nemo odit sit corrupti itaque? Itaque, sint magnam.</p>

                        <p class="lead text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel illum corporis odit vitae consequuntur eligendi aut cum dolorum quasi voluptatem, ratione commodi eveniet dicta, ut omnis explicabo unde minima. Sit?</p>
                        
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('assets/images/example-fig.webp') }}" alt="" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </section>

@endsection
