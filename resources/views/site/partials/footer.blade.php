<footer id="footer" class="py-5 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-2 d-none d-lg-block">
                <x-site.main-menu class="align-items-center flex-column" />
            </div>
            <div class="col-12 col-lg-8 px-lg-0">
                <div class="footer-infos">
                    <p class="fw-bold">Horário de Operação:</p>
                    <div class="row mt-4">
                        <div class="col-12 col-lg-5">
                            <p class="fw-bold">Lojas</p>
                            <p>
                                De Segunda a Sábado das 10h às 21h <br>
                                Domingos e Feriados das 14h às 20h <br>
                                (com Abertura Opcional)
                            </p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <p class="fw-bold">Gastronimia</p>
                            <p>
                                De Quinta a Sábado das 11h e 30min às 23h <br>
                                De Segunda a Quarta das 11h e 30min às 22h <br>
                                Domingos e Feriados das 10h às 20h
                            </p>
                        </div>
                    </div>

                    <div class="group-actions d-flex align-items-center gap-4 my-4">
                        <a class="btn btn-theme px-3 rounded-pill btn-sm" href="#!"> <i class="bi bi-key-fill"></i>
                            Dc Webmail </a>
                        <button type="button" class="btn btn-theme px-3 rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#modalEstacionamento"> Estacionamento </button>
                        <button type="button" class="btn btn-theme px-3 rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#modalLocacao"> Locação </button>
                        <a class="btn btn-theme px-3 rounded-pill btn-sm" href="#!"> Trabalhe Conosco </a>
                    </div>

                    <div class="acessos-footer d-flex align-items-center gap-2 mt-4">
                        <p class="fw-bold">Acessos:</p>
                        <p>Rua Frederico Mentz, 1561 Av. Voluntários da Pátria, 4389 Navegantes / Porto Alegre/RS -
                            Brasil</p>
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-2 text-center order-first order-md-last mb-4 mb-md-0">
                <x-site.social-icons />
                <img src="{{ asset('assets/images/projeto-pescar.png') }}" alt="Projeto Pescar" class="img-fluid mt-4">
            </div>
        </div>
    </div>
</footer>