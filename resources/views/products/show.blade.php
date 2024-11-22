<x-main>
    <h1>{{ $product->name }}</h1>
    <span>{{ $product->price }}</span>
    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" />

</x-main>
