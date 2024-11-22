<x-main>
    <a href="{{ route('product.create') }}">Crea nuovo prodotto</a>
    <ul>
        @forelse ($products as $product)
            <li><a href="{{ route('product.show', ['product' => $product]) }}">{{ $product->name }}</a></li>
        @empty
            nessun prodotto inserito
        @endforelse
    </ul>
</x-main>
