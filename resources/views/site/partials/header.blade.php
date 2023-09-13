<header>
    <nav id="navbar_top" class="navbar navbar-expand-lg text-bg-light">
        <div class="container">

            {{-- Logo Mobile Component --}}
            <x-site.logo class="d-lg-none" />

            {{-- Portal Mobile Component --}}
            <x-site.portal-lojista class="d-lg-none"/>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center gap-3" id="main_nav">

                {{-- Logo Desktop Component --}}
                <x-site.logo class="d-none d-lg-block" />

                {{-- Main Menu Component --}}
                <x-site.main-menu class="align-items-center gap-4"/>

                {{-- Portal Desktop Component --}}
                <x-site.portal-lojista class="d-none d-lg-flex"/>

            </div>

        </div>
    </nav>
</header>
