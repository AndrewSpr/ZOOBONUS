@extends('layout')

@section('content')
@include('inc.product-about')
@include('inc.product-description')
@include('inc.product-comments')
<div class="mini-cards">
    <div class="mini-cards__row">
        @foreach(config('mock.mini-cards') as $miniCards)
            @include('inc.mini-cards')
        @endforeach
    </div>
    <div class="product__btn-container">
        <div class="product__btn product__btn--mini-cards-size">Смотреть всё</div>
    </div>
</div>
@endsection