<x-main>
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}">
        <input type="text" name="price" value="{{ old('price') }}">
        <input type="file" name="image">
        <button type="submit">Salva prodotto</button>
    </form>
</x-main>
