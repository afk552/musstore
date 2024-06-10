@extends('master')
@section('content')
    <section class="slider">
        <div class="slider-container">
            <div class="header-slider">
                <div class="header-slider__item">
                    <div class="header-slider__item-content">
                        <a class="header-slider__slide" href="products/studio_monitors">
                            <img src="images/Slider.jpg" alt="слайдер">
                        </a>

                    </div>
                </div>
                <div class="header-slider__item">
                    <div class="header-slider__item-content">
                        <a class="header-slider__slide" href="products/headphones">
                            <img src="images/Slider-2.jpg" alt="слайдер">
                        </a>
                    </div>
                </div>
                <div class="header-slider__item">
                    <div class="header-slider__item-content">
                        <a class="header-slider__slide" href="products/midi_keyboards">
                            <img src="images/Slider-3.jpg" alt="слайдер">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="product">
        <div class="container">
            <div class="product__title">
                Наш магазин рекомендует
            </div>
            <div class="product__items">
                @foreach($list_product as $product)
                    <div class="product__item">
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
                                {{$product -> product_price}} руб.
                            </div>
                            <form action="/cart/addCart/{{$product -> id}}" method="post" >
                                @csrf
                                <div class="product__item-btn">
                                    <button>
                                        <a class="product-btn" >В корзину</a>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="container">
            <div class="feedback__item">
                <div class="feedback__item-img">
                    <a href="/products">
                        <img width="100%" src="images/feedback.png">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/anime.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>
@endsection

