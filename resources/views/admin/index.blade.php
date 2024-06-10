@extends('layouts.admin')

@section('content')
    <h1>Административная панель</h1>
    <h2 id="add_product">Добавить товар</h2>
    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <div>
            <label for="product_img">Изображение</label>
            <input type="text" id="product_img" name="product_img" required>
        </div>
        <div>
            <label for="product_title">Название</label>
            <input type="text" id="product_title" name="product_title" required>
        </div>
        <div>
            <label for="product_price">Цена</label>
            <input type="number" id="product_price" name="product_price" required>
        </div>
        <div>
            <label for="product_text">Тип</label>
            <input type="text" id="product_text" name="product_text" required>
        </div>
        <div>
            <label for="id_product_type">ID типа</label>
            <input type="text" id="id_product_type" name="id_product_type" required>
        </div>
        <div>
            <label for="product_description">Описание</label>
            <textarea id="product_description" name="product_description" required></textarea>
        </div>
        <button type="submit">Добавить продукт</button>
    </form>

    <h2 id="update_product">Обновить товар</h2>
    <ul>
        @foreach($products as $product)
            <li>
                <span class="open-modal" data-description="{{ $product->product_description }}">{{ $product->product_title }}</span> - {{ $product->product_price }}
                <form action="{{ route('admin.products.delete', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
                    @csrf
                    <div>
                        <label for="product_img">Изображение</label>
                        <input type="text" id="product_img" name="product_img" value="{{ $product->product_img }}" required>
                    </div>
                    <div>
                        <label for="product_title">Название</label>
                        <input type="text" id="product_title" name="product_title" value="{{ $product->product_title }}" required>
                    </div>
                    <div>
                        <label for="product_price">Цена</label>
                        <input type="number" id="product_price" name="product_price" value="{{ $product->product_price }}" required>
                    </div>
                    <div>
                        <label for="product_text">Тип</label>
                        <input type="text" id="product_text" name="product_text" value="{{ $product->product_text }}" required>
                    </div>
                    <div>
                        <label for="id_product_type">ID типа</label>
                        <input type="text" id="id_product_type" name="id_product_type" value="{{ $product->id_product_type }}" required>
                    </div>
                    <div>
                        <label for="product_description">Описание</label>
                        <textarea id="product_description" name="product_description" required>{{ $product->product_description }}</textarea>
                    </div>
                    <button type="submit">Обновить</button>
                </form>
            </li>
        @endforeach
    </ul>

    <h2 id="users">Пользователи</h2>
    <table>
        <thead>
        <tr>
            <th>Эл. почта</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <span> {{ $user->email }}</span>
                </td>
                <td>
                    <form action="{{ route('admin.users.delete', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Удалить пользователя</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modal-text">
            @foreach($products_type as $types)
                <h3>{{ $types->id }} - {{ $types->product_type }}</h3>
            @endforeach
        </div>
    </div>
@endsection
