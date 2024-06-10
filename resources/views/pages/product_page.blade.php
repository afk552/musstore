@extends('master')
@section('content')
    <section class="product-pg">
        <div class="container">

            <div class="product-page__article">

                @if($product{0}->product_text === "Наушники")
                    <a href="/../products/headphones">
                        {{$product{0}  -> product_text}}
                    </a>
                @endif

                @if($product{0}->product_text === "Студийные мониторы")
                        <a href="/../products/studio_monitors">
                            {{$product{0}  -> product_text}}
                        </a>
                    @endif
                    @if($product{0}->product_text === "MIDI Клавиатуры")
                        <a href="/../products/midi_keyboards">
                            {{$product{0}  -> product_text}}
                        </a>
                    @endif
                    @if($product{0}->product_text === "Гитары")
                        <a href="/../products/guitars">
                            {{$product{0}  -> product_text}}
                        </a>
                    @endif

            </div>

                    <div class="product-page">
                        <!-- картинка -->
                        <div class="product-page__image">
                            <img src="{{$product{0} -> product_img}}" alt="">
                        </div>
                        <!-- информация -->
                        <div class="product-page__info">
                            <!-- название -->
                            <div class="product-page__title">
                                {{$product{0}  -> product_title}}
                            </div>
                            <!-- краткое описание -->
                            <div class="product-page__short-description">
                                <p>
                                    {{$product{0}  -> product_text}}
                                </p>
                            </div>
                            <!-- цена -->
                            <div class="product-page__price">
                                {{$product{0}  -> product_price}} ₽
                            </div>
                            <form action="/cart/addCart/{{$product{0} -> id}}" method="post" >
                            @csrf
                            <!-- кнопка в корзину -->
                            <div class="product-page__item-btn">
                                <button>
                                <a class="product-page-btn" > В корзину </a>
                                </button>
                            </div>
                            </form>
                        </div>

                    </div>

                    <div class="product-page__description">
                        <div class="product-page__description-title">
                            Описание:
                        </div>
                        <div class="product-page__description-text">
                               {{$product{0}  -> product_description}}
                        </div>
                        <div class="product-page__description-table"

                        </div>
                    </div>

        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/anime.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="js/main.js"></script>
@endsection
