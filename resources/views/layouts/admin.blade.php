<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="/css/admin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Административная панель</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="#add_product">Добавить товар</a></li>
            <li><a href="#update_product">Обновить товар</a></li>
            <li><a href="#users">Пользователи</a></li>
            <li><a href="#" class="open-modal"> ID типов товара</a></li>
        </ul>
    </nav>
</header>

<main>
    @yield('content')
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById("modal");
        var span = document.getElementsByClassName("close")[0];

        document.querySelectorAll('.open-modal').forEach(function (element) {
            element.onclick = function () {
                var description = this.getAttribute('data-description');
                document.getElementById('modal-text').innerText = description;
                modal.style.display = "block";
            };
        });

        span.onclick = function () {
            modal.style.display = "none";
        };

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    });
</script>
</body>
</html>
