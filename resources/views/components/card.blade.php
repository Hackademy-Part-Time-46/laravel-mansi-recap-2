<div class="col">
    <div class="shadow-sm card">
        <img src="{{ Storage::url($product->image) }}" alt="">
        <div class="card-body">
            <p class="card-text">{{ $product->name }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
