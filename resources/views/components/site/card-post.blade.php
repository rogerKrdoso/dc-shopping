<div class="card__container">
    <div class="card__img">
        <img src="{{ $image }}" alt="{{ $name }}" class="img-fluid">
    </div>
    <div class="card__categ mt-3"> {{ $date }} </div>
    <div class="card__nome mt-1">
        {{ $name }}
    </div>
    <div class="card__expediente my-3">
        {{ $description }}
    </div>
    <div class="card__link">
        <a href="{{ $link }}" class="text-dark">Leia Mains >></a>
    </div>
</div>