@extends('master')
@section('content')




    <section class="products">
        <div class="container">

            <div class="product__article">

                <a href="products/studio_monitors">
                    Студийные мониторы
                </a>
            </div>
            <div class="product__items-2">
                @php $cnt = 0 @endphp
                @foreach($products as $product)
                    @if($product->id_product_type==2)
                        @php $cnt = $cnt + 1 @endphp
                    <div class="product__item">
                        <!-- картинка -->
                        <div class="product__item-img">
                            <img src="{{$product -> product_img}}" alt="">
                        </div>
                        <!-- заголовок -->
                        <div class="product__item-title">
                            <a href="/product/{{$product -> id}}">
                                {{$product -> product_title}}
                            </a>
                        </div>
                        <!-- описание -->
                        <div class="product__item-text">
                            {{$product -> product_text}}
                        </div>

                        <div class="product__item-price-btn">
                            <!-- цена -->
                            <div class="product__item-price">

                                {{$product -> product_price }} ₽
                            </div>
                            <!-- кнопка -->
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
                    @endif
                    @if($cnt>3)
                        @break
                    @endif
                @endforeach

            </div>
            <div class="product__article-2">
                <a href="products/headphones">
                    Наушники
                </a>
            </div>
            <div class="product__items-2">
                @php $cnt = 0 @endphp
                @foreach($products as $product)
                    @if($product->id_product_type==1)
                        @php $cnt = $cnt + 1 @endphp
                    <div class="product__item">
                        <!-- картинка -->
                        <div class="product__item-img">
                            <img src="{{$product -> product_img}}" alt="">
                        </div>
                        <!-- заголовок -->
                        <div class="product__item-title">
                            <a href="/product/{{$product -> id}}">
                                {{$product -> product_title}}
                            </a>
                        </div>
                        <!-- описание -->
                        <div class="product__item-text">
                            {{$product -> product_text}}
                        </div>
                        <div class="product__item-price-btn">
                            <!-- цена -->
                            <div class="product__item-price">

                                {{$product -> product_price }} ₽
                            </div>
                            <!-- кнопка -->
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
                     @endif
                    @if($cnt>3)
                        @break
                    @endif
                @endforeach

            </div>
            <div class="product__article-2">
                <a href="products/midi_keyboards">
                    MIDI-клавитуры
                </a>
            </div>
            <div class="product__items-2">
                @php $cnt = 0 @endphp
                @foreach($products as $product)
                    @if($product->id_product_type==3)
                        @php $cnt = $cnt + 1 @endphp
                    <div class="product__item">
                        <!-- картинка -->
                        <div class="product__item-img">
                            <img src="{{$product -> product_img}}" alt="">
                        </div>
                        <!-- заголовок -->
                        <div class="product__item-title">
                            <a href="/product/{{$product -> id}}">
                                {{$product -> product_title}}
                            </a>
                        </div>
                        <!-- описание -->
                        <div class="product__item-text">
                            {{$product -> product_text}}
                        </div>
                        <div class="product__item-price-btn">
                            <!-- цена -->
                            <div class="product__item-price">

                                {{$product -> product_price }} ₽
                            </div>
                            <!-- кнопка -->
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
                     @endif
                    @if($cnt>3)
                        @break
                    @endif
                @endforeach

            </div>
            <div class="product__article-2">
                <a href="products/guitars">
                    Гитары
                </a>
            </div>
            <div class="product__items-2">
                @php $cnt = 0 @endphp
                @foreach($products as $product)
                    @if($product->id_product_type==4)
                        @php $cnt = $cnt + 1 @endphp
                    <div class="product__item">
                        <!-- картинка -->
                        <div class="product__item-img">
                            <img src="{{$product -> product_img}}" alt="">
                        </div>
                        <!-- заголовок -->
                        <div class="product__item-title">
                            <a href="/product/{{$product -> id}}">
                                {{$product -> product_title}}
                            </a>
                        </div>
                        <!-- описание -->
                        <div class="product__item-text">
                            {{$product -> product_text}}
                        </div>
                        <div class="product__item-price-btn">
                            <!-- цена -->
                            <div class="product__item-price">

                                {{$product -> product_price }} ₽
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
                     @endif
                    @if($cnt>3)
                        @break
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/anime.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>
@endsection
