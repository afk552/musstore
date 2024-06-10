@extends('master')
@section('content')

    <section class="pay-form">
        <div class="container">
            <div class="pay-form_title">
                Оформление заказа
            </div>
            <form class="pay-form__items">
                @csrf

                <div class="pay-form__input">
                    <label>Введите ФИО</label>
                    <input type="text" placeholder="ФИО">
                </div>
                <div class="pay-form__input">
                    <label>Введите E-mail</label>
                    <input type="email" placeholder="Email">
                </div>
                <div class="pay-form__deliverybuttons">
                    <input type="radio" id="delivery_pickup" name="delivery" value="pickup" />
                    <label for="delivery_pickup">Пункт выдачи</label>
                    <input type="radio" id="delivery_delivery" name="delivery" value="delivery" />
                    <label for="delivery_delivery">Доставка</label>

                    <div id="delivery_address_fields">
                        <label for="delivery_address">Адрес доставки:</label>
                        <input type="text" id="delivery_address" name="delivery_address" placeholder="Введите адрес доставки">
                    </div>
                </div>

                <div class="pay-form__input">
                    <div class="pay__item-btn">
                        <a href="/pay/success" class="pay-btn">Оформить заказ</a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
@endsection
