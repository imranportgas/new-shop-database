@foreach ($products as $product )
    <a href="{{ route('delete', ['id' => $product->id]) }}">
        <div>
            <h2>Name: {{ $product->name }}</h2>
            <p>Price: {{ $product->price }}</p>
            <p>Description: {{ $product->description }}</p>
        </div>
    </a>
    <form action="{{ route('products-delete', ['id' => $product->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Удалить пост</button>
    </form>

@endforeach

