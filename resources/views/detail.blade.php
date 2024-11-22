<x-main>
    <div class="py-5 album bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <x-card :$product />
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <form action="{{ route('sendemail') }}" method="post">
            @csrf

            <input class="mt-5 form-control" type="text" name="email">
            <textarea class="mt-5 form-control" name="message"cols="30" rows="10"></textarea>

            <button type="submit">Invia proposta di acquisto</button>
        </form>
    </div>
</x-main>
