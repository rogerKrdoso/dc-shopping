<div class="card__container">
    <div class="card__img">
        <img src="{{ $image }}" alt="{{ $name }}" class="img-fluid">
    </div>
    <div class="card__nome mt-3">
        {{ $name }}
    </div>
    <div class="card__categ"> {{ $category }} </div>
    <div class="card__number">Loja  {{ $number }} </div>
    <div class="card__wpp">
        <a href="https://wa.me/55">
            <img src="{{ asset('assets/images/whatsapp.png') }}" alt="" class="img-fluid">
            <span> {{ $wpp }} </span>
        </a>
    </div>
    <div class="card__expediente">
        {{ $expediente }}
    </div>
</div>