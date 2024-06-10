@extends('master')
@section('content')

    <div class="container__success" style="text-align: center;">
        <h1 class="product-page__article"> 😊 </h1>
        <h1 class="product-page__article"> Заказ оформлен! </h1>

        <div class="cart__item-btn_success" style="justify-content: center;">
            <a class="cart-btn-back" href="../products">К покупкам</a>
        </div>
    </div>

    <style>
        .container__success{
            padding: 5%;
        }
        .cart-btn-back {
            font-weight: 700;
            font-size: 25px;
            color: #FFFFFF;
            background-color: #FF2020;
            padding: 10px 30px;
            border-radius: 5px;
            margin-right: 0;
        }
    </style>

@endsection
