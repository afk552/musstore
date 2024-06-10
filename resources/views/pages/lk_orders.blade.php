@extends('master')
@section('content')

    <section class="pay-form">
        <div class="container">
            <aside class="sidebar">
                <ul>
                    <li>Информация</li>
                    <li class="active">Заказы</li>
                    <li>Избранное</li>
                    <li>Личные данные</li>
                </ul>
            </aside>
            <main class="main-content">
                <h1>Здравствуйте, Александр!</h1>
                <div class="orders-header">
                    <h2>Заказы</h2>
                    <a href="#" class="archive-link">Архив заказов</a>
                </div>

                <div class="order">
                    <div class="order-header">
                        <h3>Заказ №42734 от 01.04.2024</h3>
                        <span class="order-price">15000 ₽</span>
                    </div>
                    <div class="order-content">
                        <img src="https://via.placeholder.com/100" alt="Pioneer DDJ-400">
                        <div class="order-details">
                            <p>Pioneer DDJ-400</p>
                            <p>1 шт., цвет: черный</p>
                            <p>Самовывоз (ул. Пушкина 10)</p>
                            <p>Доставим до 2 апреля</p>
                        </div>
                        <div class="order-actions">
                            <button class="button">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="order">
                    <div class="order-header">
                        <h3>Заказ №42735 от 20.02.2024</h3>
                        <span class="order-price">15000 ₽</span>
                    </div>
                    <div class="order-content">
                        <img src="https://via.placeholder.com/100" alt="KRK Rokit 5 G3">
                        <div class="order-details">
                            <p>KRK Rokit 5 G3</p>
                            <p>2 шт., цвет: черный</p>
                            <p>Самовывоз (ул. Пушкина 10)</p>
                            <p>Доставим до 1 апреля</p>
                        </div>
                        <div class="order-actions">
                            <button class="button">В архив</button>
                            <button class="button">Подробнее</button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </section>

    <style>
        .container {
            display: flex;
        }

        .sidebar {
            background-color: #e6e6e6;
            padding: 20px;
            width: 200px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            padding: 10px;
            background-color: #fff;
            margin-bottom: 10px;
            text-align: center;
            cursor: pointer;
        }

        .sidebar li.active, .sidebar li:hover {
            background-color: #d32f2f;
            color: white;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            background-color: white;
        }

        .main-content h1 {
            margin-top: 0;
        }

        .orders-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .archive-link {
            color: #d32f2f;
            text-decoration: none;
            font-weight: bold;
        }

        .order {
            border: 1px solid #e6e6e6;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .order-header h3 {
            margin: 0;
        }

        .order-price {
            font-size: 18px;
            font-weight: bold;
        }

        .order-content {
            display: flex;
            align-items: center;
        }

        .order-content img {
            margin-right: 20px;
        }

        .order-details {
            flex-grow: 1;
        }

        .order-actions {
            display: flex;
            flex-direction: column;
        }

        .button {
            background-color: #d32f2f;
            color: white;
            border: none;
            padding: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            text-align: center;
        }

        .button:hover {
            background-color: #b71c1c;
        }

    </style>

@endsection
