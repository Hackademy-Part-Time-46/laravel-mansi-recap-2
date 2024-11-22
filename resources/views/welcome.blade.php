<x-main>
    <div class="py-5 album bg-body-tertiary">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($products as $product)
                    <x-card :$product>
                        <a href="{{ route('detail', ['product' => $product]) }}"
                            class="btn btn-sm btn-outline-secondary">Compra</a>
                    </x-card>
                @endforeach
            </div>
        </div>
    </div>

</x-main>
