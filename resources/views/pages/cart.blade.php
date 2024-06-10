@extends('master')
@section('content')
    <section class="cart">
        <div class="container">

            <div class="cart__article">
                Корзина
            </div>
            <?php
            $var = 0
            ?>

            <div class="cart__items">
                @foreach($products as $product)
                    @foreach($carts as $cart)
                        @foreach($cart_products as $cart_product)
                            @if( $cart->id_user && $cart_product->id_cart == $cart->id && $product->id == $cart_product->id_product )
                <div class="cart__item">
                <!-- картинка -->
                <div class="cart__image">
                    <img width="40%" src="{{$product -> product_img}}" alt="">
                </div>
                <!-- информация -->
                <div class="cart__info">
                    <!-- название -->
                    <div class="cart__title">
                        <a href="/product/{{$product -> id}}">
                            {{$product -> product_title}}
                        </a>
                    </div>
                    <!-- цена -->
                    <div class="cart__price">
                        {{$product -> product_price}} ₽
                    </div>
                </div>
                <!-- статус -->
                <div class="cart__status">
                    В наличии
                    <!-- кнопка -->
                    <form action="/cart/addCart/{{$product -> id}}" method="post" >
                        @csrf
                    </form>


                </div>
                    <!-- кнопка удаления товара -->
                    <form action="/cart/deleteCart/{{$cart_product->id}}" method="post">
                        @csrf
                        <div class="cart__item-delete-btn">
                            <button>
                                <img width="25%" src="/images/bin.png" alt="">
                            </button>
                        </div>
                    </form>
                </div>
                            @endif
                        @endforeach
                    @endforeach
                @endforeach

            </div>


            <div class="cart__price-btn">
                @foreach($products as $product_sum)
                    @foreach($carts as $cart_sum)
                        @foreach($cart_products as $cart_product_sum)
                        @if($cart_product_sum->id_product == $product_sum->id )
                                <?php

                                $var+=($product_sum->product_price)
                                ?>
                            @endif
                        @endforeach
                    @endforeach
                @endforeach
            <div class="cart__all-price">
               Общая цена {{$var}} ₽
            </div>

            <!-- кнопка оформить заказ -->
            <div class="cart__item-btn">
                <a class="cart-btn-back" href="../products">К покупкам</a>
                <a class="cart-btn" href="/pay">Оформить заказ</a>
            </div>
            </div>


        </div>
    </section>

    <style>
        .cart__quantity {
            margin-top: 0px;
            margin-left: 40px;
        }

        .cart__quantity input[type="number"] {
            width: 60px;
        }

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/anime.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="js/main.js"></script>
@endsection
