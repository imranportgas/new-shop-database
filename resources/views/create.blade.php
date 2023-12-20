

<div>
    <h2>Добавление товара</h2>
    <form action="{{ route('create-product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Название товара">
        <input type="number" name="price" placeholder="Цена">
        <input type="text" name="description" placeholder="Описание">
        <input type="submit" value="Сохранить">
    </form>
</div>



