@extends('master')

@section('content')
    <div class="container">
        <h1>Результаты поиска по "{{ $query }}"</h1>

        @if($products->isEmpty())
            <p>Ничего не нашлось.</p>
        @else
            <div class="product__items-2">
                @foreach($products as $product)
                    <div class="product__item">
                        <div class="product__item-img">
                            <img src="{{ $product->product_img }}" alt="{{ $product->product_title }}">
                        </div>
                        <div class="product__item-title">
                            <a href="/product/{{ $product->id }}">{{ $product->product_title }}</a>
                        </div>
                        <div class="product__item-text">
                            {{ $product->product_text }}
                        </div>
                        <div class="product__item-price-btn">
                            <div class="product__item-price">
                                {{ $product->product_price }} руб.
                            </div>
                            <form action="/cart/addCart/{{ $product->id }}" method="post">
                                @csrf
                                <div class="product__item-btn">
                                    <button type="submit" class="product-btn">В корзину</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
