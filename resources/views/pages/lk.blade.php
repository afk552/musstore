@extends('master')
@section('content')
    <section class="pay-form">
        <div class="container">
            <aside class="sidebar">
                <ul>
                    <li class="active">Информация</li>
                    <li>Заказы</li>
                    <li>Избранное</li>
                    <li>Личные данные</li>
                </ul>
            </aside>
            <main class="main-content">
                <h1>Здравствуйте!</h1>
                <div class="stats">
                    <div class="stat">
                        <span class="stat-number">374</span>
                        <span class="stat-label">Заказов</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">250</span>
                        <span class="stat-label">Музбаллов</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">3%</span>
                        <span class="stat-label">Персональная скидка</span>
                    </div>
                </div>
                <div class="loyalty-card">
                    <h2>Карта лояльности</h2>
                    <p>Получите карту MusStore Платина и покупайте выгодно со скидками до 10% на любую группу товаров!</p>
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

        .stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .stat {
            background-color: #e6e6e6;
            padding: 20px;
            text-align: center;
            width: 30%;
        }

        .stat-number {
            font-size: 24px;
            font-weight: bold;
            display: block;
        }

        .stat-label {
            font-size: 14px;
            color: #777;
        }

        .loyalty-card {
            background-color: #ffe6e6;
            padding: 20px;
        }

        .loyalty-card h2 {
            margin-top: 0;
        }

    </style>

@endsection
