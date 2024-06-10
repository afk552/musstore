@extends('master')
@section('content')
 <section class="profile">
     <div class="container">
        <div class="profile__title-btn" >
         <div class="profile__title">
             {{$user[0]->email}}
         </div>
            <form class="exitForm" action="/user/exit" method="post">
                @csrf
            <button>
            <a class="profile-exit-btn">Выйти</a>
            </button>
            </form>
        </div>
         <div class="profile__article">
             Заказы
         </div>
         <div class="cart__items">
             @foreach($products as $product)
                 @foreach($carts_user as $cart)
                     @foreach($cart_products as $cart_product)
                         @if( $cart->id_user && $cart_product->id_cart == $cart->id && $product->id == $cart_product->id_product )
                     <div class="cart__item">
                         <div class="cart__image">

                             <img width="40%" src="{{$product -> product_img}}" alt="">
                         </div>
                         <div class="cart__info">
                             <div class="cart__title">
                                 <a href="/product/{{$product -> id}}">
                                     {{$product -> product_title}}
                                 </a>
                             </div>
                             <div class="cart__price">
                                 {{$product -> product_price}} руб.
                             </div>

                         </div>
                         <div class="cart__status">
                             В пути
                         </div>
                         <form action="/cart/deleteCart/{{$product -> id}}" method="post">
                             @csrf
                             <div class="cart__item-delete-btn">
                                 <button>
                                     <a href="#" >
                                         <img width="25%" src="/images/bin.png" alt="">
                                     </a>
                                 </button>
                             </div>
                         </form>
                     </div>
                         @endif
                     @endforeach
                 @endforeach
             @endforeach
         </div>
     </div>
 </section>
@endsection
