@extends('master')
@section('content')

    <section class="products-studio-monitors">
        <div class="container">
            <div class="product__article">
                Наушники
            </div>
            <div class="product-monitor__items">
                @foreach($products as $product)
                    @if($product->id_product_type==1)
                        <div class="product-monitor__item">
                            <div class="product__item-img">
                                <img src="{{$product -> product_img}}" alt="">
                            </div>
                            <div class="product__item-title">
                                <a href="/product/{{$product -> id}}">
                                    {{$product -> product_title}}
                                </a>
                            </div>
                            <div class="product__item-text">
                                {{$product -> product_text}}
                            </div>

                            <div class="product__item-price-btn">
                                <div class="product__item-price">
                                    {{$product -> product_price}} ₽
                                </div>
                                <form action="/cart/addCart/{{$product -> id}}" method="post" >
                                    @csrf
                                    <div class="product-monitor__item-btn">
                                        <button>
                                            <a class="product-btn" >В корзину</a>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/anime.min.js"></script>
    <script src="js/main.js"></script>
@endsection
